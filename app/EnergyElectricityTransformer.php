<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnergyElectricityTransformer extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'energy_electricity_transformers';

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
    protected $fillable = ['user_serial', 'transformer_serial', 'user_type', 'usage_rate', 'transformer_size', 'transformer_quantity', 'user_id', 'energy_report_id'];

    
}
