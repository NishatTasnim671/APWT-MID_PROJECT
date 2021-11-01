@extends('layouts.app')
@section('content')
<head>
<link rel="stylesheet" type="text/css" href="/css/design2.css">
</head>
    <form action="{{route('RegistrationSubmit')}}" method="post">
        <fieldset>
            <legend>Registration form</legend>
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
<table>
    <tr>
           <td> <span>Name</span></td>
          <td>  <input type="text" name="name" value="{{old('name')}}" ></td>
            @error('name')
               <td> <span>{{$message}}</span></td>
            @enderror
</tr>
<tr>
           <td> <span>Phone</span></td>
         <td>   <input type="text" name="phone" value="{{old('phone')}}" ></td>
            @error('phone')
                <td><span>{{$message}}</span></td>
            @enderror
</tr>
<tr>          

            
           <td><span> Address</span></td>
<td> <input type="text" name="address" value="{{old('address')}}" ></td>
            
            @error('address')
                <td><span >{{$message}}</span></td>
            @enderror
</tr>   
<tr>
          
<td> <span>Username</span></td>
            <td><input type="text" name="username" value="{{old('username')}}" ></td>
            @error('username')
            <td><span >{{$message}}</span></td>
            @enderror
</tr>
  <tr >        

          
          <td>  <span>Email</span></td>
          <td>  <input type="text" name="email" value="{{old('email')}}" ></td>
            @error('email')
              <td>  <span >{{$message}}</span><td>
            @enderror
</tr>
           


            


        <tr>  
        <td> <span>Password</span></td>
        <td>  <input type="password" name="password" value="{{old('password')}}" ></td>
            @error('password')
            <td>    <span class="text-danger">{{$message}}</span></td>
            @enderror
</tr>   
            <input type="hidden" name="profileimg" value="default.png" >
           

   
       <tr> 
       <td> <input type="submit" value="Registration" ></td>
</tr>
</table>
    </fieldset>
     
    </form>

    @endsection