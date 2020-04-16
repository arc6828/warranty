<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnergyReport extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'energy_reports';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['legal_name', 'factory_name', 'tsic_id', 'year', 'user_id'];

    //PART 1
    public function  energy_committee ()
    {
        return $this->hasOne('App\EnergyCommittee','energy_report_id');
    }    
    public function  energy_factory_information ()
    {
        return $this->hasOne('App\EnergyFactoryInformation','energy_report_id');
    }
    public function  energy_organization_chart ()
    {
        return $this->hasOne('App\EnergyOrganizationChart','energy_report_id');
    }
    public function  energy_evaluation ()
    {
        return $this->hasOne('App\EnergyEvaluation','energy_report_id');
    }
    public function  energy_conservation_policy ()
    {
        return $this->hasOne('App\EnergyConservationPolicy','energy_report_id');
    }
    //PART 2
    public function  energy_productions ()
    {
        return $this->hasMany('App\EnergyProduction','energy_report_id');
    }
    public function  energy_production_operations  ()
    {
        return $this->hasMany('App\EnergyProductionOperation','energy_report_id');
    }
    public function  energy_electricity_transformers  ()
    {
        return $this->hasMany('App\EnergyElectricityTransformer','energy_report_id');
    }
    public function  energy_consumption_electricities  ()
    {
        return $this->hasMany('App\EnergyConsumptionElectricity','energy_report_id');
    }
    public function  energy_consumption_heats  ()
    {
        return $this->hasMany('App\EnergyConsumptionHeat','energy_report_id');
    }
    public function  energy_heat_generators  ()
    {
        return $this->hasMany('App\EnergyHeatGenerator','energy_report_id');
    }
    public function  energy_portion_heats ()
    {
        return $this->hasMany('App\EnergyPortionHeat','energy_report_id');
    }
    public function  energy_portion_electricities ()
    {
        return $this->hasMany('App\EnergyPortionElectricity','energy_report_id');
    }

    //PART 3
    public function  energy_machines ()
    {
        return $this->hasMany('App\EnergyMachine','energy_report_id');
    }
    public function  energy_machine_evaluations ()
    {
        return $this->hasMany('App\EnergyMachineEvaluation','energy_report_id');
    }
    public function  energy_production_diagrams ()
    {
        return $this->hasMany('App\EnerenergyProductionDiagram','energy_report_id');
    }
    public function  energy_production_consumptions ()
    {
        return $this->hasMany('App\EnergyProductionConsumption','energy_report_id');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }


    //BOI-REPORT
    public function table_a(){
        return $this->hasOne('App\Table_a','sumpdf_id');
    }    

    public function table_b(){
        return $this->hasOne('App\Table_b','sumpdf_id');
    }    

    public function table_c(){
        return $this->hasOne('App\Table_c','sumpdf_id');
    }    

    public function duration(){
        return $this->hasOne('App\Duration','sumpdf_id');
    }    

    public function schedule(){
        return $this->hasOne('App\Schedule','sumpdf_id');
    }    

    public function table_fs(){
        return $this->hasMany('App\Table_f','sumpdf_id');
    } 



}
