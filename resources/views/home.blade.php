@extends('layouts.app')

@section('content')
		
<div class="container-fluid">
	    
	    <div id="main-bg" class="container-fluid" style="height:350px;background-image: url('/images/bg.jpg');background-repeat:no-repeat;background-size:cover; background-position:center;"><!-- this will have bg-->
	        <div class="container" id="search_bar" ><!--search bar  div start-->
	            <form method="post" action="/search">
	                @csrf
	                  
	                <input type="text" name="district" value="" placeholder="District" required autofocus>
	                <input type="text" name="city" value="" placeholder="City" required autofocus>
	                <input type="text" name="price" value="" placeholder="Price" required autofocus>
					
					<button type="submit" class="srch-btn"> <i class="fa fa-search"></i></button>
              	</form>
            </div><!--search bar  div close-->
        </div><!--main-bg  div close-->
<hr>
<br>
		<div class="container">
            <div class="row">
            	<div class="col-md-9">
	                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	              	also avaailable homestays</h3>
            	</div>
            	
            	<div class="col-md-3">
                	<a href= " {{url('/homestays')}}"class="btn btn-secondary">view now</a>
                </div>
            </div><!-- row closes-->
<hr>
<br>        
<!---------------------------------------Rentl Row ------------------------------>
					{{-- <div style=" text-align:center;width:140px;float:left">	
									<img style="height:100px; width:100px;"src="/uploads/properties/images/{{$property->image()->first()->image}}"><br>
									{{$property->price}}<br>

									{{$property->rental->category}}<br>
									{{$property['city']}}-{{$property['ward_no']}} <br>
									{{$property['district']}} <br>
									<a href="{{ url('property/'.$property->id) }}" class="btn btn-success">view</a>
							
								</div> --}}		
			<div class="row">
			<div style="overflow:hidden;height:28rem;">
			<h3><strong>Premium Rentals</strong></h3>	

	            <div class="col-lg-12 col-md-5  col-sm-10 "style=" height:30rem;padding-bottom:-200px; ;overflow-x:auto" >
	           
	             	
	                	<div class="rentals" id= "property" style="min-width:2850px;">
	                    
								
							
	                    	@foreach($properties as $property)
	                      	
	                      	<?php if($property->type == 'Rental')  { ?>
								<a class="premium_div" href="{{ url('property/'.$property->id) }}" >
								<div class="card mb-2" id="premium_rental" style="">	
									<img class="card-img-top" src="/uploads/properties/images/{{$property->image()->first()->image}}">
									
									<div class="card-body">
										<h5 class="	card-title"><b>Price: Rs. {{$property->price}}/-</b></h5>	
										<p class="card-text">
											A {{$property->rental->category}} to rent at {{$property['district']}}<br>
											{{$property['city']}}-{{$property['ward_no']}}<br>	
											{{$property['district']}} <br></p>
									</div>
								</div>
								</a>
								

	                      	<?php } ?>
	                   		@endforeach
	                   		{{-- <a class="premium_div" href="" >
								<div class="card mb-2" id="premium_rental" style="">	
									a link to view all the premiums
									</div>
								</div>
								</div></a> --}}
	                   		
	                 	</div>
				</div>

	                      	
	                   		
							
							
           	
            	{{-- <div class="col-md-3">
              		<h1 class="jumbotron">this willl be some notes for rentals</h1>
            	</div> --}}
			</div>

          	</div>
        
<hr>

<!-- this is for hjomestus ----->

			<div class="row">
				<div class="col-md-3">
					<h1 class="jumbotron">this willl be some notes</h1>
				</div>
				
				<div class="col-md-9">
					<h3><strong>Premium  Homestays</strong></h3>
						<div class="rentals" style="overflow-x:auto; height:200px ;">
							@foreach($properties as $property)
								<?php if($property['buyable_type'] == 'Homestay')  { ?>
									<div style=" text-align:center;width:140px;float:left">
										{{$property['price']}} <br>
										{{$property['buyable_type']}} <br>
										{{$property['id']}} <br>
										{{$property['district']}} <br>
										<a href="{{ url('property/'.$property->id) }}" class="btn btn-danger">view</a>
									</div>
								<?php } ?> 
							@endforeach
						</div>
				</div>
			</div>
<hr>
<br>
        </div><!--container closes-->
</div>
<div id="footer" class=" py-2" style="background:black">

<div class="container mt-3">
	<div class="row">
		<div class="col-md-12 " id="comp" style="color:white">
			<h4><u><strong>Company Address</strong></u></h4>
          <p> Hetauda-4, KantiRajpath<br>
              Makawanpur, Nepal <br>
              <h5>Contact</h5>
              057-502020, 9845848598
          </p>
      
		
			<div id="map">
			<iframe id="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d885.304602748202!2d85.03464582916997!3d27.431303189247952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjfCsDI1JzUyLjciTiA4NcKwMDInMDYuNyJF!5e0!3m2!1sen!2snp!4v1554555699917!5m2!1sen!2snp" frameborder="2" style="border:1" allowfullscreen></iframe></div>
		</div>

	</div>
</div>



</div> <!-- container fluid closes-->
@endsection
