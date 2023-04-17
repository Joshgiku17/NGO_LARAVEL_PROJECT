<?php

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

Route::get('/', function () {
    $userInfo = DB::table('user')->get();
    // return $userInfo; //returns a json 
    return view('welcome', compact('userInfo'));
});
Route::get('/userInfo/{userName}',function($id){
    $userName= DB::table('user')->find($id);
    dd($userName);
    return view('welcome', compact('userInfo'));
    //the web url is 8080/userinfo/idNum to check the json using the id
}

);
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/signup', function () {
//     return view('signup');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });