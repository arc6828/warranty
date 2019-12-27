<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnergyCommittee extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'energy_committees';

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
    protected $fillable = ['president', 'common_responsible_person', 'common_responsible_person_code', 'senior_responsible_person', 'senior_responsible_person_code', 'factory_owner', 'user_id', 'enery_report_id'];

    
}
