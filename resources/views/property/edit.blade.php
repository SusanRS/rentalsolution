

@extends('layouts.app')


@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="p-2">
                    
                    <form method="POST" action="/property/{{$property->id}}">
                            {{ method_field('PATCH')}}
                        @csrf

                       
                        <div class="row"> 
                            
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group mb-1">
                                    <label for="property_type">Property Type</label>
                        
                                    <select id="property"  onchange="show()" autofocus class="form-control" name = "property_type" required>   
                                        <option selected  value = "{{$property->property_type}}">{{$property->property_type}}</option>       
                                        <option  value = "Rental">Rental</option>       
                                        <option class="form-control" value = "Homestay">Homestay</option> 
                                       
                                    </select> 
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group mb-1">
                                    <label for="price">{{ __('Price') }}</label>
                                    <input id="price" type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{$property->price}}" required autofocus>


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


                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group mb-1">
                                   {{--  <label for="district">{{ __('District') }}</label>
                                    <input id="district" type="text" class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" name="district" value="{{$property->district}}" required autofocus>
                                         --}}



                                <label for="district">{{ __('District') }}</label>
                                    {{-- <input id="district" type="text" class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" name="" value="{{ old('district') }}" required autofocus> --}}
                                        
                                    <select autofocus class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" name = "district" required>   
                                        <option selected value = "{{ old('district') }}">{{$property->district}}</option>       
                                        <option value = "Taplejung">Taplejung</option>       
                                        <option value = "Panchthar">Panchthar</option>       
                                        <option value = "Ilam">Ilam</option>       
                                        <option value = "Jhapa">Jhapa</option>       
                                        <option value = "Morang">Morang</option>       
                                        <option value = "Sunsari">Sunsari</option>       
                                        <option value = "Dhankutta">Dhankutta</option>       
                                        <option value = "Sankhuwasabha">Sankhuwasabha</option>       
                                        <option value = "Bhojpur">Bhojpur</option>       
                                        <option value = "Terhathum">Terhathum</option>       
                                        <option value = "Okhaldunga">Okhaldunga</option>       
                                        <option value = "Khotang">Khotang</option>       
                                        <option value = "Solukhumbu">Solukhumbu</option>       
                                        <option value = "Udaypur">Udaypur</option>       
                                        <option value = "Saptari">Saptari</option>       
                                        <option value = "Siraha">Siraha</option>       
                                        <option value = "Dhanusa">Dhanusa</option>       
                                        <option value = "Mahottari">Mahottari</option>       
                                        <option value = "Sarlahi">Sarlahi</option>       
                                        <option value = "Sindhuli">Sindhuli</option>       
                                        <option value = "Ramechhap">Ramechhap</option>       
                                        <option value = "Dolkha">Dolkha</option>       
                                        <option value = "Sindhupalchauk">Sindhupalchauk</option>       
                                        <option value = "Kavreplanchauk">Kavreplanchauk</option>       
                                        <option value = "Lalitpur">Lalitpur</option>       
                                        <option value = "Bhaktapur">Bhaktapur</option>       
                                        <option value = "Kathmandu">Kathmandu</option>       
                                        <option value = "Nuwakot">Nuwakot</option>       
                                        <option value = "Rasuwa">Rasuwa</option>       
                                        <option value = "Dhading">Dhading</option>       
                                        <option value = "Makwanpur">Makwanpur</option>       
                                        <option value = "Rauthat">Rauthat</option>       
                                        <option value = "Bara">Bara</option>       
                                        <option value = "Parsa">Parsa</option>       
                                        <option value = "Chitwan">Chitwan</option>       
                                        <option value = "Gorkha">Gorkha</option>       
                                        <option value = "Lamjung">Lamjung</option>       
                                        <option value = "Tanahun">Tanahun</option>       
                                        <option value = "Syangja">Syangja</option>       
                                        <option value = "Kaski">Kaski</option>       
                                        <option value = "Manag">Manag</option>       
                                        <option value = "Mustang">Mustang</option>       
                                        <option value = "Parwat">Parwat</option>       
                                        <option value = "Myagdi">Myagdi</option>       
                                        <option value = "Baglung">Baglung</option>       
                                        <option value = "Gulmi">Gulmi</option>       
                                        <option value = "Palpa">Palpa</option>       
                                        <option value = "Nawalpur">Nawalpur</option>       
                                        <option value = "Parasi">Parasi</option>       
                                        <option value = "Rupandehi">Rupandehi</option>       
                                        <option value = "Arghakhanchi">Arghakhanchi</option>       
                                        <option value = "Kapilvastu">Kapilvastu</option>       
                                        <option value = "Pyuthan">Pyuthan</option>       
                                        <option value = "Rolpa">Rolpa</option>       
                                        <option value = "Rukum_Purba">Rukum Purba</option>       
                                        <option value = "Rukum_Paschim">Rukum Paschim</option>       
                                        <option value = "Salyan">Salyan</option>       
                                        <option value = "Dang">Dang</option>       
                                        <option value = "Bardiya">Bardiya</option>       
                                        <option value = "Surkhet">Surkhet</option>       
                                        <option value = "Dailekh">Dailekh</option>       
                                        <option value = "Banke">Banke</option>       
                                        <option value = "Jajarkot">Jajarkot</option>       
                                        <option value = "Dolpa">Dolpa</option>       
                                        <option value = "Humla">Humla</option>       
                                        <option value = "Kalikot">Kalikot</option>       
                                        <option value = "Mugu">Mugu</option>       
                                        <option value = "Jumla">Jumla</option>       
                                        <option value = "Bajura">Bajura</option>       
                                        <option value = "Bajhang">Bajhang</option>       
                                        <option value = "Achham">Achham</option>       
                                        <option value = "Doti">Doti</option>       
                                        <option value = "Kailali">Kailali</option>       
                                        <option value = "Kanchanpur">Kanchanpur</option>       
                                        <option value = "Dadeldhura">Dadeldhura</option>       
                                        <option value = "Baitadi">Baitadi</option>       
                                        <option value = "Darchula">Darchula</option>       
                                        
                                       
                                    </select> 

                                    @if ($errors->has('district'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('district') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                           
                            
                            {{-- <div class="col-md-6 col-sm-6">
                                <div class="form-group mb-1">
                                    <label for="province_no">{{ __('Province') }}</label>
                                    <input id="province_no" type="number" class="form-control{{ $errors->has('province_no') ? ' is-invalid' : '' }}" name="province_no" value="{{$property->province_no}}" required autofocus>

                                    @if ($errors->has('province_no'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('province_no') }}</strong>
                                        </span>
                                    @endif
                           
                                </div>
                            </div> --}}
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group mb-1">
                                    <label for="city">{{ __('City') }}</label>
                                    <input id="city" type="type" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{$property->city}}" required autofocus>

                                    @if ($errors->has('city'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group mb-1">
                                    <label for="ward_no">{{ __('ward') }}</label>

                          
                                <input id="ward_no" type="number" class="form-control{{ $errors->has('ward_no') ? ' is-invalid' : '' }}" name="ward_no" value="{{$property->ward_no}}" required autofocus>

                                @if ($errors->has('ward_no'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ward_no') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                        
                        <div class="col-md-6 col-sm-6">
                                <div class="form-group mb-1">
                                     
                                     <label for="street_address">{{ __('Street') }}</label>

                           
                                <input id="street_address" type="text" class="form-control{{ $errors->has('street_address') ? ' is-invalid' : '' }}" name="street_address" value="{{$property->street_address}}" required autofocus>

                                @if ($errors->has('street_address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('street_address') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                        </div>
                        
<hr>
                 <!--- this is for rental -->                     
                      
                        <div id="rdiv" class="hide" style="display:none;">  <h4>for rentals</h4>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">rental type</div>
                                <div class="col-md-6 col-sm-6">water service</div>
                                <div class="col-md-6 col-sm-6">no of rooms</div>
                                <div class="col-md-6 col-sm-6">BHK</div>
                                <div class="col-md-6 col-sm-6">no floors</div>
                                
                            </div>
                        </div>
                            
         <!--- this is for homestays -->  
                        
                        <div id="hdiv" class="hide" style="display:none;">
                            <h4>for pg</h4>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">type</div>
                                <div class="col-md-6 col-sm-6">no of guests</div>
                                <div class="col-md-6 col-sm-6">detours</div>
                            </div>
                        </div>
                        
                        <hr>
                        <h4>extra descriptions</h4>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group mb-1">
                                    <label for="descriptions">{{ __('Property Descriptions') }}</label>
                                   
                                    <textarea name="descriptions"class="form-control{{ $errors->has('descriptions') ? ' is-invalid' : '' }}" value="" required>{{$property->descriptions}}</textarea>

                                
                                    @if ($errors->has('descriptions'))
                                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('descriptions') }}</strong>
                                         </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    

                        <div class="mt-1">
                            <button type="submit" class="btn btn-primary">{{ __('Commit Changes') }}</button>
                        </div>


                    </form>

                    <div style="margin-top:-37px;margin-left:157px;">
                    <form action="/property/{{$property->id}}" method="POST" accept-charset="utf-8">
                    {{-- {{ @method_field('DELETE') }} --}}
                    @method('DELETE')
                    @csrf   
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </div>

                    
                </div>                
            </div>
            
        </div><!--close main row -->
    </div><!--close main container -->
</section>
@endsection







                         





