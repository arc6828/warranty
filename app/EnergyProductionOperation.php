<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnergyProductionOperation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'energy_production_operations';

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
    protected $fillable = ['energy_production_id', 'raw_material', 'month', 'working_hours', 'production_unit', 'yield', 'capacity', 'user_id', 'energy_report_id'];

    public function  energy_report()
    {
        return $this->belongsTo('App\EnergyReport','energy_report_id');
    }

    public function  energy_production()
    {
        return $this->belongsTo('App\EnergyProduction','energy_production_id');
    }
}
