<?php

namespace App\Http\Controllers;

use App\checkincheckout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
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

    public function getcheckinCheckout(){
        return view('checkinCheckout');
    }
    public function postcheckin(Request $request){

        $checkin = new checkincheckout();
        date_default_timezone_set("Asia/tokyo");
        $checkout =DB::table('checkincheckout')->get();

        if('word_day' == date('Y-m-d')){
            echo"ban da checkin roi ";
        }
        else{
            $checkin ->staff =Auth::user()->username;
            $checkin->word_day =date('Y-m-d');
            $checkin->start_time=date('h:i:s');
            $checkin->save();
            return view('checkinCheckout');

        }

    }
    public function postcheckout(){

        date_default_timezone_set("Asia/tokyo");
        if('staff' == null and 'word_day'== null){
            echo"vui lam kiem tra lai ban chua checkin ";
        }
        else{
            $checkout =DB::table('checkincheckout') ->where([['staff','=',Auth::user()->username],
            ['word_day','=',date('Y-m-d')]]) ->update(['end_time' => date('h:i:s')]);
            return view('checkinCheckout');
        }


    }
}
