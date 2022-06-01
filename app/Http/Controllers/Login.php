<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class Login extends Controller
{
    public function index()
    {
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect('/home');
        }
        return view('welcome');
    }

    public function cek(Request $request)
    {

        if ($request->username == "admin" && $request->password == "admin" ){
            return redirect('/home');
        }else{
             return redirect('/');
        }
        // if(Auth::attempt($request->only('username','password'))){
        //     return redirect('/home');
        // }
        // return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
