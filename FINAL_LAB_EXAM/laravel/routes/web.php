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
Route::get('/login','loginController@index');
Route::post('/login','loginController@verify');

Route::get('/home','homeController@index')->name('home.index');

Route::get('/create','homeController@create')->name('home.create');
Route::post('/create','homeController@add');
Route::get('/edit/{id}','homeController@edit')->name('home.edit');
Route::get('/delete/{id}','homeController@delete')->name('home.delete');
Route::post('/delete/{id}','homeController@deletepost');
Route::get('/userlist','homeController@userlist')->name('home.userlist');

Route::get('/employee','employeeController@index');
Route::get('/addproduct','employeeController@addproduct');
Route::post('/addproduct','employeeController@store');
Route::get('/productlist','employeeController@productlist');


Route::get('/logout', 'logoutController@index');