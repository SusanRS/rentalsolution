@extends('layouts.app')

@section('content')
<h4 class="container mt-3">{{$property->type}}details</h4>
  <div style="height:300px;background-color:" class="container-fluid">
    <div class="container">
    @foreach($image as $img)
    <img src="/uploads/properties/images/{{$img->image}}" style ="height:100px;width:100px" alt="">
    @endforeach</div>
  </div>

  <div class="container">
    
      <hr>
    <div id="row2" class="row mt-3">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-8">
            <h4>Property available for booking</h4>
            <h5>{{$property->street}}, {{$property->city}}-{{$property->ward_no}}, {{$property->district}}</h5>
          </div><!--col-md-8-->
          
          <div class="col-md-4">
            <h3>Price: <br>Rs {{$property->price}} /-</h3>
          </div><!--col-md-4-->
        </div><!--row-->
    
        <hr>
        <div class="row">
          testing the retrieval now
          
          {{$property->rental['id']}}
          {{$property->rental['num_rooms']}}
          {{$property->rental['parking']}}
          {{$property->rental['bhk']}}


          {{$property->homestay['id']}}
          {{$property->homestay['service']}}
          {{$property->homestay['category']}}
          {{$property->homestay['capacity']}}<br>
          {{$property->id}}
           {{-- <a href="{{ route('createbook' ,$property->id) }}" class="btn btn-danger">book</a> --}}
           <a href="{{$property->id}}/book" class="btn btn-danger">book</a>
              
          
        </div>
        <hr>
      </div>
      
      <div class="col-md-4">
        <div class="owner">
          <h5><i><u>owner's info</u></i></h5>
          <p>
            <strong>Owner's name : {{$property->user['name']}}</strong><br>
            <strong>Contact : {{$property->user['contact']}} </strong><br>
            <strong>Email : {{$property->user['email']}} </strong>
          </p>
        </div><!--owner-->
        @if(!Auth::guest())

      <form action="/report/{{$property->id}}" method="POST">
        @csrf
        <textarea name="report_message" class="form-control"></textarea>
        <button class="btn btn-danger mt-2" type="submit">Report</button>
      </form>
    @endif
      </div><!--col-md-4-->
      
      <hr>
    
    </div>
    
    
    </div>
    <hr>
    <div class="container-fluid" style="background-color:black;color:white">
    <div class="container">a footer
    </div>
    </div>
@endsection