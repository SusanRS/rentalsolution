<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Homestay;
use App\Rental;
use App\Image;
use Auth;

class PropertyController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth' , ['except' => ['index','show']]);
    }

    public function index()//this will show the uploaded properties for a owner
    {
        $property = Property::where('user_id', auth()->id())->get();
        // dd($property);
        return view('property.index',compact('property'));

    }


    public function create()
    {
        return view('property.create');
    }


    public function store(Request $request)
    {
       request()->validate([
    
            'district' => 'required',
            'city' => 'required',
            'ward_no' => 'required | min:1',
            'street' => 'required',
            'price' => 'required ',
            'property_type' =>'required',
            ]);

//property instance 11 
        $property = new Property();

        $property->user_id = Auth::user()->id;
        $property->district = request('district');
        $property->city = request('city');
        $property->ward_no = request('ward_no');
        $property->street= request('street');
        $property->price = request('price');
        $property->description = request('description');
        $property->type = request('property_type');
                
        
        // if($request->hasfile('legal_docs'))
        //     {
                $file1 = $request->file('legal_docs');
                $extension1 = $file1->getClientOriginalExtension();
                $filename1 = rand() . '.' . $extension1;
                $file1->move('uploads/properties/legal',$filename1);
                $property->legal_docs = $filename1; 
            // }
        $property->save();
//id =
        if(request('property_type') == 'Rental')
            {
                $rental = new Rental();
                $rental->category = request('rental_type');
                $rental->bhk = request('bhk');
                $rental->num_rooms = request('num_rooms');
                $rental->parking = request('parking');
                $property->rental()->save($rental);
            }
            else{

                $homestay = new Homestay();
                // $homestay->type = request('property_type');
                $homestay->service = request('service');
                $homestay->category = request('category');
                $homestay->capacity = request('capacity');

                $property->homestay()->save($homestay);
                }

//this store for images for property in Images_tbl
        $array = $request->file('property_images');
        for($i=0; $i< count($array); $i++)
            {
                $extension = $array[$i]->getClientOriginalExtension();
                $filename = rand() . '.' . $extension;
                $array[$i]->move('uploads/properties/images',$filename);
                $images = new Image();
                $images->image = $filename;
                $property->image()->save($images);
            }
        
        session()->flash('message','property upload requested successfully');
        return redirect('/property');
 }

   

    public function show($id)//this opens a view page for clicked property
                             //and its descriptions 
    {
       
        $property = Property::findOrFail($id);
        $image = Image::where('property_id', $id)->get();
        
        return view('property.viewproperty',compact('property','image'));


    }

   

    public function edit($id)
    {
       
    }

 

    public function update(Request $request, $id)
    {
        
        }

   

    public function destroy($id)
    {
        
    }
}
