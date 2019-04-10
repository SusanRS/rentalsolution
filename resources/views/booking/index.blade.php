@extends('layouts.app')

@section('content')
    <div class="container"> 
        <div class="view" style="overflow-x:auto;">
            <table class="table" style="text-align: center;">
                <thead>
                    <tr>
                        <th>Property_id</th>
                        <th colspan="4">Address</th>
                        <th colspan="">Type</th>
                        <th>price</th>
                        <th>Action</th>
                        
                      
                    </tr>
                </thead>
                
                <tbody>
             
                    @foreach($booking as $booked)
                        <tr>
                            <td>{{$booked->property_id}}</td>
                            <td>{{$booked->property->district}}</td>
                            <td>{{$booked->property->city}}</td>
                            <td>{{$booked->property->ward_no}}</td>
                            <td>{{$booked->property->street}}</td>
                            <td>{{$booked->property->rental['category']}}</td>
                            <td>{{$booked->property->user['name']}}</td>
                            
                            <td>{{$booked->property->price}}</td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-pid ="{{$booked->property_id}}"data-target="#exampleModal">
  Launch demo modal
</button></td>
                        
                            
                        </tr>
                @endforeach
                </tbody>
            </table>
           
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection