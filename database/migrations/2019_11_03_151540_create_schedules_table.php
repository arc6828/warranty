<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('menu')->nullable();
            $table->integer('cost_cons')->nullable();
            $table->integer('cost_tool')->nullable();
            $table->integer('cost_install')->nullable();
            $table->integer('cost_test')->nullable();
            $table->integer('investment')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('schedules');
    }
}
