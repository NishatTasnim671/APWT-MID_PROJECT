@extends('layouts.staffapp')
@section('content')
<head>
<link rel="stylesheet" type="text/css" href="/css/design2.css">
</head>
<form action="{{route('editCat')}}" method="post">
<fieldset>
               <legend>Edit Category</legend>
               <table>
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}

        <input type="hidden" name="id" value="{{$cate->id}}">
        <tr>
<td>  <span>Name</span></td>
<td>    <input type="text" name="name" value="{{$cate->name}}" ></td>
            @error('name')
            <td> <span class="text-danger">{{$message}}</span></td>
            @enderror
</tr>
<tr>
<td> <span>Description</span></td>
<td> <input type="text" name="desc" value="{{$cate->desc}}" ></td>
            @error('desc')
            <td>  <span class="text-danger">{{$message}}</span></td>
            @enderror
</tr>
        <tr>
        <td> <input type="submit" class="btn btn-success" value="Edit" ></td>
</table>
</fieldset>
    </form>

    @endsection