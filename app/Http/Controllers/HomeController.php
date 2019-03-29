<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
          $premiums = Property::where([
            ['isapproved','=', 1],
            ['isavailable', '=', 1],
            ['isbooked','=', 0]]
        )->get();

        
        return view('home',compact('premiums'));
    }

    //     return view('home');
    // }

  
}
