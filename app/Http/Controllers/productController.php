<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use phpDocumentor\Reflection\Types\Array_;

class productController extends Controller
{
    //
    public function ViewProduct(){
        $prod=Product::all();
        $arr=Array('prod'=>$prod);
        return view("product.view",$arr);
    }
    public function AddProduct(Request $request){
        if($request->isMethod('post')){
            $newProduct = new Product();
            $newProduct->name=$request->input('name');
            $newProduct->price=$request->input('price');
            $newProduct->save();
            return redirect("products");
        }else{
            return view("product.AddProduct");
        }

    }
    public function EditProduct(Request $request,$id){
        if($request->isMethod('post')){
            $newProduct = Product::find($id);
            $newProduct->name=$request->input('name');
            $newProduct->price=$request->input('price');
            $newProduct->save();
            return redirect('products');
        }else{
            $p=Product::find($id);
            $arr=Array('p'=>$p);
            return view("product.edit",$arr);
        }

    }
}
