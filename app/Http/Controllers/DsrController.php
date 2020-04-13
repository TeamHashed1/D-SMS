<?php

namespace App\Http\Controllers;

use App\dsr;
use App\product;
use Illuminate\Http\Request;

class DsrController extends Controller
{
    //
    public function getdata(){
        $groupname=dsr::all();
        $c=0;
        return view("dsr",compact('groupname','c'));
    }
    public function submitdata(Request $request){
        $product=new dsr();
        $product->name=$request->input('name');
        $product->phone=$request->input('phone');
        $product->address=$request->input('address');
        $product->save();
        return redirect('/dsr')->with('success','DSR is added successfully!');



    }
    public function deleteinfo($id){
        $product=dsr::find($id);
        $product->delete();
        return redirect('/dsr')->with('success','DSR is deleted successfully!');
    }
}
