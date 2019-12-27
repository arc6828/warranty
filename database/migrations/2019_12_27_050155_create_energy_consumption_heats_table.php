<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnergyConsumptionHeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energy_consumption_heats', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('month')->nullable();
            $table->float('fuel_oil_liter')->nullable();
            $table->float('fuel_oil_baht')->nullable();
            $table->float('diesel_oil_liter')->nullable();
            $table->float('diesel_oil_baht')->nullable();
            $table->float('lpg_kg')->nullable();
            $table->float('lpg_baht')->nullable();
            $table->float('natural_gas_millionbtu')->nullable();
            $table->float('natural_gas_baht')->nullable();
            $table->float('coal_ton')->nullable();
            $table->float('coal_baht')->nullable();
            $table->float('steam_purchased_ton')->nullable();
            $table->float('steam_purchased_baht')->nullable();
            $table->integer('other_unit')->nullable();
            $table->integer('other_baht')->nullable();
            $table->integer('renewable_energy_unit')->nullable();
            $table->integer('renewable_energy_baht')->nullable();
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
        Schema::drop('energy_consumption_heats');
    }
}
