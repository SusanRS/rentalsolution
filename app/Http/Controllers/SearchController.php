<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Property;
use Illuminate\Support\Facades\DB; 

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function seaaaaarch(Request $request, Property $property)
    {
        //
      

        if ($request->has('price')) {
             $property->where('price', request('price'));
        }
        
        if ($request->has('district')) {
             $property->where('district', request('district'));
        }

        if ($request->has('city')) {
         $property->where('city', request('city'));
        }
         $property->get();

         return view ('property.search',compact('property'));
    }



    public function index()
    {
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     public function search(Request $request) {
        $type = $request->get('propertytype');
        $district = $request->get('district');
        $price = $request->get('price');
        // $p = $request->get('p');

        $property = DB::table('properties')
        ->where('property_type', '=' , $type)
        ->where('district','like',"%". $district ."%")
        ->where('price', '<=' , $price)->get();
       //     $property=DB::table('properties')
       
   //     ->where([
   //      ['property_type', '=', $search],
       
       
   //     ['price', '<=' , $search]]

   // )->get();

       // $property = DB::table('properties')
       //  ->where('property_type', '=', $searchpt)
       //  ->where(function($query)
       //  {
       //      $query->where('district', 'like', "%" . $searchd . "%")
       //            ->orWhere('price', '=', $searchp);
       //  })
       //  ->get();

            return view('property.search', compact('property'));
    }
}









































// if(request('district')!= ""&&request('city')!= ""&&request('price')!="")
//             {
//             $search = Property::where([
//                 ['district','=',request('district')],
//                 ['city', '=' ,request('city')],
//                 ['price','<=',request('price')]
//                     ])->get();
//             return view ('property.search', compact('search'));}
//        elseif(request('district')!= ""&&request('city')!= "")
//             {
//             $search = Property::where([
//                 ['district','=',request('district')],
//                 ['city', '=' ,request('city')]
//                  ])->get();
//                 return view ('property.search', compact('search'));
//             }
       
//         else{
//         $search = Property::where('district',request('district'))->orWhere('city',request('city'))->orWhere('price',request('price'))->get();
//         return view ('property.search', compact('search'));}