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

Route::get('myservices/{name}/{price}/{status}',function($name,$price,$status){
    $data['name']=$name;
    $data['price']=$price;
    $data['status']=$status;
    return view('services',$data);
});





