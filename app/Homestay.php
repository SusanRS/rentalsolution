<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{
   

    // public function property()
    // {
    //     return $this->morphOne('App\Property', 'buyable');
    // }

    public function property()
    {
    	return $this ->belongsTo('App\Property' , 'property_id');
    }
}
