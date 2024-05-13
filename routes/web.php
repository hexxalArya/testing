<?php

use Illuminate\Http\Request;
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
    return view('welcome');
});
Route::get('/hello', function () {
    return 'Hello World';
});
Route::view('/hello', 'hello');

Route::get('/coba{id}', function (string $id) {
    return view('coba', ['id'=> $id]);
});
Route::view('/biodata', 'biodata');

Route::post('/biodata',function(Request $request){
    $output = "Nama: $request->nama. <br>
             Email:  $request->email. <br>
             No. Hp: $request->no_hp.";
    return $output;
});