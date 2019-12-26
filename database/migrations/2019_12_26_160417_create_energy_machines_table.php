<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnergyMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energy_machines', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('system')->nullable();
            $table->string('machine_name')->nullable();
            $table->string('power_type')->nullable();
            $table->float('spec')->nullable();
            $table->string('spec_unit')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('lifetime')->nullable();
            $table->float('average_active_hours')->nullable();
            $table->float('electric_power')->nullable();
            $table->float('heat_power')->nullable();
            $table->text('fuel_type')->nullable();
            $table->integer('fuel_unit')->nullable();
            $table->float('performance_spec')->nullable();
            $table->string('performance_unit')->nullable();
            $table->float('performance_actual')->nullable();
            $table->string('performance_actual_unit')->nullable();
            $table->text('remark')->nullable();
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
        Schema::drop('energy_machines');
    }
}
