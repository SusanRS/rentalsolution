@extends('layouts.app')

@section('content')

<div class="col-md-12 mt-3 ml-auto">
                <form method="post" action="/search-rental">
                  @csrf
                  <div class="row">
                          <select name="district">
                       @include('welcome')   
                      </select>
                      
                <select name="price">
                  <option value="99999999">any</option>
                  <option value="5000">5000</option>
                  <option value="10000">10000</option>
                  <option value="15000">15000</option>
                  
                </select>

               
                                  {{--  --}}
                   <button type="submit" class="btn btn-danger">search</button>
                  </div>


                </form>
              




            
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
        </div>
@endsection