<template>
  <FullScreen
    id="fullscreenTendanceChart"
    link="tendanceChart"
    @change="fullscreenChange"
  >
    <b-container
      fluid
      class="p-0 container-tendanceChart"
      ref="tendanceContainer"
    >
      <b-row no-gutters>
        <b-col cols="12" class="pl-0 pr-2">
          <canvas width="100vh" ref="tendanceChart" id="tendanceChart" />
        </b-col>
      </b-row>
    </b-container>
  </FullScreen>
</template>

<script>
import { DRC_COVID_EVENT, PALETTE, PREFERENCE_END } from "../../config/env";
import Chart from "chart.js";
import "../../lib/chartjs-plugin-annotation.min.js";
import { mapState, mapMutations } from "vuex";
export default {
  props: {
    flux24Daily: {
      type: Array,
      default: () => [],
    },
  },
  data() {
    return {
      myLineChart: null,
      fluxTimeGranularity: null,
      configChar: null,
      observationDate: {},
    };
  },
  watch: {
    flux24Daily() {
      if (this.flux24Daily.length > 0) {
        this.$nextTick(() => {
          this.drawChart(this.flux24Daily, this.$refs.tendanceChart);
        });
      }
    },
  },
  computed: {
    ...mapState({
      // fluxTimeGranularity: state => state.flux.fluxTimeGranularity,
      fluxGeoOptions: (state) => state.flux.fluxGeoOptions,
      // observationDate: (state) =>state.flux.observationDate
    }),
  },
  mounted() {
    this.fluxTimeGranularity = this.$store.state.flux.fluxTimeGranularity;
    this.$store.watch(
      (state) => state.flux.fluxTimeGranularity,
      (value) => {
        this.fluxTimeGranularity = value;
      }
    );
    this.observationDate = this.$store.state.flux.observationDate;

    this.$store.watch(
      (state) => state.flux.observationDate,
      (value) => {
        this.observationDate = value;
      }
    );
    if (this.flux24Daily.length > 0) {
      this.$nextTick(() => {
        this.drawChart(this.flux24Daily, this.$refs.tendanceChart);
      });
    }
  },
  methods: {
    ...mapMutations(["setTendanceChartSelectedValue"]),
    isStartIsEnd() {
      return (
        this.observationDate.start &&
        this.observationDate.start == this.observationDate.end
      );
    },
    drawChart(data, ref) {
      if (!data) {
        return;
      }

      const labels = [];
      const localData = [];
      data.map((x) => {
        localData.push({ x: moment(x.date), y: x.volume, date: x.date });
      });

      const maxDate = moment.max(localData.map((item) => item.x));
      const minDate = moment.min(localData.map((item) => item.x));

      const mainEvent = [];
      DRC_COVID_EVENT.filter(
        (x) =>
          x.measures.some((z) =>
            z.zones.some(
              (y) => [...this.fluxGeoOptions].includes(y) || y == "ALL"
            )
          ) &&
          new Date(x.date) >= minDate &&
          new Date(x.date) <= maxDate
      ).map((item) => {
        let element = {};

        if (this.fluxTimeGranularity == 1) {
          element = localData.find((x) => x.date == item.date);
        } else {
          element = localData
            .filter((x) => x.date == item.date)
            .sort((a, b) => b.y - a.y)[0];
        }
        if (!element) {
          // console.log('item',item);
          return;
        }

        mainEvent.push({
          x: element.x,
          y: element.y,
          measures: item.measures,
        });
      });

      this.configChar = {
        type: "line",
        data: {
          // labels: labels,
          datasets: [
            {
              label: "Volume",
              fill: false,
              borderColor: "rgb(51, 172, 46)",
              backgroundColor: "rgb(166,180,205, 0.2)",
              data: localData,
              interpolate: true,
              showLine: true,
              pointRadius: 1,
              borderWidth: 1.5,
              lineTension: 0.3,
              xAxisID: "x-axis-0",
            },
            {
              label: "Event",
              fill: true,
              borderColor: "#225ea8",
              backgroundColor: "#225ea8ad",
              data: mainEvent,
              interpolate: true,
              // showLine: false,
              pointStyle: "circle",
              radius: 5,
              borderWidth: 1.5,
              lineTension: 0.3,
              xAxisID: "x-axis-0",
              type: "bubble",
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
            display: false,
          },
          title: {
            display: true,
            text: "Flux de tendance" + this.getZone,
            fontSize: 9,
          },
          scales: {
            xAxes: [
              {
                display: true,
                // id: "x-axis-0",
                scaleLabel: {
                  display: false,
                  labelString: "Month",
                },
                type: "time",
                time: {
                  unit: "day",
                  unitStepSize: 1,
                  displayFormats: {
                    day: "DD.MM",
                    hour: "HH:mm",
                    minute: "HH:mm",
                  },
                },
                ticks: {
                  fontSize: 9,
                  max: maxDate,
                  min: minDate,
                  major: {
                    enabled: true,
                    fontStyle: "bold",
                    fontColor: PALETTE.flux_in_color,
                    fontSize: 10,
                  },
                },
              },
            ],
            yAxes: [
              {
                display: true,
                scaleLabel: {
                  display: false,
                  labelString: "Value",
                },
                ticks: {
                  fontSize: 9,
                  beginAtZero: false,
                  callback: (value, index, values) => {
                    return this.formatCash(value);
                  },
                },
              },
            ],
          },
          tooltips: {
            enabled: true,
            // mode: "interpolate",
            intersect: false,
            bodyFontSize: 10,
            displayColors: false,
            callbacks: {
              title: (a, d) => {
                return this.moment(a[0].xLabel).format("DD.MM.Y");
              },

              label: (i, d) => {
                if (i.datasetIndex == 1) {
                  return;
                }
                const element = mainEvent.find(
                  (x) =>
                    x.x.format("DD.MM.Y") == moment(i.xLabel).format("DD.MM.Y")
                );
                const measures = [];
                if (element) {
                  element.measures.forEach((item) => {
                    let itemText = `* ${item.item}`;
                    if (item.isSuite) {
                      itemText = item.item;
                    }
                    measures.push(itemText);
                  });
                }
                return [`* Volume:${this.formatCash(i.yLabel)}`, ...measures];
              },
            },
          },
          plugins: {
            crosshair: {
              sync: {
                enabled: false,
              },
              zoom: {
                enabled: false, // enable zooming
                zoomboxBackgroundColor: "rgba(66,133,244,0.2)", // background color of zoom box
                zoomboxBorderColor: "#48F", // border color of zoom box
                zoomButtonText: "Reset Zoom", // reset zoom button text
                zoomButtonClass: "reset-zoom", // reset zoom button class
              },
            },
          },
        },
      };
      if (this.myLineChart) this.myLineChart.destroy();
      this.myLineChart = new Chart(ref.getContext("2d"), this.configChar);
      const myLineChart2 = this.myLineChart;
    },
    fullscreenChange(fullscreen, ref) {
      this.fullscreen = fullscreen;
      if (!fullscreen) {
        const buttonResetZoom = this.myLineChart.crosshair.button;
        if (buttonResetZoom) {
          buttonResetZoom.click();
        }
        this.configChar.options.plugins.crosshair.zoom.enabled = false;
        this.$refs.tendanceChart.style.height = "100%";
        this.$refs.tendanceChart.height = "100%";
        this.myLineChart.update();
      } else {
        this.configChar.options.plugins.crosshair.zoom.enabled = true;
        this.myLineChart.update();
      }
    },
  },
  computed: {
    ...mapState({
      fluxGeoOptions: (state) => state.flux.fluxGeoOptions,
    }),
    getZone() {
      if (this.fluxGeoOptions && this.fluxGeoOptions.length > 0)
        return " à " + this.fluxGeoOptions[0];
      else return "";
    },
  },
};
</script>

<style lang="scss" scoped>
.container-tendanceChart {
  height: 100%;
  background-color: white;
  .row {
    height: 100%;
  }
}
.fullscreen {
  display: flex;
  align-items: center;
  justify-content: center;
  .container-tendanceChart {
    width: 100%;
    height: 65%;
    .row {
      padding: 20px;
    }
  }
}
#tendanceChart {
  height: 100% !important;
}
</style>
