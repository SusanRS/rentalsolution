<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $district = $request->get('district');
        $city = $request->get('city');
        $price = $request->get('price');
    
        // $property = DB::table('properties')
        // ->where('type', '=' , 'Rental',
        // ->where('district','like',"%". $district ."%")
        // ->where('city','like',"%". $city ."%")
        // ->where('price', '<=' , $price)->where('isavailable', '=' , 1)->get();
         $property = DB::table('properties')
         		->where([
        			['type', '=' , 'Rental'],
        			['district','like',"%". $district ."%"],
        			['city','like',"%". $city ."%"],
        			['price', '<=' , $price],
        			['isavailable', '=' , 1]
        				])->get();
    	return view('search.index', compact('property'));
    }
				

	public function rentals()
	{
		$property = DB::table('properties')
		->where('type', '=' , 'Rental')->
		 where('isavailable', '=' , 1)->paginate(4);
         // ->get();
		   	
		return view('search.rental', compact('property'));
	}

	public function homestays()
	{
		$property = DB::table('properties')
		->where('type', '=' , 'Homestay')->
		 where('isavailable', '=' , 1)->get();
		   	
		return view('search.Homestay', compact('property'));
	}
	


}
