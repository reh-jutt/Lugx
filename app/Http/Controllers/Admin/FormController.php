<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\form;
use Illuminate\Http\Request;
use App\Http\Requests\formgetRequest;
use Hash;

class FormController extends Controller
{
    //
    public function adminpostform(formgetrequest $request){

        $form =new form();
        $form->username=$request->username;
        $form->email=$request->email;
        $form->password=Hash::make($request->password);
        $form->confirmpassword=Hash::make($request->confirmpassword);


        $form->save();


        if($request->hasfile('image')){
            $imageName = time().'.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $form->image=$imageName;
        }
            $form->save();
        return redirect()->back();
    }

    public function admintable(){
        $formrequests =form::all();
        return view('admin.pages.table', ['formrequests' => $formrequests]);
    }
    public function admindelete($id){
        $form=form::find($id);
        $form->delete();
        return redirect()->back()->with('success','Form deleted successfully');;
    }
    public function adminedit($id){
        $form=form::find($id);
        return view('admin.pages.edit-form',compact('form'));
    }
    public function adminupdate(formgetrequest $request,$id){
        $form=form::find($id);
        $form->username=$request->username;
        $form->email=$request->email;
        $form->password=Hash::make($request->password);
        $form->confirmpassword=Hash::make($request->confirmpassword);
        $data=$form->update();
        if($data){
            return redirect()->route('admin.table');
        }
        else{
            return redirect()->back();
        }
    }
}
