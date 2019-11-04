<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableFsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_fs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('country')->nullable();
            $table->integer('number')->nullable();
            $table->integer('cost')->nullable();
            $table->string('connect')->nullable();
            $table->string('wage_company')->nullable();
            $table->string('machinery_Imported')->nullable();
            $table->string('other')->nullable();
            $table->integer('total')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('table_fs');
    }
}
