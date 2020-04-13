<?php

namespace App\Http\Controllers;

use App\dsr;
use App\dwork;
use App\group;
use App\product;
use App\workdetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DworkController extends Controller
{
    //
    public function getdata(){
        $name=dsr::all();
        return view('work',compact('name'));
    }
    public function submitdata(Request $request){
        session_start();

        $date= $request->input('date');
        $name = $request ->input('selectdsr');



        $_SESSION['date']=$request->input("date");
        $_SESSION['name']=$request->input("selectdsr");
        $_SESSION['rute']=$request->input("rute");
        $value= dwork::where([
            ['date','=',$date],
            ['name','=',$name],
            ['route','=',$_SESSION['rute']]
        ])->get();
        $count= count($value);
        if($count==0){
            $name= new dwork();
            $name->date=$request->input("date");
            $name->name=$request->input("selectdsr");
            $name->route=$request->input("rute");

            $name1= dsr::where('name','=', $_SESSION['name'])->get();
            foreach ($name1 as $item) {
                $_SESSION['id']=$item['id'];
                $_SESSION['phone']=$item['phone'];
            }
            $name->phone= $_SESSION['phone'];
            $name->dsrid= $_SESSION['id'];

            $name->save();


        }





        $name= dsr::where('name','=', $_SESSION['name'])->get();
        foreach ($name as $item) {
            $_SESSION['id']=$item['id'];
            $_SESSION['phone']=$item['phone'];
        }






        return redirect("/workhistory");
    }
    public function workhistory(){
        session_start();

        $name=group::all();

        $date=$_SESSION['date'];
        $id=  $_SESSION['id'];
        $route =$_SESSION['rute'];
        $value= workdetails::where([
            ['date','=',$date],
            ['dsrid','=',$id],
            ['route','=',$route]


        ])->get();
        $c=0;

        return view('d_work',compact('name','value','c'));

    }

    public function get(){
        $group = $_GET['group'];
        $data=" <option selected >Choose...</option>";

        $wordlist = product::where('groupName', '=', $group)->get();
        foreach ($wordlist as $word){
            $data.="<option value=".$word['id']." >".$word['productName']."</option>";

        }
        echo $data;

    }




}
