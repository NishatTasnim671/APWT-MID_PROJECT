@extends('layouts.staffapp')
@section('content')
<head>
<link rel="stylesheet" type="text/css" href="/css/design2.css">
</head>
<h1 align="center">Add product</h1>
<form action="{{route('insertproduct')}}"  method="post"  enctype="multipart/form-data">
        <!-- Cross Site Request Forgery-->
        <fieldset>
               <legend>Add Product</legend>
               <table>
        {{csrf_field()}}
            <span>Product Id</span>
            <input type="text" name="p_id" value="{{old('p_id')}}" >
            @error('p_id')
                <span >{{$message}}</span>
            @enderror
        
        
            <span>Name</span>
            <input type="text" name="p_name" value="{{old('p_name')}}" >
            @error('p_name')
                <span >{{$message}}</span>
            @enderror
            </div>
            <div>
            <span>Price</span>
            <input type="text" name="p_price" value="{{old('p_price')}}">
            @error('p_price')
                <span ">{{$message}}</span>
            @enderror
            </div>

            <div >
            <span>Category</span>
            <select name="p_categories">
                <option value="">Select a Category</option>
                @foreach($Category as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
</select>
@error('p_categories')
                <span >{{$message}}</span>
            @enderror
            </div>
            

            
            <span>Quantity</span>
            <input type="text" name="p_quantity" value="{{old('p_quantity')}}" >
            @error('p_quantity')
                <span >{{$message}}</span>
            @enderror
            

           
            <span>Details</span>
            <input type="text" name="p_details" value="{{old('p_details')}}" >
            @error('p_details')
                <span >{{$message}}</span>
            @enderror
           
            <span>Image 1</span>
            <input type="file" name="P_img1" > 
            <span>Image 2</span>
            <input type="file" name="P_img2" > 
            <span>Image 3</span>
            <input type="file" name="P_img3" > 
        
        
        <input type="submit"  value="Add Product" ></li>
        
    </form>

    @endsection