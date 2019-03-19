<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use Auth;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index()
    {
        // return view('home'); 

        $myproperty = Property::where('user_id', auth()->id())->get()->toArray();

        return view('property.viewproperty',compact('myproperty'));

           }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('property.create');


    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //     dd("super super");
    // }

        $property = new property();
        
        $property->user_id = Auth::user()->id;
        $property->address = request('address');
        $property->price = request('price');
        $property->descriptions = request('descriptions');
        $property->property_type = request('property_type');
        
        // if($property->hasfile('image')){
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time(). '.' . $extension;
        //     $file->move('uploads/property/',$filename);
        //     $employee->image = $filename;
        // }else{
        //     return $request;
        //     $property->image = '';
        //     }
        // }

        $property->save();
        

        return redirect('/property');
}




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
