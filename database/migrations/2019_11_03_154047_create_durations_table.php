<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('durations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('duration')->nullable();
            $table->string('order_m')->nullable();
            $table->string('install_m')->nullable();
            $table->string('generate')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('durations');
    }
}
