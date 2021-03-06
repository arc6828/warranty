<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnergyFactoryInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energy_factory_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('factory_size')->nullable();
            $table->text('factory_address')->nullable();
            $table->string('factory_tel')->nullable();
            $table->string('factory_fax')->nullable();
            $table->string('factory_email')->nullable();
            $table->text('office_address')->nullable();
            $table->string('office_tel')->nullable();
            $table->string('office_fax')->nullable();
            $table->string('office_email')->nullable();
            $table->string('factory_type')->nullable();
            $table->text('factory_employee')->nullable();
            $table->text('factory_operation_time')->nullable();
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
        Schema::drop('energy_factory_informations');
    }
}
