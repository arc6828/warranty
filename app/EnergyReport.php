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
    public function  energy_production ()
    {
        return $this->hasMany('App\EnergyProduction','energy_report_id');
    }
    public function  energy_production_operation  ()
    {
        return $this->hasMany('App\EnergyProductionOperation','energy_report_id');
    }
    public function  energy_electricity_transformer  ()
    {
        return $this->hasMany('App\EnergyElectricityTransformer','energy_report_id');
    }
    public function  energy_consumption_electricity  ()
    {
        return $this->hasMany('App\EnergyConsumptionElectricity','energy_report_id');
    }
    public function  energy_consumption_heat  ()
    {
        return $this->hasMany('App\EnergyConsumptionHeat','energy_report_id');
    }
    public function  energy_heat_generator  ()
    {
        return $this->hasMany('App\EnergyHeatGenerator','energy_report_id');
    }
    public function  energy_portion_heat ()
    {
        return $this->hasMany('App\EnergyPortionHeat','energy_report_id');
    }
    public function  energy_portion_electricity ()
    {
        return $this->hasMany('App\EnergyPortionElectricity','energy_report_id');
    }

    //PART 3
    public function  energy_machine ()
    {
        return $this->hasMany('App\EnergyMachine','energy_report_id');
    }
    public function  energy_machine_evaluation ()
    {
        return $this->hasMany('App\EnergyMachineEvaluation','energy_report_id');
    }
    public function  energy_production_diagram ()
    {
        return $this->hasMany('App\EnerenergyProductionDiagram','energy_report_id');
    }
    public function  energy_production_consumption ()
    {
        return $this->hasMany('App\EnergyProductionConsumption','energy_report_id');
    }


    



}
