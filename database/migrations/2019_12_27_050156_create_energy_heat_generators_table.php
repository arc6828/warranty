<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnergyHeatGeneratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energy_heat_generators', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('month')->nullable();
            $table->float('capacity')->nullable();
            $table->string('primary_fuel_consumption_type')->nullable();
            $table->float('primary_fuel_consumption_volume')->nullable();
            $table->string('primary_fuel_consumption_unit')->nullable();
            $table->float('operating_hours')->nullable();
            $table->float('electricity_use')->nullable();
            $table->float('electricity_sale')->nullable();
            $table->float('steam_use')->nullable();
            $table->float('steam_sale')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('enery_report_id')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('energy_heat_generators');
    }
}
