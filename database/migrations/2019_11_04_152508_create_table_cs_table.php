<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableCsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_cs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('peetharn')->nullable();
            $table->integer('cost')->nullable();
            $table->integer('yield')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('efficiency')->nullable();
            $table->integer('overall')->nullable();
            $table->integer('equipment')->nullable();
            $table->integer('mean')->nullable();
            $table->integer('actual')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('table_cs');
    }
}
