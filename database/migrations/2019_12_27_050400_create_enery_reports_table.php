<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEneryReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enery_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('legal_name')->nullable();
            $table->string('factory_name')->nullable();
            $table->string('tsic_id')->nullable();
            $table->integer('year')->nullable();
            $table->integer('user_id')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('enery_reports');
    }
}
