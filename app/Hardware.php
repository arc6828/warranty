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
    protected $table = 'hardware';

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
    protected $fillable = ['title', 'content', 'place_type', 'category', 'date_begin', 'date_end', 'quantity', 'watts', 'joules', 'hours_per_day', 'day_per_week', 'user_id', 'photo'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
