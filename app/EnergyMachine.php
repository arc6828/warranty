<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnergyMachine extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'energy_machines';

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
    protected $fillable = ['system', 'machine_name', 'power_type', 'spec', 'spec_unit', 'quantity', 'lifetime', 'average_active_hours', 'electric_power', 'heat_power', 'fuel_type', 'fuel_unit', 'performance_spec', 'performance_unit', 'performance_actual', 'performance_actual_unit ', 'remark', 'user_id', 'energy_report_id'];

    
}
