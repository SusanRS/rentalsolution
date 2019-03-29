
@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div id="main-bg" class="container-fluid" style="background-image: ('/images/profile.jpg');background-repeat:no-repeat;background-size:cover; background-position:center;"><!-- this will have bg-->
        <div class="container" style=" height:450px;">
            <div class="row">  
              <div class="col-md-12" style="margin:30px">
                <form method="post" action="/search">
                  @csrf
                  <div class="row flex-container" style="text-align:center;margin:15% 0% 0% 28%">
                    {{-- <input type="text" name="district" value="" placeholder="district" autofocus> --}}
                  <select name="district">
                     @include('welcome')
                  </select>

                         
                      <select name="price">
                        <option value="99999999">any</option>
                        <option value="5000">5000</option>
                        <option value="10000">10000</option>
                        <option value="15000">15000</option>
                        
                      </select>

                      <select name="propertytype">
                        <option value="Rental">Rental</option>
                        <option value="Homestay">Homestay</option>
                        
                      </select>
                                        {{--  --}}
                   <button type="submit" class="btn btn-success">search</button>
                  </div>


                </form>
              




              </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                <div class="col-md-9">
                <h3>“some things"</h3>
            </div>
            <div class="col-md-3">
                  <a href="" class="btn btn-primary">Rentals</a>
                  <a href="" class="btn btn-secondary">Homestays</a>
                </div></div>
            </div>
        </div>
        <hr>
        
    <!-- --------------------------Rental Row -------------------------------------------->

          <div class="row">
            <div class="col-md-9 " style="overflow:hidden" >
              <h3><strong>Premium Rentals</strong></h3>
              <div class="rentals" style="overflow-x:auto; height:200px ;">
                    @foreach($premiums as $premium)
                      <?php if($premium['property_type'] == 'Rental')  { ?>
                      <div style=" text-align:center;width:140px;float:left">
                       
                          {{$premium['price']}} <br>
                          {{$premium['property_type']}} <br>
                          {{$premium['id']}} <br>
                          {{$premium['district']}} <br>
                          <a href="{{ url('property/'.$premium->id) }}" class="btn btn-success">view</a>
                       </div>
                      <?php } ?>
                    @endforeach
                 </div>

            </div>
            <div class="col-md-3">
              <h1 class="jumbotron">this willl be some notes for rentals</h1>
            </div>
          </div>
          <hr>
          <br>
<!-- --------------------------home Row -------------------------------------------->
          <div class="row">

            <div class="col-md-3">
                <h1 class="jumbotron">this willl be some notes</h1>
            </div>
            <div class="col-md-9">
              <h3><strong>Premium  Homestays</strong></h1>
              
              
                    <div class="rentals" style="overflow-x:auto; height:200px ;">
                    @foreach($premiums as $premium)
                      <?php if($premium['property_type'] == 'Homestay')  { ?>
                         <div style=" text-align:center;width:140px;float:left">
                          {{$premium['price']}} <br>
                          {{$premium['property_type']}} <br>
                          {{$premium['id']}} <br>
                          {{$premium['district']}} <br>
                          <a href="{{ url('property/'.$premium->id) }}" class="btn btn-danger">view</a>
                       </div>
                      <?php } ?> 
                    @endforeach
                    </div>
               
            
            </div>
          </div>
        </div>
      </div>
     
     <hr>
    

  <div class="container-fluid py-3" style="background-color:black;">
    
    <footer class="container" style="color:white">
 
    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>

</footer></div>




@endsection
