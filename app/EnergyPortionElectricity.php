<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnergyPortionElectricity extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'energy_portion_electricities';

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
    protected $fillable = ['system', 'electric_power_consumption', 'method_assessment', 'method_check', 'user_id', 'enery_report_id'];

    
}
