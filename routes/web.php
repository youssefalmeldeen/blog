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

Route::get('/', function () {
    return view('welcome');
});

	
Route::get('/home', function(){

return view('welcome');
} )->middleware('login');

Route::post('/login/home', 'Users@login_post');
Route::post('/register/home' ,'Users@insert_data');




Route::get('login', 'Users@login_get');

Route::get('/reset', 'Users@reset' );


Route::get('/reg', 'Users@register');

