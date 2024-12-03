<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gamecategory;

class GamesCategoryController extends Controller
{
    //
    public function gamescategory(){
        return view('admin.pages.gamescategory');
    }
    public function gamescategorylists(){
        $gamecategory = gamecategory::all();
        return view('admin.pages.viewgamescategory', compact('gamecategory'));
    }
    public function addgamescategory(Request $request){
        $request->validate([
            'gamescategory'=>'required'
        ]);
        $gamecategory = new gamecategory();
        $gamecategory->gamescategory = $request->gamescategory;
        $gamecategory->save();
        return redirect()->back()->with('message','Category Added Successfully');
    }
    public function deletegamescategory($id){
        $gamecategory = gamecategory::find($id);
        $gamecategory->delete();
        return redirect()->back()->with('message','Category Deleted Successfully');
    }
}
