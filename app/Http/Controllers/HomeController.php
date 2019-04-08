<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Image;


class HomeController extends Controller
{
    public function index()
    {
        $properties = Property::where([
            ['isapproved','=', 1],
            ['isavailable', '=', 1],
            ['type','=','Rental'],]
        )->orderBy('updated_at', 'desc')->take(10)->get();
        

        
        return view('home',compact('properties'));
    }


  
}
