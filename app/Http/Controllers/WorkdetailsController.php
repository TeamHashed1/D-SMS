<?php

namespace App\Http\Controllers;

use App\dwork;
use App\inex;
use App\payment;
use App\product;
use App\workdetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Session;

class WorkdetailsController extends Controller
{
    //
    public function getdata()
    {
        return view('work');
    }


    public function dsrwork(Request $request)
    {
        session_start();
        $nn= $request->productname;
        $productname = product::where('id', '=',$nn)->get();
       /* dd($nn);*/
        $quantity = $request->input('quantity');
        $quantity = (double)$quantity;
        foreach ($productname as $p) {
            $pr = $p['price'];
            $un = $p['unit'];
            $name= $p['productName'];
        }
        $tprice = $quantity * (double)$pr;
        $work = new workdetails();
        $work->dsrid = $_SESSION['id'];
        $work->date = $_SESSION['date'];
        $work->name = $_SESSION['name'];
        $work->route = $_SESSION['rute'];
        $work->phone = $_SESSION['phone'];
        $work->gname = $request->input('selectgroup');
        $work->pname = $name;
        $work->quantity = $quantity . " " . $un;
        $work->quantity1 = $quantity;
        $work->unit = $pr;
        $work->price = $tprice;
        $work->return = 0;
        $work->returnam = 0;
        $work->save();
        return redirect('/workhistory')->with('success', 'Daily Product is added successfully!');
    }

    public function deleteinfo($id)
    {
        $name = workdetails::find($id);
        $name->delete();
        return redirect('/workhistory');

    }

    public function returnlist()
    {
        $value = dwork::all();
        $c = 0;
        return view("return_list", ["value" => $value, 'c' => $c]);
    }

    public function returnlist1($id)
    {
        session_start();
        $_SESSION['new'] = $id;
        $value = dwork::find($id);
        $date = $value->date;
        $dsrid = $value->dsrid;
        $route = $value->route;

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

        return view('u_work1', compact('value1', 'c', 'total', 'value2', 'd','value3','e','total2','total1'));


    }

    public function listadd(Request $request)
    {

        $name = $request->input('item1');
        $name1 = $request->input('item_unit');
        $id = $request->input('id');
        $count = count($name);
        if ($name1 != null) {
            $count1 = count($name1);
        } else {
            $count1 = 0;
        }

        $name2 = $request->input('item_quantity');
        $name3 = $request->input('item_');


        for ($i = 0; $i < $count; $i++) {
            $value1 = workdetails::find($id[$i]);
            $pname = $value1['pname'];
            $value2 = product::where(
                [['productName', '=', $pname]]
            )->get();
            foreach ($value2 as $val) {
                $un = $val->unit;
            }
            $value1->returnam = $name[$i] . " " . $un;
            $value1->return = $name[$i];
            /*            $total= $value1['price'];
                        $value1->price =$total-((double)$value1['unit']*$name[$i]);*/
            $value1->save();

        }
        for ($i = 0; $i < $count1; $i++) {
            $value1 = workdetails::find($id[1]);
            $value3 = new inex();
            $value3->dsrid = $value1->dsrid;
            $value3->date = $value1->date;
            $value3->route = $value1->route;
            $value3->type = $name1[$i];
            $value3->purpase = $name2[$i];
            $value3->amount = $name3[$i];
            $value3->save();

        }





        session_start();

        return redirect('/returnlist/' . $_SESSION['new']);

    }

    public function pay(Request $request)
    {
        session_start();

        $value = dwork::find($_SESSION['new']);
        $date = $value->date;
        $dsrid = $value->dsrid;
        $route = $value->route;

        $pay = new payment();
        $pay->dsrid=$dsrid;
        $pay->route=$route;
        $pay->date=$date;
        $pay->date1=$request->input('date');
        $pay->amount=$request->input('amount');
        $pay->save();
        return redirect('/returnlist/' . $_SESSION['new']);


    }
    public function paydel($id){
        session_start();

        $value= payment::find($id);
        $value->delete();

        return redirect('/returnlist/' . $_SESSION['new']);


    }
    public function indel($id){
        session_start();

        $value= inex::find($id);
        $value->delete();

        return redirect('/returnlist/' . $_SESSION['new']);


    }


}
