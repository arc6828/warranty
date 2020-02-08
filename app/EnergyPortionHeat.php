<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnergyPortionHeat extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'energy_portion_heats';

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
    protected $fillable = ['system', 'equipment', 'fuel_consumption_type', 'fuel_consumption_megajoule', 'method_assessment', 'method_check', 'user_id', 'energy_report_id'];

    public function  energy_report()
    {
        return $this->belongsTo('App\EnergyReport','energy_report_id');
    }
}
