<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function registration(){
        return view('front.pages.registration');
    }

    public function loginuser(){
        return view('front.pages.login');
    }

    public function postregistration(Request $request){
        $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6,max:20'
        ]);
        User::create([
            'name'=>$request->name,
            'surname'=>$request->surname,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
            return redirect()->route('user.login');
    }

    public function postlogin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6,max:20'
        ]);
        $credentials=$request->only(['email','password']);
            $check=Auth::attempt($credentials);
            if(!$check)
             {
                return redirect()->back()->with(['success','your email and password are incorrect']);
             }
              return redirect() ->route('Index')->with('success','successfull');
        }
        public function logout(){
            Auth::logout();
            return redirect()->route('user.login');
        }

        public function edit(Request $request){
          $id=$request->id;
          $data=User::find($id);
          return view('front.pages.updateprofile', compact('data'));
        }
        public function update(Request $request, $id){
            $data=User::find($id);
            $data->name=$request->name;
            $data->surname=$request->surname;
            $data->phonenumber=$request->phonenumber;
            $data->age=$request->age;
            $data->city=$request->city;
            $data->update();
            if($data){
            $data->update();
            return redirect()->route('user.profile');
        }
        else{
            return redirect()->back;
        }
    }
}
