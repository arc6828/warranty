<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnergyProductionDiagram extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'energy_production_diagrams';

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
    protected $fillable = ['photo_diagram', 'description', 'energy_production_id', 'user_id', 'energy_report_id'];

    public function  energy_report()
    {
        return $this->belongsTo('App\EnergyReport','energy_report_id');
    }

    public function  energy_production()
    {
        return $this->belongsTo('App\EnergyProduction','energy_production_id');
    }

    
}
