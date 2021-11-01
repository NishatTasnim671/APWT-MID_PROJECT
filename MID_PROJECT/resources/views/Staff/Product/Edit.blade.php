@extends('layouts.staffapp')
@section('content')
<head>
<link rel="stylesheet" type="text/css" href="/css/design1.css">
</head>
<h1 align="center">Edit product</h1>
<form action="{{route('editsubmit')}}"  method="post"  enctype="multipart/form-data">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <fieldset>
               <legend>Edit Product</legend>
               <table>
        <input type="hidden" name="id" value="{{$pro->id}}">
        <tr>
           <td> <span>Product Id</span></td>
           <td> <input type="text" name="p_id" value="{{$pro->P_id}}" ></td>
            @error('p_id')
            <td> <span class="text-danger">{{$message}}</span></td>
            @enderror
</tr>
<tr>
        
<td>   <span>Name</span></td>
<td>  <input type="text" name="p_name" value="{{$pro->P_name}}" ></td>
            @error('p_name')
<td> <span class="text-danger">{{$message}}</span></td>
            @enderror
</tr>
<tr>
            <td> <span>Price</span></td>
            <td>   <input type="text" name="p_price" value="{{$pro->P_price}}" ></td>
            @error('p_price')
            <td> <span class="text-danger">{{$message}}</span></td>
            @enderror
</tr>
<tr>

<td><span>Category</span></td>
          <td>  <select name="p_categories" >
                <option value="">{{$pro->category->name}}</option>
               
               
</select></td>
</tr>
<tr>

<td> <span>Quantity</span></td>
<td>   <input type="text" name="p_quantity" value="{{$pro->P_quantity}}" ></td>
            @error('p_quantity')
            <td>   <span class="text-danger">{{$message}}</span></td>
            @enderror
</tr>
<tr>  
<td> <span>Details</span></td>
<td>  <input type="text" name="p_details" value="{{$pro->P_details}}" ></td>
            @error('p_details')
            <td>  <span class="text-danger">{{$message}}</span></td>
            @enderror
</tr>
<tr>
           
<td><span>Image 1</span><td>
            @if($pro->P_img1)
            <img src="{{asset('assets/uploads/product/image1/'.$pro->P_img1)}}" alt="">
            @endif
            <td>  <input type="file" name="P_img1" > </td>
</tr>
<tr> 
<td>   <span>Image 2</span></td> 
            @if($pro->P_img2)
         <td>   <img src="{{asset('assets/uploads/product/image2/'.$pro->P_img2)}}" alt=""> </td>
            @endif
            <td>   <input type="file" name="P_img2" > </td> 
</tr>
<tr>
<td>  <span>Image 3</span></td> 
            @if($pro->P_img3)
          <td>  <img src="{{asset('assets/uploads/product/image3/'.$pro->P_img3)}}" alt=""> </td>
            @endif
            <td>  <input type="file" name="P_img3" ></td> 
</tr>
<tr>
        
<td>   <input type="submit"  value="Edit Product" ></td> 
</tr>
</fieldset>
    </form>

    @endsection