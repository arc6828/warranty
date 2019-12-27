<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEneryCommitteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enery_committees', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('president')->nullable();
            $table->string('common_responsible_person')->nullable();
            $table->string('common_responsible_person_code')->nullable();
            $table->string('senior_responsible_person')->nullable();
            $table->string('senior_responsible_person_code')->nullable();
            $table->string('factory_owner')->nullable();
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
        Schema::drop('enery_committees');
    }
}
