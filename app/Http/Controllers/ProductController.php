<?php

namespace App\Http\Controllers;

use App\group;
use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function getdata(){
        $groupname=group::all();
        $products= product::all();
        $c=0;
        return view("products",compact('groupname','products','c'));
    }
    public function submitdata(Request $request){
        $product=new product();
        $product->groupName=$request->input('selectgroup');
        $product->productName=$request->input('name');
        $product->unit=$request->input('selectunit');
        $product->price=$request->input('price');
        $product->save();
        return redirect('/product')->with('success','Product is added successfully!');



    }
    public function deleteinfo($id){
        $product=product::find($id);
        $product->delete();
        return redirect('/product')->with('success','Product is deleted successfully!');
    }
}
