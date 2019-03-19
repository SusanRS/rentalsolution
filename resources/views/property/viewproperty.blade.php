@extends('layouts.app')

@section('content')
    <div class="container"> 
        <div class="profile-btn">
            <a class="btn btn-primary" href="{{ url('/profile') }}">Profile</a>
            <a class="btn btn-primary" href="{{ route('property.create') }}">Post an AD</a>
        </div>   
        
        <hr>
        
        <div class="view">
            <table class="table">
                <thead>
                    <tr>
                        <th>Property_id</th>
                        <th>location</th>
                        <th>price</th>
                        <th>Actions</th>
                        <th>Ad approved</th>
                    </tr>
                </thead>
                
                <tbody>
                     @foreach($myproperty as $p)
                        <tr>
                            <td>{{$p['id']}}</td>
                            <td>{{$p['address']}}</td>
                            <td>{{$p['price']}}</td>
                            <td>
                                <a href="#" class="btn btn-primary">Edit</a>
                                <a href="#" class="btn btn-danger">Delete
                            </td>
                            <td>
                                <?php if($p['isapproved']== 1)
                                    {
                                        echo "yes";
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