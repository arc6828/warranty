<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EneryFactoryInformation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'enery_factory_informations';

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
    protected $fillable = ['factory_size', 'factory_address', 'factory_tel', 'factory_fax', 'factory_email', 'office_address', 'office_tel', 'office_fax', 'office_email', 'factory_type', 'factory_employee', 'factory_operation_time', 'user_id', 'enery_report_id'];

    
}
