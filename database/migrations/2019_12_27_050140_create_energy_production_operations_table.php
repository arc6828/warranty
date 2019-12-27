<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnergyProductionOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energy_production_operations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('energy_production_id')->nullable();
            $table->string('raw_material')->nullable();
            $table->integer('month')->nullable();
            $table->float('working_hours')->nullable();
            $table->string('production_unit')->nullable();
            $table->float('yield')->nullable();
            $table->float('capacity')->nullable();
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
        Schema::drop('energy_production_operations');
    }
}
