@extends('layouts.app')

@section('content')
  <div class="container mt-3">
    <div class="row"><!-- this row will house the carousel and the details and reports-->
      
      <div class="col-md-5 com-sm-12">
        <div style="height:300px;background-color:" class="container-fluid">
          <div class="container">
            @foreach($image as $img)
            <img src="/uploads/properties/images/{{$img->image}}" style ="height:100px;width:100px" alt="">
            @endforeach
          </div>
        </div>
      </div>

      <div id="some" class="col-md-7 col-sm-12">
        <div class="row">
          <div class="col-md-12" style="position:inherit">
            <h4>Property available for booking</h4>
            <h5>{{$property->street}}, {{$property->city}}-{{$property->ward_no}}, {{$property->district}}</h5>
            <h3>Price: <br>Rs {{$property->price}} /-</h3>
            {{$property->rental['id']}}
            {{$property->rental['num_rooms']}}
            {{$property->rental['parking']}}
            {{$property->rental['bhk']}}
            {{$property->homestay['id']}}
            {{$property->homestay['service']}}
            {{$property->homestay['category']}}
            {{$property->homestay['capacity']}}<br>
            {{$property->id}}<br>
             <button type="" class="btn btn-disabled" style="background:grey">view:10</button>
             <a href="{{$property->id}}/book" class="btn btn-danger">book</a>    
          </div>
        </div>
        <hr>
        
        <div class="row">
          <div class="col-md-6">
              <h5><i><u>owner's info</u></i></h5>
              <p> <strong>Owner's name : {{$property->user['name']}}</strong><br>
                  <strong>Contact : {{$property->user['contact']}} </strong><br>
                  <strong>Email : {{$property->user['email']}} </strong>
              </p>   
          </div>
          
          <div class="col-md-6">
              @if(!Auth::guest())
                <form action="/report/{{$property->id}}" method="POST">
                  @csrf
                  <textarea name="report_message" class="form-control"></textarea>
                  <button class="btn btn-danger my-2" type="submit">Report</button>
                </form>
              @endif
          </div>

        </div>

      </div>
    
    </div>

    <div class="row mt-2" style="border:2px solid black"><!-- this row will house the user reviews and similar properties-->
      <div class="col-md-8" style="border:2px solid cyan">
        


      this is reviews</div>
      <div class="col-md-4" style="">
        <h4 class="mt-3" >Featured Properties</h4>
          @foreach($rental as $rental)
          <div class="row my-2" style="background:white; height:150px">
            <img class="img-thumbnail mt-1 ml-1" alt="Cinque Terre" style = "width:100px;height:80px"src="/uploads/properties/images/{{$rental->image()->first()->image}}">
            
            <h4 style="width:100%">Price:<br>
              Rs. {{$rental->price}} /-</h4>
            {{$rental->district}} ko {{$rental->city}} <br>
            {{$rental->street}} ko {{$rental->ward_no}}
        </div>@endforeach
  

      </div>
      
    </div>




  </div>



@endsection

