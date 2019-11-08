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

    public function table_a(){
        return $this->hasOne('App\Table_a','sumpdf_id');
    }    

    public function table_b(){
        return $this->hasOne('App\Table_b','sumpdf_id');
    }    

    public function table_c(){
        return $this->hasOne('App\Table_c','sumpdf_id');
    }
    

    public function duration(){
        return $this->hasOne('App\Duration','sumpdf_id');
    }
    

    public function schedule(){
        return $this->hasOne('App\Schedule','sumpdf_id');
    }
    

    public function table_fs(){
        return $this->hasMany('App\Table_f','sumpdf_id');
    }

}
