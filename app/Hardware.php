<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hardware extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'hardwares';

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
    protected $fillable = ['name', 'detail', 'tags', 'date_purchase', 'date_warranty_expire', 'warranty_duration', 'quantity', 'price', 'vendor', 'about_vendor', 'user_id', 'photo'];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function energy_usages()
    {
        return $this->hasMany('App\EnergyUsage','hardware_id');
    }

    public static function getAll(){
		return self::get();
	}

}