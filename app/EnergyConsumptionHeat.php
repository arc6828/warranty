<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnergyConsumptionHeat extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'energy_consumption_heats';

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
    protected $fillable = ['month', 'fuel_oil_liter', 'fuel_oil_baht', 'diesel_oil_liter', 'diesel_oil_baht', 'lpg_kg', 'lpg_baht', 'natural_gas_millionbtu', 'natural_gas_baht', 'coal_ton', 'coal_baht', 'steam_purchased_ton', 'steam_purchased_baht', 'other_unit', 'other_baht', 'renewable_energy_unit', 'renewable_energy_baht', 'user_id', 'energy_report_id'];

    
}
