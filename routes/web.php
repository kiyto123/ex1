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

Route::get('/', 'HomeController@index');

Route::get('/about', 'HomeController@about');

Route::get('/contact','HomeController@contact');

route::get('/index','UserController@index');

route::get('/User/create', 'UserController@create');

route::get('/User/{name}','UserController@Sname');

route::get('/User/{name}/{age}','UserController@SnameAge');
