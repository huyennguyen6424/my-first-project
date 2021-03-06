<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
// Add Email Route Verification
//Auth::routes(['verify' => true]);


Route::get('/', function () {
    return view('welcome');
});

Route::get('test',function(){
        $details['email'] = 'your_email@gmail.com';
    dispatch(new App\Jobs\SendEmailJob($details));
    dd('done');
});
Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');
