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

Route::get('myservices/{name}/{price}/{status}',[App\Http\Controllers\ServicesController::class,'index']);

Route::get('services/{name}',[App\Http\Controllers\ServicesController::class,'getServiceName']);

Route::get('/Products',[App\Http\Controllers\ProductsController::class,'getProducts']);

Route::get('/form/open',[App\Http\Controllers\FormsController::class,'openForm']);

Route::post('/form/submit',[App\Http\Controllers\FormsController::class,'submitForm']);

Route::post('file/storage',[App\Http\Controllers\StorageController::class,'uploadFile']);

Route::view('upload-file','storage');