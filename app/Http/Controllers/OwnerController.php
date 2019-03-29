<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;
use App\User;
use Auth;
class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // dd('asdasd');
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
       // dd('store');
        request()->validate([
            'document' => 'required'
        ]);


            // $user = auth()->user();
            // $user->upgrade_req = 1;
            // $user->save();
           

            $owner = new Owner();
            $owner->user_id = Auth::user()->id;
            // $owner->legalname= request('some');
          
            
            if($request->hasfile('document')){
            $file = $request->file('document');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;
            $file->move('uploads/legals/',$filename);
            $owner->document = $filename;

             $user = auth()->user();
            $user->upgrade_req = 1;
            $user->save();

            }else{
           dd('asdasd');
            }
       





            $owner->save();
        
            return redirect ('/');

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
