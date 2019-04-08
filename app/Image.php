<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Property;

class Image extends Model
{
    protected $guarded = [];
    public function property()
    {
    	return $this->belongsTo('App\Property','property_id');

    }
}
