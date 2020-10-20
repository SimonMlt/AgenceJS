<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = "reservation";

    protected $fillable = ['date', 'user_id', 'habitation_id'];

    /**
     * Get habitation id
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function habitation()
    {
        return $this->hasOne('App\Habitation', 'id', 'habitation_id');
    }

    /**
     * Get user id
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}

