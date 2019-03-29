<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App;
use App\User;
use App\Homestay;
use App\Booking;
use Auth;
use Session;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   

    
    public function __construct()
    {
        $this->middleware('auth', ['except' =>['index','show']]);

    }
    
    public function index()
    {
        $property = Property::where('user_id', auth()->id())->get();

        return view('property.index',compact('property'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $premiums = Property::where([
            ['isapproved','=', 1],
            ['isavailable', '=', 1],
            ['isbooked','=', 0]]
        )->get();

        return view('property.create' ,compact('premiums'));


    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        if(request('property_type') == 'Rental')
            {
             request()->validate([ 'type' => 'required']);
            }
        else{
             request()->validate(['home' => 'required']);
            }


        request()->validate([
    
            'district' => 'required',
            'city' => 'required',
            'ward_no' => 'required | min:1',
            'street_address' => 'required',
            'price' => 'required ',
            'descriptions' => 'required | min:10'
            ]);


        $property = new Property();
               
        $property->user_id = Auth::user()->id;
        $property->district = request('district');
        $property->city = request('city');
        $property->ward_no = request('ward_no');
        $property->street_address = request('street_address');
         $property->price = request('price');
        $property->descriptions = request('descriptions');
        $property->property_type = request('property_type');
        //rental
        $property->type = request('type');
        $property->floor = request('floor');
        $property->bhk = request('bhk');
        $property->num_rooms = request('num_rooms');
        $property->parking = request('parking');
        //home
        $property->home = request('home');
       
     
        // // if($property->hasfile('image')){
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = Auth()->user->name.time. '.' . $extension;
        //     $file->move('uploads/property/',$filename);
        //     $employee->image = $filename;
        // }else{
        //     return $request;
        //     $property->image = '';
        //     }
        // }

        $property->save();

        session()->flash('message','property upload requested successfully');
        
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
       
         $viewprop = Property::findOrFail($id);
         
         return view('property.viewproperty',compact('viewprop'));
         }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    $property = Property::findOrFail($id);

     return view('property.edit',compact('property'));
    // return $id;

}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       $property = Property::find($id);

        $property->user_id = Auth::user()->id;
        $property->district = request('district');
        $property->city = request('city');
        $property->ward_no = request('ward_no');
        $property->street_address = request('street_address');
        $property->price = request('price');
        $property->descriptions = request('descriptions');
        $property->property_type = request('property_type');
        


        $property->save();
        
     return redirect ('/property');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Property::findOrFail($id)->delete();
        session()->flash('message','property deleted successfully');
        
       
        return redirect('/property');
    //    
    }
}
