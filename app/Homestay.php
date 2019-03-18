<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{
    protected $fillable = [
        'arrival_date','depart_date','guest_num'
    ];
}
