@extends('layouts.app')

@section('content')
	confirm booking this {{$property->homestay['type']}} property for Rs. {{$property->price}}?


	<form method="POST" action="/book/{{$property->id}}">
		@csrf
		<input type="text" name="confirm" value="" placeholder="">
		<button type="submit">submit</button>
	</form>



@endsection