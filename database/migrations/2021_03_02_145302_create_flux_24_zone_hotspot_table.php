<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlux24ZoneHotspotTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('flux_24_zone_hotspot', function (Blueprint $table) {
      $table->id();
      $table->date('date')->nullable();
      $table->string('Observation_Zone')->nullable();
      $table->float('volume')->default(0)->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('flux_24_zone_hotspot');
  }
}
