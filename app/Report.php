<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User' , 'user_id');

    }
    public function property()
    {
    	return $this->belongsTo('App\Property' , 'porperty_id');

    }
}
