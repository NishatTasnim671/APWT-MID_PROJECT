<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Category;
use App\Models\Product;


class ProductController extends Controller
{
    //
    function product()
    {
       
        $Product=Product::all();
        return view('Staff.Product.list')->with('Product',$Product);
    }
    function addproduct()
    {
        $Category=Category::all();
        return view('Staff.Product.Add')->with('Category',$Category);
    }

    function insertproduct(Request $request)
    {
        $this->validate(
            $request,
            [
                'p_id'=>'required',
                'p_name'=>'required|min:5|max:30',
                'p_price'=>'required|min:2|max:10',
                'p_categories'=>'required',
                'p_quantity'=>'required|min:1',
                'p_details'=>'required|min:10|max:30'

                
                


            ],
            [
                'p_id.required'=>'Please Enter Product id',
                'p_name.required'=>'Please Enter Product Name',
                'p_name.min'=>'Product name must be greater than 5 charcters',
                'p_name.max'=>'Product name must be smaller than 30 charcters',
                'p_price.required'=>'Please Enter Product price',
                'p_price.min'=>'Product price must be greater than 2 charcters',
                'p_price.max'=>'Product price must be smaller than 10 charcters',
                'p_categories.required'=>'Please Enter the category',
                'p_quantity.required'=>'Please Enter Product quantity',
                'p_details.required'=>'Please Enter Product detail',
                'p_details.min'=>'Product details must be greater than 10 charcters',
                'p_details.max'=>'Product details must be smaller than 30 charcters'
               
                



    
    
            ]
        );
        $var = new Product();
        if($request->hasFile('P_img1'))
        {
            $file=$request->file('P_img1');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('assets/uploads/product/image1/',$filename);
            $var->P_img1=$filename;
        }
        if($request->hasFile('P_img2'))
        {
            $file1=$request->file('P_img2');
            $ext1=$file1->getClientOriginalExtension();
            $filename1=time().'.'.$ext;
            $file1->move('assets/uploads/product/image2/',$filename1);
            $var->P_img2=$filename1;
        }
        if($request->hasFile('P_img3'))
        {
            $file2=$request->file('P_img3');
            $ext2=$file2->getClientOriginalExtension();
            $filename2=time().'.'.$ext;
            $file2->move('assets/uploads/product/image3/',$filename2);
            $var->P_img3=$filename2;
        }
        $var->P_id= $request->p_id;
        $var->P_name= $request->p_name;
        $var->P_price= $request->p_price;
        $var->P_categories= $request->p_categories;
        $var->P_quantity= $request->p_quantity;
        $var->P_details= $request->p_details;
       
     
        
       
        $var->save();
    

        return redirect()->route('product');
    
      
    }
    function edit(Request $request)
    {
        $id = $request->id;
        $Product = Product::where('id',$id)->first();
        return view('Staff.Product.Edit')->with('pro', $Product);
    }
    function editSubmit(Request $request){

        $this->validate(
            $request,
            [
                
                'p_id'=>'required',
                'p_name'=>'required|min:5|max:30',
                'p_price'=>'required|min:2|max:10',
                'p_quantity'=>'required|min:1',
                'p_details'=>'required|min:10|max:30'
                


            ],
            [
                
                'p_id.required'=>'Please Enter Product id',
                'p_name.required'=>'Please Enter Product Name',
                'p_name.min'=>'Product name must be greater than 5 charcters',
                'p_name.max'=>'Product name must be smaller than 30 charcters',
                'p_price.required'=>'Please Enter Product price',
                'p_price.min'=>'Product price must be greater than 2 charcters',
                'p_price.max'=>'Product price must be smaller than 10 charcters',
                'p_quantity.required'=>'Please Enter Product quantity',
                'p_details.required'=>'Please Enter Product detail',
                'p_details.min'=>'Product details must be greater than 10 charcters',
                'p_details.max'=>'Product details must be smaller than 30 charcters'
               
            ]
        );
        $var = Product::where('id',$request->id)->first();
        if($request->hasFile('P_img1'))
        {
            $path='assests/uploads/product/image1/'.$var->P_img1;
            if(File::exists($path))
            {
               File::delete($path);
            }
            $file=$request->file('P_img1');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('assets/uploads/product/image1/',$filename);
            $var->P_img1=$filename;
        }
        if($request->hasFile('P_img2'))
        {
            $path1='assests/uploads/product/image2/'.$var->P_img2;
            if(File::exists($path1))
            {
               File::delete($path1);
            }
            $file1=$request->file('P_img2');
            $ext1=$file1->getClientOriginalExtension();
            $filename1=time().'.'.$ext1;
            $file1->move('assets/uploads/product/image2/',$filename1);
            $var->P_img2=$filename1;
        }
        if($request->hasFile('P_img3'))
        {
            $path2='assests/uploads/product/image3/'.$var->P_img3;
            if(File::exists($path2))
            {
               File::delete($path2);
            }
            $file2=$request->file('P_img3');
            $ext2=$file2->getClientOriginalExtension();
            $filename2=time().'.'.$ext2;
            $file2->move('assets/uploads/product/image3/',$filename2);
            $var->P_img3=$filename2;
        }
        $var->P_id= $request->p_id;
        $var->P_name= $request->p_name;
        $var->P_price= $request->p_price;
        $var->P_quantity= $request->p_quantity;
        $var->P_details= $request->p_details;
       
       
       
     
        
       
        $var->save();
    

        return redirect()->route('product');
    
      
    }

    public function delete(Request $request){
        $var = Product::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('product');

    }

    }

    

