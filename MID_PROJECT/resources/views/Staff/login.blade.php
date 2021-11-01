@extends('layouts.app')
@section('content')
<head>
<link rel="stylesheet" type="text/css" href="/css/design2.css">
</head>
    <form action="{{route('loginsubmit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
<!--  class="col-md-4 form-group" -->
           <fieldset>
               <legend>Log In</legend>
               <table>
<tr>
           <td> <span>Username</span></td>
           <td> <input type="text" name="username" value="{{old('username')}}" ></td>
            @error('username')
            <td>   <span class="text-danger">{{$message}}</span></td>
            @enderror
</tr>

           <tr>
            <td><span>Password</span></td>
            <td> <input type="password" name="password" value="{{old('password')}}" ></td>
            @error('password')
            <td>   <span class="text-danger">{{$message}}</span></td>
            @enderror
</tr>
      
 @isset($message)
          <div class="alert alert-success">
          <strong>{{@message}}</strong>
          </div>
            @endif
            

             
               
         <tr>
         <td>    <input type="submit" class="btn btn-success" value="Sign In"></td>
</tr>
</table>
</fieldset>
    </form>

    @endsection