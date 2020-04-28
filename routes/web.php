<?php

use App\checkincheckout;
use App\Http\Controllers\checkinCheckoutController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});



Route::get('/login','LoginController@getlogin');

Route::post('/login','LoginController@postlogin');

Route::get('/checkinCheckout','AdminController@getcheckinCheckout');

Route::post('/checkin', 'AdminController@postcheckin');

Route::post('/checkout', 'AdminController@postcheckout' );

// Route::get('/model', function(){
//         $checkin = new checkincheckout();
//         $checkin->id_staff="hoangvuong";
//         $checkin->word_day=date('Y-m-d');
//         $checkin->start_time=date('h:i:s');
//         $checkin->save();
//         echo "da save thanh cong";
// });

