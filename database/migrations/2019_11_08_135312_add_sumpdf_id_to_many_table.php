<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSumpdfIdToManyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('table_as', function (Blueprint $table) {
            $table->integer('sumpdf_id')->nullable();
        });
        Schema::table('table_bs', function (Blueprint $table) {
            $table->integer('sumpdf_id')->nullable();
        });
        Schema::table('table_cs', function (Blueprint $table) {
            $table->integer('sumpdf_id')->nullable();
        });
        Schema::table('durations', function (Blueprint $table) {
            $table->integer('sumpdf_id')->nullable();
        });
        Schema::table('schedules', function (Blueprint $table) {
            $table->integer('sumpdf_id')->nullable();
        });
        Schema::table('table_fs', function (Blueprint $table) {
            $table->integer('sumpdf_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sumpdf', function (Blueprint $table) {
            //
        });
    }
}
