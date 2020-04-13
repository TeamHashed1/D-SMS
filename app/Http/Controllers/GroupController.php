<?php

namespace App\Http\Controllers;

use App\group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    //
    public function getinfo(){
        $groupname=group::all();
        $c=0;
        return view('group',compact('groupname','c'));
    }
    public function submitname(Request $request){
        $groupname= new group();
        $groupname->name=$request->input('gname');
        $groupname->save();
        return redirect("/group")->with('success','Group Name is added successfully!');
    }
    public function deleteinfo($id){
        $groupname=group::find($id);
        $groupname->delete();
        return redirect("/group")->with('success','Group Name is Deleted successfully!');


    }
}
