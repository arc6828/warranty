<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnergyConsumptionElectricitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energy_consumption_electricities', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('month')->nullable();
            $table->float('maximum_power_p')->nullable();
            $table->float('maximum_power_pp')->nullable();
            $table->float('maximum_power_op')->nullable();
            $table->float('maximum_power_expenses')->nullable();
            $table->float('electrical_energy_volume')->nullable();
            $table->float('electrical_energy_expenses')->nullable();
            $table->float('total_electric_bill')->nullable();
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
        Schema::drop('energy_consumption_electricities');
    }
}
