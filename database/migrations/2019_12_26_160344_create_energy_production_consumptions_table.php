<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnergyProductionConsumptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energy_production_consumptions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('month')->nullable();
            $table->float('yield')->nullable();
            $table->float('consumption_electricity')->nullable();
            $table->float('consumption_heat')->nullable();
            $table->integer('energy_production_id')->nullable();
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
        Schema::drop('energy_production_consumptions');
    }
}
