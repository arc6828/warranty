<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table_f extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'table_fs';

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
    protected $fillable = ['country', 'number', 'cost', 'connect', 'wage_company', 'machinery_Imported', 'other', 'total'];

    
}
