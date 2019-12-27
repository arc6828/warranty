<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnergyPortionElectricitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energy_portion_electricities', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('system')->nullable();
            $table->float('electric_power_consumption')->nullable();
            $table->string('method_assessment')->nullable();
            $table->string('method_check')->nullable();
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
        Schema::drop('energy_portion_electricities');
    }
}
