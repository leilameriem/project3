<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front;
use App\Http\Controllers\BackEnd\Customers\CustomersController;
use App\Http\Controllers\FrontEnd\User\NewsController;

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

Route::get('/user', function () {
    return view('welcome')->with('data',3);
});
 
 Route::get('/', function () {
    return view('layouts.main');
});
    

//Route::namespace('Customers')->group(function(){
//	Route::get('/add_customer',[CustomersController::class,'add_customer']);

//});

//Route::prefix('admin1')->group(function(){
//	Route::get('/add_customer',[CustomersController::class,'add_customer']);
//});


Route::group(['prefix'=>'{leila}','namespace'=>'Customers'],function(){
		Route::get('/add_customer',[CustomersController::class,'add_customer']);
});


Route::prefix('leila1')->group(function () {
Route::get('/add_customer',[CustomersController::class,'add_customer']);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');










//Route::namespace('User')->group(function(){
	//Route::get('/news1',[NewsController::class,'index']);
   //Route::resource('news1', 'NewsController');





//});