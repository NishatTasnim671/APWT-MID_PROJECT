@extends('layouts.staffapp')
@section('content')
<h1>Add product</h1>
<form action="{{route('insertproduct')}}" class="col-md-6" method="post"  enctype="multipart/form-data">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <div class="form-group">
            <span>Product Id</span>
            <input type="text" name="p_id" value="{{old('p_id')}}" class="form-control">
            @error('p_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        
        <div class="form-group">
            <span>Name</span>
            <input type="text" name="p_name" value="{{old('p_name')}}" class="form-control">
            @error('p_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group">
            <span>Price</span>
            <input type="text" name="p_price" value="{{old('p_price')}}" class="form-control">
            @error('p_price')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
            <span>Category</span>
            <select name="p_categories">
                <option value="">Select a Category</option>
                @foreach($Category as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
</select>
@error('p_categories')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            

            <div class="form-group">
            <span>Quantity</span>
            <input type="text" name="p_quantity" value="{{old('p_quantity')}}" class="form-control">
            @error('p_quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
            <span>Details</span>
            <input type="text" name="p_details" value="{{old('p_details')}}" class="form-control">
            @error('p_details')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <span>Image 1</span>
            <input type="file" name="P_img1" class="form-control"> 
            <span>Image 2</span>
            <input type="file" name="P_img2" class="form-control"> 
            <span>Image 3</span>
            <input type="file" name="P_img3" class="form-control"> 
        <div class="form-group">
        
        <input type="submit" class="btn btn-success" value="Add Product" ></li>
        </div>
    </form>

    @endsection