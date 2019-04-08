
@extends('layouts.app')


@section('content')

@if(auth()->user()->isowner!=1)
    @if(auth()->user()->upgrade_req!=1)

        
        <div class ="container alert alert-primary" role="alert">
        <h1>OOPS! Are you a Owner.</h1>
        <hr>
        <a  class="btn btn-success" href="/profile/{{auth()->user()->id}}">Upgrade your account</a>            
        </div>

        @else
        


        <div class="container alert alert-success" role="alert">
            <img style="height:100px;width:100px" class="rounded float-left" src="/images/icon.png" alt="">
            <h2 class="alert-heading">Well done!</h2>

            <p>Aww yeah, you successfully submitted to upgrade your account. This wont take much longer so please wait paiently.</p>
            <hr>
            <p class="mt-0">You can still view other properties whenever you want !!</p>
        </div>












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
                    <form enctype="multipart/form-data" method="POST" action="{{ route('property.store') }}">
                        @csrf
                        

                        <div class="row"> 
                            
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group mb-1">
                                    <label for="property_type">Property Type</label>

                                    <select id="change_property"  onchange="show()" autofocus class="form-control" name = "property_type" required>   
                                        <option   value = "1">select an option</option>       
                                        <option  value = "Rental">Rental</option>       
                                        <option value = "Homestay">Homestay</option> 
                                    </select>
                                    
                                    {{-- <input type="text" class="form-control" name="property_type" value="" placeholder=""> --}}
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
                                    <label for="street">{{ __('Street') }}</label>
                                    <input id="street" type="text" class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}" name="street" value="{{ old('street') }}" required autofocus>
                                    @if ($errors->has('street'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('street') }}</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                        
                        </div> {{-- end of address row--}}
                        

                        <hr>
   
        
   <!-------------- this is for rental ------------------->                     
                      
                        <div id="div_rental" class="hidden" style="display:none">
                            
                                         

{{-- rental type --}}                             
            
             
             
             
      

                            <div class="row">
{{-- category --}}
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group mb-1">
                                        <label for="rental_type">{{ __('category') }}</label>
                                            <select autofocus class="form-control{{ $errors->has('rental_type') ? ' is-invalid' : '' }}" name = "rental_type" autofocus >   
                                                <option value = "">select</option>
                                                <option value = "Flats & Apartment">Flats & Apartment</option>       
                                                <option value = "House" >Houses</option>       
                                                <option value = "Rooms">Rooms</option>       
                                                <option value = "Shutters & commercials">Shutters & commercials spaces</option>       
                                            </select>
                                    </div>
                                </div>
{{-- bhk --}}
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
                            </div>

                            <div class="row">
 {{-- no of room--}}
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group mb-1">
                                        <label for="room">{{ __('Number of rooms') }}</label>
                                        <input id="room" type="number" min="1" class="form-control{{ $errors->has('room') ? ' is-invalid' : '' }}" name="num_rooms" value="{{ old('room') }}" >
                                    </div>
                                </div>
{{-- parking --}}
                                <div class="col-md-6 col-sm-6">
                                     <div class="form-group mb-1">
                                        <label for="parking">{{ __('Parking facility') }}</label><br>
                                            <input type="radio" name="parking" value="1" placeholder="">Yes <br>
                                            <input type="radio" name="parking" value="0" placeholder="">No
                                    </div>
                                </div>
                            </div>

                        </div>
                            
{{-- homestay     --}}<div id="div_homestay" class="hide" style="transition: 1s;display:none;">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                    <div class="form-group mb-1">
                                        <label for="capacity">{{ __('guest capacity') }}</label>
                                        <input id="capacity" type="number" min="1" class="form-control{{ $errors->has('capacity') ? ' is-invalid' : '' }}" name="capacity" value="{{ old('capacity') }}" >
                                        
                                    </div>

                                    <div class="form-group mb-1">
                                        <label for="service">{{ __('guest service') }}</label>
                                        <input id="service" type="text" class="form-control{{ $errors->has('service') ? ' is-invalid' : '' }}" name="service" value="{{ old('service') }}" >
                                        
                                    </div>
                                    

                                    <div class="form-group mb-1">
                                        <label for="category">{{ __('category') }}</label>
                                        <input id="category" type="text" class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" value="{{ old('category') }}" >
                                        
                                    </div>
                            </div> 
                        </div>
 </div>
                            <div class="col-md-6 col-sm-6">
                              
                                <input type="file" class="file-input"  name="legal_docs">
                                    
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label>image for property</label>
                                 <input type="file" class="file-input"  name="property_images[]" multiple>
                            </div>

                     
     

                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group mb-1">
                                    <label for="descriptions">{{ __('Additional Property Descriptions') }}</label>
                                    <textarea name="description"class="form-control{{ $errors->has('descriptions') ? ' is-invalid' : '' }}" value="{{ old('descriptions') }}" required>{{ old('descriptions') }}</textarea>
                                
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
                    this is side barfir featured property
                </aside>
            </div>
        </div><!--close main row -->
    </div><!--close main container -->
</section>
@endif

     

@endsection
