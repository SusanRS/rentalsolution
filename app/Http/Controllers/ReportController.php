<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\Property;
use Auth;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
         $report = Report::where([
            ['property_id', $id],
            ['user_id', Auth::user()->id]
        ])->get();

        $count = count($report);

        if($count < 1)
         {
            $property = Property::findOrFail($id);
        
            $report = new Report();
                    
        $report->user_id = Auth::user()->id;
        $report->property_id = $property->id ; 
        $report->message = request('report_message');
        

        $report->save();
         session()->flash('message','report submitted');
       
       
        }else{
           session()->flash('abort','already submitted report');
       
        }
        return back();
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
