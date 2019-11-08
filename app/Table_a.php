<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table_a extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'table_as';

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
    protected $fillable = ['request_number', 'registration_date', 'fullname', 'company', 'production', 'promotion_certificate_number', 'promotion_date','sumpdf_id'];

    
}
