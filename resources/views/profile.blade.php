@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img src="/uploads/avatar/{{ $user->profile }}"style="width:120px; height:130px; float:left; border-radius:200px;margin-right:25px;" >
                <h3>User Profile</h3>
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label>upload picture</label><br>
                    <input type="file" name="profile" value="upload">
                    <input type="submit" name="submit" value="upload" class="pull-right btn btn-primary btn-sm">
                    @csrf
                </form>


            </div>
        </div>
    </div>

@endsection
