<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnergyOrganizationChart extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'energy_organization_charts';

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
    protected $fillable = ['organization_chart', 'organization_chart_promotion', 'notice_number', 'notice', 'poster_number', 'poster_number', 'publication_number', 'publication', 'voice_number', 'voice', 'email_number', 'email', 'meeting_number', 'meeting', 'others_number', 'others', 'user_id', 'enery_report_id'];

    
}
