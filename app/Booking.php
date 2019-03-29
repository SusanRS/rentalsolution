<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Proprty;

class Booking extends Model
{
    //



  public function Property()
            {
                return $this->belongsTo(Property::class);
            }
}
