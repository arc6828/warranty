<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameToEnergyReportId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('energy_committees', function (Blueprint $table) {
            $table->renameColumn('enery_report_id','energy_report_id');
        });
        Schema::table('energy_factory_informations', function (Blueprint $table) {
            $table->renameColumn('enery_report_id','energy_report_id');
        });
        
        Schema::table('energy_organization_charts', function (Blueprint $table) {
            $table->renameColumn('enery_report_id','energy_report_id');
        });
        
        Schema::table('energy_evaluations', function (Blueprint $table) {
            $table->renameColumn('enery_report_id','energy_report_id');
        });
        
        Schema::table('energy_conservation_policies', function (Blueprint $table) {
            $table->renameColumn('enery_report_id','energy_report_id');
        });

        Schema::table('energy_productions', function (Blueprint $table) {
            $table->renameColumn('enery_report_id','energy_report_id');
        });
        Schema::table('energy_production_operations', function (Blueprint $table) {
            $table->renameColumn('enery_report_id','energy_report_id');
        });
        Schema::table('energy_electricity_transformers', function (Blueprint $table) {
            $table->renameColumn('enery_report_id','energy_report_id');
        });

        
        Schema::table('energy_consumption_electricities', function (Blueprint $table) {
            $table->renameColumn('enery_report_id','energy_report_id');
        });
        Schema::table('energy_consumption_heats', function (Blueprint $table) {
            $table->renameColumn('enery_report_id','energy_report_id');
        });
        Schema::table('energy_heat_generators', function (Blueprint $table) {
            $table->renameColumn('enery_report_id','energy_report_id');
        });

        
        Schema::table('energy_portion_electricities', function (Blueprint $table) {
            $table->renameColumn('enery_report_id','energy_report_id');
        });
        Schema::table('energy_portion_heats', function (Blueprint $table) {
            $table->renameColumn('enery_report_id','energy_report_id');
        });

        
        Schema::table('energy_production_diagrams', function (Blueprint $table) {
            $table->renameColumn('enery_report_id','energy_report_id');
        });        
        Schema::table('energy_production_consumptions', function (Blueprint $table) {
            $table->renameColumn('enery_report_id','energy_report_id');
        });        
        Schema::table('energy_machine_evaluations', function (Blueprint $table) {
            $table->renameColumn('enery_report_id','energy_report_id');
        });
        Schema::table('energy_machines', function (Blueprint $table) {
            $table->renameColumn('enery_report_id','energy_report_id');
        });

        

        





    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sss', function (Blueprint $table) {
            //
        });
    }
}
