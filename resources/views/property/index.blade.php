@extends('layouts.app')

@section('content')
    <div class="container"> 
        <div class="view" style="overflow-x:auto;">
            <table class="table" style="text-align: center;">
                <thead>
                    <tr>
                        <th>Property_id</th>
                        <th colspan="4">Address</th>
                        <th colspan="2">Type</th>
                        <th>price</th>
                        <th>Actions</th>
                        <th>Ad approved</th>
                        <th>Booked</th>
                    </tr>
                </thead>
                
                <tbody>
                     @foreach($property as $p)
                        <tr>
                            <td>{{$p['id']}}</td>
                            <td>District: {{$p['district']}}</td>
                            <td>{{$p['city']}}</td>
                            <td>{{$p['ward_no']}}</td>
                            <td>{{$p['street_address']}}</td>
                            <td>{{$p['property_type']}}</td>
                            <td>{{$p['type']}}</td>
                            <td>{{$p['price']}}</td>
                            <td>
                                
                                   <a href="/property/{{ $p->id}}/edit" class="btn btn-primary">Edit</a> 
                               
                               
                            </td>
                            <td>
                                <?php if($p['isapproved']== 1)
                                    {
                                        echo "yes";
                                    }else{
                                        echo "No";
                                    } ?>
                            </td>
                            
                            <td>
                                <?php if($p['isbooked']== 1)
                                    {
                                        echo "user form user table";
                                    }else{
                                        echo "No";
                                    } ?>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
           
        </div>
    </div>
@endsection