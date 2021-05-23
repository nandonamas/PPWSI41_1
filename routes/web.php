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
    return view('welcome');
});

//menerima data/parameter dan menampilkannya di view
Route::get("/kenalan/{nama}/{npm}",function($nama,$npm){
    $data = ['nama'=>$nama,'npm' => $npm];
    return view("hallo",$data );
});