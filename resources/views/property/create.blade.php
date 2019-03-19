
@extends('layouts.app')



@section('content')
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('Add property') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('property.store') }}">
                        @csrf

{{-- ..........................address...................... --}}
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

{{-- ..............................PRICE.......................... --}}
                       
                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required autofocus>

                                @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

{{-- ...........................Description....................... --}}

                        <div class="form-group row">
                            <label for="descriptions" class="col-md-4 col-form-label text-md-right">{{ __('Descritions') }}</label>

                            <div class="col-md-6">
                               <textarea name="descriptions"class="form-control{{ $errors->has('descriptions') ? ' is-invalid' : '' }}" value="{{ old('descriptions') }}" required></textarea>

 
                                @if ($errors->has('descriptions'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('descriptions') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

{{-- ..............................type.......................... --}}

            <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Please select</label>

                            <div class="col-md-6">
                                <select name = "property_type" required>   
                                <option value = "Rental">Rental</option>       
                                 <option value = "Homestay">Homestay</option> 
                              </select> 

                            </div>
                        </div>

{{-- ..............................image.......................... --}}

                <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Please select images</label>
                    <input name="image[]" type="file" /><br />
                  
            </div>



            {{-- <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Please select</label>

                            <div class="col-md-6">
                                <select name = "property_type" required>   
                                <option value = "Rental">Rental</option>       
                                 <option value = "Homestay">Homestay</option> 
                              </select> 

                            </div>
                        </div>

 --}}
  {{--               
<div class="form-group row" class="col-md-4">
      <textarea name="future_enhancements=" value="">
        -> Location
      </textarea></div>

 --}}








{{-- ........................................................... --}}

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Request') }}
                                </button>
                            </div>
                        </div>

            


            </div>

</div></div></div></div>

@endsection
