<template>
  <b-card>
    <h2 class="h2">{{ title }}</h2>
    <b-form
      @submit.prevent="onSubmit"
      @reset.prevent="onReset"
      v-if="show"
      label-class="text-dash-color"
    >
      <b-form-group
        label-class="text-dash-color"
        id="input-group-1"
        label="Nom d'utilisateur *"
        label-for="input-1"
        :invalid-feedback="errors.username ? errors.username[0] : null"
        :state="!errors.username"
      >
        <b-form-input
          class="input-dash"
          id="input-1"
          v-model="form.username"
          type="text"
          placeholder="Entrer le username"
          required
        ></b-form-input>
      </b-form-group>
      <b-form-group
        id="input-group-2"
        label="Email address *"
        label-class="text-dash-color"
        label-for="input-2"
      >
        <b-form-input
          class="input-dash"
          id="input-2"
          v-model="form.email"
          type="email"
          placeholder="Entre email"
          required
          @blur="validateMail()"
        ></b-form-input>
      </b-form-group>
      <b-form-text id="password-help-block">{{
        validateMailMessage
      }}</b-form-text>
      <b-form-group
        label-class="text-dash-color"
        id="input-group-3"
        label="Nom *"
        label-for="input-3"
      >
        <b-form-input
          id="input-3"
          class="input-dash"
          v-model="form.name"
          placeholder="Entrer le nom"
          required
        ></b-form-input>
      </b-form-group>
      <label class="text-dash-color" for="check-group-1">Roles *</label>
      <v-select
        v-model="form.roles"
        multiple
        :options="roles"
        label="name"
        :reduce="(item) => item.id"
      />
      <label class="text-dash-color" for="text-password">Mot de passe *</label>
      <b-form-input
        class="input-dash"
        type="password"
        id="text-password"
        aria-describedby="password-help-block"
        v-model="form.password"
      ></b-form-input>
      <label class="text-dash-color" for="text-password-confirm"
        >Confirmation de mot de passe *</label
      >
      <b-form-input
        class="input-dash"
        type="password"
        id="text-password-confirm"
        aria-describedby="password-help-block"
        v-model="form.confirmPassword"
      ></b-form-input>
      <b-form-text id="password-help-block">{{ warningMissMatch }}</b-form-text>
      <b-row class="px-3 pt-4 d-flex justify-content-start">
          <b-button type="submit" variant="primary" class="btn-dash-sucess">
            <span v-if="isLoading"
            ><b-spinner class="align-middle"></b-spinner>
              <span>en cours ...</span>
            </span>
            <div v-else>
              {{btnTitle }}
            </div>
          </b-button>
        <b-button
          type="reset"
          v-if="updating"
          variant="primary"
          class="ml-4 btn-dash-danger"
          >Annuler</b-button
        >
      </b-row>
    </b-form>
  </b-card>
</template>

<script>
export default {
  props: {
    userAdded: {
      type: Boolean,
      required: false,
      default: false,
    },
    userUpdated: {
      type: Boolean,
      required: false,
      default: false,
    },
    formToPopulate: {
      type: Object,
      required: false,
      default: () => {
        return {};
      },
    },
    roles: {
      type: Array,
      default: () => {
        return [];
      },
    },
    errors: {
      type: Object,
      default: () => ({}),
    },
  },
  data() {
    return {
      title: "Creation d'un utilisateur",
      btnTitle: "Enreigistrer",
      iconClass: "fas fa-plus-square",
      updating: false,
      isLoading: false,
      validateMailMessage: "",
      disablePassword: false,
      form: {
        username: "",
        name: "",
        roles: [],
        email: "",
        password: "",
        confirmPassword: "",
      },
      show: true,
      showWarning: false,
      toBeCanceled: true,
    };
  },
  mounted() {
    this.resetForm();
  },
  watch: {
    userAdded() {
      this.resetForm();
    },
    userUpdated() {
      this.resetForm();
    },
    formToPopulate() {
      this.populateForm();
    },
  },
  methods: {
    onSubmit() {
      this.isLoading = true;
      if (this.btnTitle === "Enreigistrer") {
        if (
          this.form.password === this.form.confirmPassword &&
          this.form.roles.length !== 0
        ) {
          this.$emit("onCreate", this.form);
        } else {
          this.showWarning = true;
        }
      } else {
        this.$emit("onUpdate", this.form);
      }
    },

    onReset() {
      this.toToCanceled = true;
      this.form = {};
      this.title = "Creation d'un utilisateur";
      this.btnTitle = "Enreigistrer";
      this.$emit("onCancelUpdate", {});
    },

    validateMail() {
      const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if (!re.test(String(this.form.email).toLowerCase())) {
        this.validateMailMessage = "Adresse email incorrecte";
      }
    },

    resetForm() {
      this.updating = false;
      this.isLoading = false;
      this.disablePassword = false;
      if (this.userAdded | this.userUpdated) {
        this.form = {};
        this.btnTitle = "Enreigistrer";
        this.title = "Creation d'un utilisateur";
      }
    },

    populateForm() {
      this.updating = true;
      this.disablePassword = true;
      this.form.id = this.formToPopulate.id;
      this.form.username = this.formToPopulate.usernmae;
      this.form.email = this.formToPopulate.email;
      this.form.roles = this.formToPopulate.roles.map(x=>x.id);
      this.form.name = this.formToPopulate.name;
      this.title = "Modification de l'utilisateur";
      this.btnTitle = "Modifier";
    },

  },

  computed: {
    warningMissMatch() {
      return this.form.password === this.form.confirmPassword
        ? ""
        : "Les mot de passes ne correspondent pas";
    },
  },
  
};
</script>

<style lang='scss' scoped>
@import "@~/sass/_variables";
.main {
  background-color: white;
  border-radius: 10px;
  h2 {
    margin-bottom: 20px;
  }
}
</style>
