<?php

namespace App\Http\Controllers;

use App\dwork;
use App\inex;
use App\payment;
use App\workdetails;
use Illuminate\Http\Request;

class InexController extends Controller
{
    //
    public  function show($id){
        $value = dwork::find($id);
        $date = $value->date;
        $dsrid = $value->dsrid;
        $route = $value->route;
        $phn = $value->phone;

        $value1 = workdetails::where([
            ['dsrid', '=', $dsrid],
            ['date', '=', $date],
            ['route', '=', $route]
        ])->get();
        $c = 0;
        $total = 0;
        foreach ($value1 as $mal) {
            $t1 = $mal['price'] - ((double)$mal['unit'] * (double)$mal['return']);
            $total = $total + $t1;
        }
        $value2 = inex::where([
            ['dsrid', '=', $dsrid],
            ['date', '=', $date],
            ['route', '=', $route]
        ])->get();
        $total1=0;
        foreach ($value2 as $mal) {
            if($mal['type']=='Income'){
                $total1 = $total1+ $mal['amount'] ;
            }
            else{
                $total1 = $total1 - $mal['amount'] ;
            }

        }
        $value3 = payment::where([
            ['dsrid', '=', $dsrid],
            ['date', '=', $date],
            ['route', '=', $route]
        ])->get();
        $d = 0;
        $e=0;
        $total2=0;
        foreach ($value3 as $mal) {
            $total2 =$total2+ $mal['amount'];

        }



        return view('sheet',compact('value','total','total1','total2','value1','c','value2','d'));

    }



    public function returnlist()
    {
        $value = dwork::all();
        $c = 0;
        return view("return_list1", ["value" => $value, 'c' => $c]);
    }






}
