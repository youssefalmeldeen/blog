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

// get login page
Route::get('login', 'Users@login_get');
Route::post('login', 'Users@login_post')->name('users.postLogin');

Route::get('/reg', 'Users@register');
Route::post('/test' ,'Users@insert_data');

