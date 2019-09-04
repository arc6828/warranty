<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHardwaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hardwares', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->nullable();
            $table->text('detail')->nullable();
            $table->string('tags')->nullable();
            $table->date('date_purchase')->nullable();
            $table->date('date_warranty_expire')->nullable();
            $table->float('warranty_duration')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('price')->nullable();
            $table->string('vendor')->nullable();
            $table->text('about_vendor')->nullable();
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
        Schema::drop('hardwares');
    }
}
