@extends('layouts.app')

@section('content')
 
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-12 ">
                <img src="/images/profile.png" class="rounded-circle thumbnail border border-warning">
            </div>
            <div class="col-md-10 col-sm-12">
                <h4 class="jumbotron ml-5">
                    Name :{{$userp->name}}<br>
                    Address: {{$userp->address}} <br>
                    Contact : {{$userp->contact}} <br>
                    Email : {{$userp->email}}
                </h4>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                @if(auth()->user()->isowner!=1)
                    @if(auth()->user()->upgrade_req!=1)
                    <h5>want to post an Ad</h5>
                    
                    <button class="btn btn-danger" data-toggle="collapse" data-target="#upgrade-form">Upgrade</button>
                   
                    <hr>
                        
                        <div id="upgrade-form" class="collapse">
                           
                             
                            <form action="/owner" method="post" enctype="multipart/form-data" accept-charset="utf-8">@csrf
                               
                               
                         <input type="file" class="file-input"  name="document" placeholder="asdasd" value="choose ">
                                 
                                <br>
                                <button type="submit" class="btn btn-info mt-3">Submit details</button>
                            </form>
                        @else
                        <div class="jumbotron">
                            <h3>Thanks for upgrade request</h3>
                            <h4>we will review and get back at you soon</h4>
                        </div>

                @endif
                @endif
            </div>
            
        </div>
        






    </div>

</section>





{{-- 
            <table class="table">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>address</th>
                        <th>contact</th>
                        <th>email</th>
                    </tr>
                </thead>
                
              @foreach($users as $user)
                <tbody>
                    <tr>


                        <td>{{$user['name']}}</td>
                        <td>{{$user['address']}}</td>
                        <td>{{$user['contact']}}</td>
                        <td>{{$user['email']}}</td>
                        
                        
                    </tr>
                </tbody>
              @endforeach
            </table> --}}



  


@endsection
