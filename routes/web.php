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
Route::get('/','PostController@index');
Route::get('/about','PostController@about');
Route::get('/services','PostController@service');

Route::get('/qwerty', function () {
    return view('welcome');
});
Route::get('/qwert','SendbController@index');

Auth::routes();
Route::get('/send/{name}/{id}',function($name,$id){
    return ' senin adin '.$name.' yasin '.$id.' ';
});


// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/lost','LostController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
