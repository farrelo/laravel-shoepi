<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AuthController extends Controller
{
    public function getLogin(){
        return view('user.login');
    }

    public function postLogin(Request $request){

        $remember = $request->input('remember');
        
        if(\Auth::attempt(['email' => $request->email, 'password'=>$request->password], $remember)){
            return redirect()->route('home');
        }

        return redirect()->route('login');
    }

    public function getRegister(){
        return view('user.register');
    }

    public function postRegister(Request $request){

        $rules = [
            'name' => 'required|max:40',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|alpha_num|confirmed',
            'phone_num' => 'required|min:10|max:13',
        ];

        $validation = Validator::make($request->all(), $rules);
        if($validation->fails())return redirect()->back()->withErrors($validation);


        $user = new User; 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone_num = $request->phone_num;

        $user->save();
        return redirect()->route('home');

    }

    public function logOut(){
        auth()->logOut();
        return redirect()->route('login');
    }
}
