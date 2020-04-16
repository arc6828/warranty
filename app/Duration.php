<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Duration extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'durations';

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
    protected $fillable = ['duration', 'order_m', 'install_m', 'generate','sumpdf_id'];

    public function  energy_report()
    {
        return $this->belongsTo('App\EnergyReport','sumpdf_id');
    }
    
}
