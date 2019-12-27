<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnergyEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energy_evaluations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('policy_score')->nullable();
            $table->integer('organization_score')->nullable();
            $table->integer('motivation_score')->nullable();
            $table->integer('information_score')->nullable();
            $table->integer('public_relation_score')->nullable();
            $table->integer('investment_score')->nullable();
            $table->text('remark')->nullable();
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
        Schema::drop('energy_evaluations');
    }
}
