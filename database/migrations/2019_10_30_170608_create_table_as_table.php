<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableAsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_as', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('request_number')->nullable();
            $table->date('registration_date')->nullable();
            $table->string('fullname')->nullable();
            $table->string('company')->nullable();
            $table->string('production')->nullable();
            $table->integer('promotion_certificate_number')->nullable();
            $table->date('promotion_date')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('table_as');
    }
}
