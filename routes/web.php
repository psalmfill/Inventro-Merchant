<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function(){
    return view('index');
});
Route::get('/staffs',function(){
    return view('staffs');
})->name('staffs');
Route::get('/login',function(){
    return view('login');
})->name('login');
Route::get('/sales',function(){
    return view('sales');
})->name('sales');
Route::get('/debits-credits',function(){
    return view('debits_credits');
})->name('debits.credits');
Route::get('/customers',function(){
    return view('customers');
})->name('customers');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
