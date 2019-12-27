<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnergyOrganizationChartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energy_organization_charts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('organization_chart')->nullable();
            $table->string('organization_chart_promotion')->nullable();
            $table->string('notice_number')->nullable();
            $table->string('notice')->nullable();
            $table->string('poster_number')->nullable();
            $table->string('publication_number')->nullable();
            $table->string('publication')->nullable();
            $table->string('voice_number')->nullable();
            $table->string('voice')->nullable();
            $table->string('email_number')->nullable();
            $table->string('email')->nullable();
            $table->string('meeting_number')->nullable();
            $table->string('meeting')->nullable();
            $table->string('others_number')->nullable();
            $table->string('others')->nullable();
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
        Schema::drop('energy_organization_charts');
    }
}
