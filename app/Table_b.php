<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table_b extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'table_bs';

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
    protected $fillable = ['base_year', 'products_baseyear', 'capacity_baseyear', 'working_Hourday_byear', 'working_dayyear_byear', 'evaluation_year', 'products_eyear', 'capacity_eyear', 'working_Hourday_eyear', 'working_dayyear_eyear','sumpdf_id'];

    
}
