<?php

namespace App;

use Rental;
use Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;


Relation::morphMap([
	'Rental' => 'App\Rental',
	'Homestay' => 'App\Homestay',

]);

    

class Property extends Model
{
    
protected $fillable = [
        'district', 'city', 'ward_no ', 'street','price','description'
    ];



    public function image()
    {
    	return $this->hasMany('App\Image');
    }

    // public function buyable()
    //     {
    //         return $this->morphTo();
    //     }

     public function booking()
        {
            return $this->hasOne('App\Booking');
        }
    
    public function rental()
            {
                return $this->hasOne('App\Rental');
            }

    public function homestay()
            {
                return $this->hasOne('App\Homestay');
            }

    public function user()
    {
    	return $this->belongsTo('App\User' , 'user_id');

    }
    public function report()
            {
                return $this->hasmany(Report::class);
            }
        
}
