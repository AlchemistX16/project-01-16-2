<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Image;

class ProductController extends Controller
{
    public function index(){
        $product = product::orderBy('product_id','desc')->Paginate(5);
        return view('backend.product.index',compact('product'));
    }

    public function create(){
        return view('backend.product.create');
    }

    public function insert(Request $request){
        $pro = new Product();
        $pro->name = $request->name;
        $pro->price = $request->price;
        $pro->description = $request->description;
        $pro->category_id = $request->category_id;
    if($request->hasFile('image')){
            $filename = Str::random(10). '.' .$request->file('image')->getClientOriginalExtension();$request->file('image')->move(public_path().'/backend/product/', $filename); 
            Image::make(public_path().'/backend/product/'.$filename)->resize(200,200)->save(public_path().'/backend/product/resize/'.$filename);
            
            $pro->image = $filename;
        }else{
            $pro->image = "ไม่มีรูปภาพ";
        }
        $pro->save();
        return redirect('admin/product/index');
    }
}
