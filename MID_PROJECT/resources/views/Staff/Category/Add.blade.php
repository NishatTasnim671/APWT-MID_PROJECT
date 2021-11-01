@extends('layouts.staffapp')
@section('content')
<head>
<link rel="stylesheet" type="text/css" href="/css/design2.css">
</head>
<h1 align="center">Add Category</h1>
<form action="{{route('insertcategory')}}"  method="post">
<fieldset>
               <legend>Add Category</legend>
               <table>
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}

        <tr>
       
           <td> <span>Name</span></td>
           <td>   <input type="text" name="name" value="{{old('name')}}" ></td>
            @error('name')
            <td>   <span >{{$message}}</span></td>
            @enderror
</tr>
           <tr>
           <td> <span>Description</span></td>
           <td> <input type="text" name="desc" value="{{old('desc')}}" ></td>
            @error('desc')
            <td>  <span>{{$message}}</span></td>
            @enderror
           </tr>

            
<tr>
        
      <td>  <input type="submit"  value="Add Category" ></td>
</table>
</fieldset>
    </form>

    @endsection