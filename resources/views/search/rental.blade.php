	@extends('layouts.app')

@section('content')
		
  <div class="container">
    <div class="row">
    <div class="col-md-10">
      @foreach($property as  $p)
              <div class="card px-2  mt-3" style="width:180px; float:left">
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
  </div>
{{$property->links()}}

</div>



			




              @endsection