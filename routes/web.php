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

Route::get('/role-register', 'Admin\DashboardController@registered');

Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');

Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');

Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');

Route::get('categorie','CategorieController@index')->name('categorie');
Route::get('categorie/destroy/{id}','CategorieController@destroy');

Route::resource('categorie','CategorieController');

Route::get('item/destroy/{id}','ItemController@destroy');
Route::resource('item', 'ItemController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


