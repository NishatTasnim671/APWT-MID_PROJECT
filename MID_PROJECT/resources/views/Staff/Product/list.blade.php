@extends('layouts.proapp')
@section('content')
<head>
<link rel="stylesheet" type="text/css" href="/css/design1.css">
</head>
<div class="header1">

    <?php if(Session::has('staff_id')) {?>
    <h1>Product page</h1>
    </div>
    <div class="button"><a  class="btn btn-info" href="/Staff/addproducts/">Add Product</a></div>
    <fieldset>
        <legend>All Products</legend>
    <table class="table" border='1'>
        <thead>
            <tr>
                <th>Id</th>
              <th>Product Name</th>
              <th>Product Price</th>
              <th>Product Category</th>
              <th>Product Quantity</th>
              <th>Product Details</th>
              <th>Product image 1</th>
              <th>Product image 2</th>
              <th>Product image 3</th>
            </tr>    
        </thead>
        @foreach($Product as $product)
        <tr>
            <td>{{$product->id}}</td>
            
            <td>{{$product->P_name}}</td>
            <td>{{$product->P_price}}</td>
            <td>{{$product->category->name}}</td>
            <td>{{$product->P_quantity}}</td>
            <td>{{$product->P_details}}</td>
            <td>
                <img src="{{asset('assets/uploads/product/image1/'.$product->P_img1)}}">
            </td>
            <td>
                <img src="{{asset('assets/uploads/product/image2/'.$product->P_img2)}}">
            </td>
            <td>
                <img src="{{asset('assets/uploads/product/image3/'.$product->P_img3)}}">
            </td>
            
            <td>
            <a href="/Product/edit/{{$product->id}}/">Edit</a>
            <a href="/Product/delete/{{$product->id}}/">Delete</a>
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