<?php

namespace App\Http\Controllers;

use App\dsr;
use App\dwork;
use App\workdetails;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //\
    public function getdata(){
        $value= dsr::all();
        $count=count($value);
        $value2= dwork::all();
        $count1=count($value2);

        $value1 = workdetails::all();
$total=0;
        foreach ($value1 as $mal) {
            $t1 = $mal['price'] - ((double)$mal['unit'] * (double)$mal['return']);
            $total = $total + $t1;
        }


        return view('index',compact('count','count1','total'));
    }
}
