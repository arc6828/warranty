<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnergyHeatGenerator extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'energy_heat_generators';

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
    protected $fillable = ['month', 'capacity', 'primary_fuel_consumption_type', 'primary_fuel_consumption_volume', 'primary_fuel_consumption_unit', 'operating_hours', 'electricity_use', 'electricity_sale', 'steam_use', 'steam_sale', 'user_id', 'energy_report_id'];

    public function  energy_report()
    {
        return $this->belongsTo('App\EnergyReport','energy_report_id');
    }
}
