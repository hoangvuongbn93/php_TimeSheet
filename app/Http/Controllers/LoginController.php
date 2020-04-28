<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function getlogin(){
        return view('login');
    }
    public function postlogin(Request $request ){
      $credentials = $request->only('username','password');

      if(Auth::attempt($credentials)){
          return view('home');
      }else{
          return redirect('login')->withErrors(' User account or password is incorrect');
      }
      return $request->all();
}
}
