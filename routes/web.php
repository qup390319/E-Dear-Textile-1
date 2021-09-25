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

Route::get('/', 'LoginController@get_login_page')->name('get_login');
Route::post('/login', 'LoginController@post_login')->name('post_login');

Route::get('/menu', 'MenuController@get_menu')->name('get_menu');
Route::get('/menu/addSheet', 'MenuController@get_addSheet')->name('get_addSheet');
Route::post('/menu/addSheet/post', 'MenuController@post_addSheet')->name('post_addSheet');
