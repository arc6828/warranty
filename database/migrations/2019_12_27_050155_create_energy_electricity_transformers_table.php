<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnergyElectricityTransformersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energy_electricity_transformers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('user_serial')->nullable();
            $table->string('transformer_serial')->nullable();
            $table->string('user_type')->nullable();
            $table->string('usage_rate');
            $table->float('transformer_size')->nullable();
            $table->integer('transformer_quantity')->nullable();
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
        Schema::drop('energy_electricity_transformers');
    }
}
