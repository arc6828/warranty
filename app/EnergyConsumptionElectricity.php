<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnergyConsumptionElectricity extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'energy_consumption_electricities';

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
    protected $fillable = ['month', 'maximum_power_p', 'maximum_power_pp', 'maximum_power_op', 'maximum_power_expenses', 'electrical_energy_volume', 'electrical_energy_expenses', 'total_electric_bill', 'user_id', 'enery_report_id'];

    
}
