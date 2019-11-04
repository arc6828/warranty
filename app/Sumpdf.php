<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sumpdf extends Model

{
    /**
     * The database sumpdf used by the model.
     *
     * @var string
     */
    protected $table = 'sumpdf';

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
    protected $fillable = ['name'];

    
}
