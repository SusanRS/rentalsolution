	@extends('layouts.app')

@section('content')
		



			@foreach($property as  $p)
              <div class="card px-3 py-3 mr-3 mt-3" style="width:180px; float:left">
              	<div class="img" style="height:100px;width:100px;"></div>

                id: {{$p->id}}<br>
              	price: {{$p->price}}<br>
              city: {{$p->city}}<br>
              district: {{$p->district}}<br>
              city: {{$p->city}}<br>
              <a href="{{ url('property/'.$p->id) }}" class="btn btn-primary">Details</a>
              </div>
   @endforeach




              @endsection