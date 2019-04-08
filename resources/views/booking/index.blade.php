@extends('layouts.app')

@section('content')
    <div class="container"> 
        <div class="view" style="overflow-x:auto;">
            <table class="table" style="text-align: center;">
                <thead>
                    <tr>
                        <th>Property_id</th>
                        <th colspan="4">Address</th>
                        <th colspan="">Type</th>
                        <th>price</th>
                        
                      
                    </tr>
                </thead>
                
                <tbody>
             
                    @foreach($booking as $booked)
                        <tr>
                            <td>{{$booked->property_id}}</td>
                            <td>{{$booked->property->district}}</td>
                            <td>{{$booked->property->city}}</td>
                            <td>{{$booked->property->ward_no}}</td>
                            <td>{{$booked->property->street}}</td>
                            <td>{{$booked->property->rental['category']}}</td>
                            
                            <td>{{$booked->property->price}}</td>
                        
                            
                        </tr>
                @endforeach
                </tbody>
            </table>
           
        </div>
    </div>
@endsection