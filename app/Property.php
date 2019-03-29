<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use User;
use Feedback;
use Search;
use Booking;
class Property extends Model
{
    protected $fillable =
    [
    	'district','city','ward_no','street_address',
    	'descriptions','price','legal_docs','property_type'
    ];

	 


    public function user()
    	{
        	 // $this->belongsTo(User::class);
        return $this->belongsTo('App\User', 'user_id');
	    }
    
	 public function feedback()
	    	{
	        	return $this->hasOne(feedback::class);
		    }
	     public function booking()
            {
                return $this->hasOne(booking::class);
            }
        
       


}






