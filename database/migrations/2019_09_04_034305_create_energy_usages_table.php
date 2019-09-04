<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnergyUsagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energy_usages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->string('place_type');
            $table->string('category');
            $table->date('date_begin')->nullable();
            $table->date('date_end')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('watts')->nullable();
            $table->float('joules')->nullable();
            $table->float('hours_per_day')->nullable();
            $table->float('day_per_week')->nullable();
            $table->integer('user_id')->unsigned();
            $table->string('photo')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('energy_usages');
    }
}
