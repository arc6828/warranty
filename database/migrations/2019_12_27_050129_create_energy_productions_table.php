<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnergyProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energy_productions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('code')->nullable();
            $table->string('product_name')->nullable();
            $table->float('capacity')->nullable();
            $table->float('yield')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('enery_report_id')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('energy_productions');
    }
}
