<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Rental extends Model
{
    

    // public function properties()
    // {
    //     return $this->morphOne('App\Property', 'buyable');
    // }

    public function property()
    {
    	return $this ->belongsTo('App\Property' , 'property_id');
    }

}
