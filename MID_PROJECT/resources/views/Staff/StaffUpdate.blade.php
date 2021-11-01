@extends('layouts.app')
@section('content')
<head>
<link rel="stylesheet" type="text/css" href="/css/design2.css">
</head>
    <form action="{{route('updatesubmit')}}"  method="post">
    <fieldset>
            <legend>Update Profile</legend>
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <table>
    <tr>
           <td> <span>Name</span></td>
           <td>   <input type="text" name="name" value="{{$staff->U_Name}}" ></td>
            @error('name')
            <td>  <span>{{$message}}</span></td>
            @enderror
</tr>
<tr> 

            
<td>   <span>Phone</span></td>
<td>  <input type="text" name="phone" value="{{$staff->U_phone}}" ></td>
            @error('phone')
            <td>     <span >{{$message}}</span></td>
            @enderror
</tr>       

<tr>   
<td>  <span>Address</span></td>
<td>   <input type="text" name="address" value="{{$staff->U_address}}" ></td>
            @error('address')
            <td>  <span >{{$message}}</span></td>
            @enderror
            
</tr>
            
     <tr>   
     <td>  <span>Username</span></td>    
            <td>  <input type="text" name="username" value="{{$staff->U_username}}" ></td>
            @error('username')
            <td>  <span class="text-danger">{{$message}}</span></td>
            @enderror
</tr>     

     <tr>       
     <td> <span>Email</span></td>
     <td>    <input type="text" name="email" value="{{$staff->U_email}}" ></td>
            @error('email')
            <td>  <span >{{$message}}</span></td>
            @enderror
            
</tr>

        <tr>    
<td>  <span>Password</span></td>
<td>      <input type="text" name="password" value="{{$staff->U_password}}"></td>
            @error('password')
            <td>     <span >{{$message}}</span></td>
            @enderror
</tr>
         

<input type="hidden" name="profileimg" value="default.png" >


      <tr>  
      <td>  <input type="submit"  value="Update" ></td>
</tr>
</table>
</fieldset>
    </form>

    @endsection