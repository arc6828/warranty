<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableBsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_bs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('base_year')->nullable();
            $table->text('products_baseyear')->nullable();
            $table->text('capacity_baseyear')->nullable();
            $table->integer('working_Hourday_byear')->nullable();
            $table->integer('working_dayyear_byear')->nullable();
            $table->integer('evaluation_year')->nullable();
            $table->text('products_eyear')->nullable();
            $table->text('capacity_eyear')->nullable();
            $table->integer('working_Hourday_eyear')->nullable();
            $table->integer('working_dayyear_eyear')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('table_bs');
    }
}
