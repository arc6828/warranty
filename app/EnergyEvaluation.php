<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnergyEvaluation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'energy_evaluations';

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
    protected $fillable = ['policy_score', 'organization_score', 'motivation_score', 'information_score', 'public_relation_score', 'investment_score', 'remark ', 'user_id', 'energy_report_id'];

    
}
