
@extends('layouts.app')


@section('content')

@if(auth()->user()->isowner!=1)
    @if(auth()->user()->upgrade_req!=1)

        
        <div class="jumbotron">
        <h1>OOPS! Are you a Owner.</h1>
        <hr>
        {{-- <a href="/profile/">Upgrade your account</a> --}}
        <a  href="/profile/{{auth()->user()->id}}">Upgrade your account</a>            
        </div>

        @else
        <h3 class="jumbotron">please wait for confirmaton</h1>
        @endif
@else
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="p-2">
                    <h1>Post AD</h1>
                    <hr>
                    
                       
                            @if($errors->count())
                            <div class="alert alert-danger">

                            <h6 class="">one or more required field is missing</h6>
                         
                          @foreach($errors->all() as$error)
                            <li>{{$error}}</li>
                        @endforeach 
                       
                    
                    </div>   @endif
                    <form form method="POST" action="{{ route('property.store') }}">
                        @csrf
                        

                        <div class="row"> 
                            
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group mb-1">
                                    <label for="property_type">Property Type</label>
                        
                                    <select id="property"  onchange="show()" autofocus class="form-control" name = "property_type" required>   
                                        <option   value = "">select an option</option>       
                                        <option  value = "Rental">Rental</option>       
                                        <option class="form-control" value = "Homestay" @if(old('property')=='property_type'){{'selected'}} @endif>Homestay</option> 
                                       
                                    </select> 
                                </div>
                            </div>




                            <div class="col-md-6 col-sm-6">
                                <div class="form-group mb-1">
                                    <label for="price">{{ __('Price') }}</label>
                                    <input id="price" type="number" min="500" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}"  autofocus>

                                    @if ($errors->has('price'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        
                        <hr>
                        <h4>Address</h4>


                        <div class="row"> {{-- start of address row--}}
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group mb-1">
                                    <label for="district">{{ __('District') }}</label>
                                    {{-- <input id="district" type="text" class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" name="" value="{{ old('district') }}" required autofocus> --}}
                                    <select autofocus class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" name = "district" required autofocus >
                                        @include('welcome')
                                    </select>      
                                        
                                       
                                    
                                    @if ($errors->has('district'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('district') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                           
                           


      {{--        this is for city name         --}}
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group mb-1">
                                    <label for="city">{{ __('City') }}</label>
                                    <input id="city" type="type" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>

                                    @if ($errors->has('city'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

          {{--        this is for ward number         --}}
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group mb-1">
                                    <label for="ward_no">{{ __('ward') }}</label>
                                    <input id="ward_no" type="number" min="1" class="form-control{{ $errors->has('ward_no') ? ' is-invalid' : '' }}" name="ward_no" value="{{ old('ward_no') }}" required autofocus>
                                    @if ($errors->has('ward_no'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ward_no') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
          {{--        this is for street name         --}}               
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group mb-1">
                                    <label for="street_address">{{ __('Street') }}</label>
                                    <input id="street_address" type="text" class="form-control{{ $errors->has('street_address') ? ' is-invalid' : '' }}" name="street_address" value="{{ old('street_address') }}" required autofocus>
                                    @if ($errors->has('street_address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('street_address') }}</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                        
                        </div> {{-- end of address row--}}
                        

                        <hr>
   
   <!-------------- this is for rental ------------------->                     
                      
                        <div id="rdiv" class="hide" style="display:none;transition: 1s;">
                            <div class="row">
                                
                                   

{{-- rental type --}}
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group mb-1">
                                        <label for="rental_type">{{ __('Rental type*') }}</label>
                                   
                                        <select autofocus class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name = "type" autofocus >   
                                        <option value = "">select</option>
                                        <option value = "Flats & Apartment">Flats & Apartment</option>       
                                        <option value = "House" >Houses</option>       
                                        <option value = "Rooms">Rooms</option>       
                                        <option value = "Shutters & commercials">Shutters & commercials spaces</option>       
                                        </select>
                                    </div>
                                </div>

                                   
                                 

                                
 {{-- no of room                                --}}
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group mb-1">
                                        <label for="room">{{ __('Number of rooms') }}</label>
                                        <input id="room" type="number" min="1" class="form-control{{ $errors->has('room') ? ' is-invalid' : '' }}" name="num_rooms" value="{{ old('room') }}" >
                                        
                                    </div>
                                </div> 

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group mb-1">
                                        <label for="bhk">{{ __('BHK') }}</label>
                                   
                                        <select autofocus class="form-control{{ $errors->has('bhk') ? ' is-invalid' : '' }}" name = "bhk" autofocus >   
                                        <option value = "">select</option>
                                        <option value = "BHK" @if(old('bhk')=='BHK'){{'selected'}} @endif>BHK</option>       
                                        <option value = "2-BHK" @if(old('bhk')=='2-BHK'){{'selected'}} @endif>2-BHK</option>       
                                        <option value = "3-BHK" @if(old('bhk')=='3-BHK'){{'selected'}} @endif>3-BHK</option>       
                                        <option value = "4-BHK" @if(old('bhk')=='4-BHK'){{'selected'}} @endif>4-BHK</option>       
                                        <option value = "5-BHK" @if(old('bhk')=='5-BHK'){{'selected'}} @endif>5-BHK</option>       
                                        </select>
                                    </div>

                                </div>
                                
                                <div class="col-md-6 col-sm-6">
                                     <div class="form-group mb-1">
                                        <label for="parking">{{ __('Parking facility') }}</label><br>
                                        <input type="radio" name="parking" value="yes" placeholder="">Yes <br>
                                        <input type="radio" name="parking" value="No" placeholder="">No
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                            
                            
                        
<!--- this is for homestays -->  
                        
                        <div id="hdiv" class="hide" style="display:none;">
                            <h4>for pg</h4>
                            <div class="row">


                                        <div class="col-md-6 col-sm-6">
                                        <div class="form-group mb-1">
                                        <label for="home">{{ __('home') }}</label>
                                        <input id="home" type="type" class="form-control{{ $errors->has('home') ? ' is-invalid' : '' }}" name="home" value="{{ old('home') }}" >

                                    
                                        </div>
                                    </div>
                                <div class="col-md-6 col-sm-6">type</div>
                                <div class="col-md-6 col-sm-6">no of guests</div>
                                <div class="col-md-6 col-sm-6">detours</div>
                            </div>
                        </div>

    <!--- this is for DESCRIPTION -->                       
                        <hr>
                        
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group mb-1">
                                    <label for="descriptions">{{ __('Additional Property Descriptions') }}</label>
                                    <textarea name="descriptions"class="form-control{{ $errors->has('descriptions') ? ' is-invalid' : '' }}" value="{{ old('descriptions') }}" required>{{ old('descriptions') }}</textarea>
                                
                                    @if ($errors->has('descriptions'))
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('descriptions') }}</strong>
                                         </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    

                        <div class="mt-1">
                            <button type="submit" class="btn btn-primary">{{ __('Request') }}</button>
                        </div>
                       
                    
                    </form>
                    
                </div>                
            </div>
            <div class="col-md-4 col-sm-4">
                <aside>
                    <div class="premiums" >
                        <div class="rentals py-4" style="overflow-y:auto; height: ;">
                            <h4>FEATURED:</h4>
                            @foreach($premiums as $premium)
                              
                                 <div style=" text-align:center;width:140px;float:left">
                                  {{$premium['price']}} <br>
                                  {{$premium['property_type']}} <br>
                                  {{$premium['id']}} <br>
                                  {{$premium['district']}} <br>
                                  <a href="{{ url('property/'.$premium->id) }}" class="btn btn-danger">view</a>
                               </div>
                              
                            @endforeach
                        </div>
                       

                    </div>
                </aside>
            </div>
        </div><!--close main row -->
    </div><!--close main container -->
</section>
@endif

     

@endsection
