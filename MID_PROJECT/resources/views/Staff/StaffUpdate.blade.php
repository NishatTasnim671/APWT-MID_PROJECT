@extends('layouts.app')
@section('content')
    <form action="{{route('updatesubmit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}

        
        <div class="form-group">
            <span>Name</span>
            <input type="text" name="name" value="{{$staff->U_Name}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
            <span>Phone</span>
            <input type="phone" name="phone" value="{{$staff->U_phone}}" class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
            <span>Address</span>
            <input type="text" name="address" value="{{$staff->U_address}}" class="form-control">
            @error('address')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
            <span>Username</span>
            <input type="text" name="username" value="{{$staff->U_username}}"  readonly="readonly" class="form-control">
            @error('username')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
            <span>Email</span>
            <input type="text" name="email" value="{{$staff->U_email}}" class="form-control">
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>


            


            <div class="form-group">
            <span>Password</span>
            <input type="text" name="password" value="{{$staff->U_password}}" class="form-control">
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            

            <input type="hidden" name="profileimg" value="default.png" class="form-control">


            

            


        <div class="form-group">
        
        <input type="submit" class="btn btn-success" value="Update" ></li>
        </div>
    </form>

    @endsection