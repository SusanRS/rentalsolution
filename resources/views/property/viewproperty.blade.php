@extends('layouts.app')



@section('content')

<section><div class="container">
    
    <div id="row1 carousel" class="row">
      <div class="col-md-12">
        <h4>{{$viewprop->property_type}} details</h4>
        <h1 class="jumbotron" style="height:400px;">  </h1>

      </div>
    

    </div>
    

    <div id="row2" class="row">
      <div class="col-md-8"> 
        <div class="row">
          <div class="col-md-8">
                <h4>{{$viewprop->type}} available for booking</h4>
                <h5>{{$viewprop->street_address}}, {{$viewprop->city}}-{{$viewprop->ward_no}}, {{$viewprop->district}}</h5>
            
            </div>

            <div class="col-md-4"><h3>Price: <br>Rs {{$viewprop->price}} /-</h3> </div>
          </div>
      
         
         <div class="row">
          <div class="col-md-8">
            <hr>
                <h4>Descriptions</h4>
               <p>{{$viewprop->descriptions}}</p>
               <a href="/book/{{$viewprop->id}}" class="btn btn-danger">book</a>
            
            </div>
              <div class="col-md-3">
                              <br><br>
                              <h4><u>Details</u></h4>
                              @if($viewprop->property_type=='Rental')

                              <p>
                              {{$viewprop->floor}} <br>
                              {{$viewprop->bhk}} <br>
                              {{$viewprop->num_rooms}} rooms <br>
                              Parking : {{$viewprop->parking}}
                               
                            @endif
                          </div>

          </div>
        </div>
              

      <div class="col-md-4">
        <div class="owner">
          
          <h5><i><u>owner's info</u></i></h5>
          <p><strong>Owner's name : {{$viewprop->user['name']}}</strong><br>
          <strong>Contact : {{$viewprop->user['contact']}} </strong><br>
         <strong>Email : {{$viewprop->user['email']}} </strong></p>
        
          

        </div>
          
          @if(!Auth::guest())

          <textarea name="feedback" class="form-control">{{old('feedback')}}</textarea>
          <a class="btn btn-info mt-3" href="{{ url('feedback/index/'.$viewprop->id) }}">feedback</a> @endif
      </div>
    </div>

</div>
          
    
     
        <div class="col-md-12 ">
          <h1 class="jumbotron"> This will contain the Footer text and details and some links</h1></h1>
        </div>
   
   
    

</section>




@endsection