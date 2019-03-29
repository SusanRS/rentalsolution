@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="col-md-6">
			
			@foreach($property as $p)
			city {{$p}}
			@endforeach

			<form action="/book/{{$p->id}}" method="post">
				@csrf
				<input type="text" name="name" value="cnf" placeholder="">
				<p>type confirm to confirm booking</p>
				<button type="submit">comfirm booking</button>
			</form>

		</div>
	</div>

		
		<a href="" class="btn btn-danger">Payment</a>

@endsection