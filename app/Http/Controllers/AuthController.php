<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
       }

       public function welcome(){
        return view('selamatdatang');
       }

       public function welcome_post(Request $request){
        //    dd($request->all());
        // $name = $request["nama_awal"];
        // return view('selamatdatang', "$name");
        return view('selamatdatang');
        // return "$name";
       }

}
