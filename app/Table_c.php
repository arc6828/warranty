<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table_c extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'table_cs';

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
    protected $fillable = ['peetharn', 'cost', 'yield', 'amount', 'efficiency', 'overall', 'equipment', 'mean', 'actual'];

}
