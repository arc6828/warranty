<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnergyMachineEvaluation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'energy_machine_evaluations';

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
    protected $fillable = ['energy_machine_id', 'power_consumption_size', 'operating_hours', 'improvement_potential', 'total_score', 'priority', 'department', 'user_id', 'energy_report_id'];

    public function  energy_report()
    {
        return $this->belongsTo('App\EnergyReport','energy_report_id');
    }
}
