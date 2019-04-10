@extends('layouts.app')

@section('content')
		
<div class="container-fluid">
	    
	    <div id="main-bg" class="container-fluid" style="height:350px; background-color:white;background-repeat:no-repeat;background-size:cover; background-position:center;"><!-- this will have bg-->
	    
	    <div class="row">
	        
	        <div class="search-bar" id="search_bar" ><!--search bar  div start-->
	            <form method="post" action="/search">
	                @csrf
	                  
	                <input type="text" name="district" value="" placeholder="District" required autofocus>
	                <input type="text" name="city" value="" placeholder="City" required autofocus>
	                <input type="text" name="price" value="" placeholder="Price" required autofocus>
					
					<button type="submit" class="srch-btn"> <i class="fa fa-search"></i></button>
              	</form>
            </div><!--search bar  div close-->
            

        </div><!--row closes-->
        </div><!--main-bg  div close-->
<hr>
<br>
		<div class="container">
            <div class="row">
            	<div class="col-md-12" style="text-align: center">
	                <h3>The Rental Solution Provides reliable, fast and hassle free method of renting and selling of rooms and services.</h3>
            	
            	
            
                	<a href= " {{url('/rentals')}}"class="btn btn-secondary">Rentals</a>
                <a href= " {{url('/homestays')}}"class="btn btn-secondary">Homestays</a>
                </div>
            </div><!-- row closes-->
<hr>
<br>        
<!---------------------------------------Rentl Row ------------------------------>
				
			
			<div class="grid-container">
  				
  				@foreach($properties as $property)
			<div class="grid-item">1</div>
			
			@endforeach
		</div>
		









			<div class="row">
				<div style="overflow:hidden;height:28rem;">
				<h3><strong>Premium Rentals</strong></h3>	
					<div class="col-lg-12 col-md-12 col-sm-12 " id="rentjs" style="position:inherit; height:30rem;padding-bottom:-200px; overflow-x:scroll" >
		           			<div class="rentals" id= "property" style="min-width:2850px;">
		                    	@foreach($properties as $property)
		                      	<?php if($property->type == 'Rental')  { ?>
									<a class="premium_div" href="{{ url('property/'.$property->id) }}" >
									<div class="card" id="premium_rental" style="position:inherit">
										<img class="card-img-top" src="/uploads/properties/images/{{$property->image()->first()->image}}">
										<div class="" style="text-align: center;margin-top:10px">
											<h6><b>Price: Rs. {{$property->price}}/-</b></h5>	
											<p class="card-text">
												category:{{$property->rental->category}}<br>
												{{$property['city']}},{{$property['district']}}<br>
												{{$property['ward_no']}}	
												{{$property['district']}} <br></p>
										</div>
									</div>
									</a>
		                      	<?php } ?>
		                   		@endforeach
		                 	</div>
					</div>
				</div>
				
				<div class="indic d-none d-sm-none d-lg-block">
					<button class="rent_left" id='Left'><i class="fa fa-chevron-circle-left"></i></button>
					<button class="rent_right" id='Right'><i class="fa fa-chevron-circle-right"></i></button>
				</div>
          	</div>
        
<hr>

<!-- this is for hjomestus ----->

			<div class="row">
				<div style="overflow:hidden;height:28rem;">
				<h3><strong>Premium homest</strong></h3>	
					<div class="col-lg-12 col-md-12 col-sm-12 " id="homejs"style="position:inherit; height:30rem;padding-bottom:-200px; overflow-x:scroll" >
		           			<div class="rentals" id= "property" style="min-width:2850px;">
		                    		@foreach($homestays as $property)
		                    		<?php if($property->type == 'Homestay')  { ?>
									<a class="premium_div" href="{{ url('property/'.$property->id) }}" >
									<div class="card mb-2" id="premium_rental" style="position:inherit">
										<img class="card-img-top" src="/uploads/properties/images/{{$property->image()->first()->image}}">
										<div class="card-body">
											<h5 class="	card-title"><b>Price: Rs. {{$property->price}}/-</b></h5>	
											<p class="card-text">
												{{$property['price']}} <br>
												{{$property['type']}} <br>
												{{$property['id']}} <br>
												{{$property['district']}} <br></p>
										</div>
									</div>
									</a>
		                      	<?php } ?>
		                   		@endforeach
		                 	</div>
					</div>
				</div>
				
				<div class="indic d-none d-sm-none d-lg-block">
					<button class="home_left" id='hLeft'><i class="fa fa-chevron-circle-left"></i></button>
					<button class="home_right" id='hRight'><i class="fa fa-chevron-circle-right"></i></button>
				</div>
          	</div>
<hr>
<br>
        </div><!--container closes-->
</div> <!-- container fluid closes-->
<div class="container-fluid"id="newsletter-container">
	<div class="container"  style="padding:40px">
		<div class="row" style="color:black;justify-content:center;">
			<h5>subscribe to our newsletter and get latest info and offers on the go !!
		</h3></div>
		<div class="input-container" style="" >
			<input type="text" name="newsletter" value="" placeholder="name@example.com">
			<button type="submit"><i>Subscribe</i></button>
		</div>
		<p class="mt-1" style="color:#0b0d21"><b>By clicking the button you agree to our <br>	<a href="#newsletter-container"> Privacy Policy</a> and <a href="#newsletter-container">Terms and Conditions.</a></b></p>
	</div>
</div>	
@include('layouts.footer')
@endsection
