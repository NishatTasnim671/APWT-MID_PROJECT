@extends('layouts.staffapp')
@section('content')
<head>
<link rel="stylesheet" type="text/css" href="/css/design1.css">
</head>
<div class="header1">

    <?php if(Session::has('staff_id')) {?>
    <h1>Category page</h1>
    </div>
    <div class="button"><a  class="btn btn-info" href="/Staff/addcategories/">Add Category</a></div>
    <fieldset>
        <legend>All Category</legend>
    <table class="table" align="center" border='1'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
            </tr>    
        </thead>
        @foreach($Category as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->desc}}</td>
            <td>
            <td><a href="/Category/edit/{{$item->id}}/">Edit</a>
            <a href="/Category/delete/{{$item->id}}/">Delete</a>
    </td>
    </tr>
        
    @endforeach
        <tbody>
    </tbody>
    </table>
    </fieldset>

    
        
        

       
<?php } 
    ?>
    @endsection