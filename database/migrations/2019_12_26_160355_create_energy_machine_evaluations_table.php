<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnergyMachineEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energy_machine_evaluations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('energy_machine_id')->nullable();
            $table->integer('power_consumption_size')->nullable();
            $table->integer('operating_hours')->nullable();
            $table->integer('improvement_potential')->nullable();
            $table->integer('total_score')->nullable();
            $table->integer('priority')->nullable();
            $table->string('department')->nullable();
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
        Schema::drop('energy_machine_evaluations');
    }
}
