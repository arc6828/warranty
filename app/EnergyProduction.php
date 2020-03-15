<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnergyProduction extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'energy_productions';

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
    protected $fillable = ['code', 'product_name', 'capacity', 'yield', 'user_id', 'energy_report_id'];

    public function  energy_report()
    {
        return $this->belongsTo('App\EnergyReport','energy_report_id');
    }

    public function  energy_production_operations()
    {
        return $this->hasMany('App\EnergyProductionOperation','energy_production_id');
    }
}
