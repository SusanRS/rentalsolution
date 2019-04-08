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
             
                     @foreach($property as $p)
                        <tr>
                            <td>{{$p['id']}}</td>
                            <td>District: {{$p['district']}}</td>
                            <td>{{$p['city']}}</td>
                            <td>{{$p['ward_no']}}</td>
                            <td>{{$p['street']}}</td>
                            <td>{{$p['property_type']}}</td>
                            
                            <td>{{$p['price']}}</td>
                        
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
           
        </div>
    </div>
@endsection