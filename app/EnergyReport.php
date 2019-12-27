<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnergyReport extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'energy_reports';

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
    protected $fillable = ['legal_name', 'factory_name ', 'tsic_id', 'year', 'user_id'];

    
}
