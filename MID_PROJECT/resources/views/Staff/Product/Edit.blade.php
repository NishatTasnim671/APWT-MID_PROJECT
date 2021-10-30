@extends('layouts.staffapp')
@section('content')
<h1>Add product</h1>
<form action="{{route('editsubmit')}}" class="col-md-6" method="post"  enctype="multipart/form-data">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$pro->id}}">
        <div class="form-group">
            <span>Product Id</span>
            <input type="text" name="p_id" value="{{$pro->P_id}}" class="form-control">
            @error('p_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        
        <div class="form-group">
            <span>Name</span>
            <input type="text" name="p_name" value="{{$pro->P_name}}" class="form-control">
            @error('p_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group">
            <span>Price</span>
            <input type="text" name="p_price" value="{{$pro->P_price}}" class="form-control">
            @error('p_price')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
            <span>Category</span>
            <select name="p_categories" >
                <option value="">{{$pro->category->name}}</option>
               
               
</select>

            

            <div class="form-group">
            <span>Quantity</span>
            <input type="text" name="p_quantity" value="{{$pro->P_quantity}}" class="form-control">
            @error('p_quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
            <span>Details</span>
            <input type="text" name="p_details" value="{{$pro->P_details}}" class="form-control">
            @error('p_details')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
           
            <span>Image 1</span>
            @if($pro->P_img1)
            <img src="{{asset('assets/uploads/product/image1/'.$pro->P_img1)}}" alt=""> 
            @endif
            <input type="file" name="P_img1" class="form-control"> 
            <span>Image 2</span>
            @if($pro->P_img2)
            <img src="{{asset('assets/uploads/product/image2/'.$pro->P_img2)}}" alt=""> 
            @endif
            <input type="file" name="P_img2" class="form-control"> 
            <span>Image 3</span>
            @if($pro->P_img3)
            <img src="{{asset('assets/uploads/product/image3/'.$pro->P_img3)}}" alt=""> 
            @endif
            <input type="file" name="P_img3" class="form-control"> 
        <div class="form-group">
        
        <input type="submit" class="btn btn-success" value="Edit Product" ></li>
        </div>
    </form>

    @endsection