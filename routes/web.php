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
    return view('User.home');
});
// Route::get('/users',function(){
//     return view('user');
// });
Route::resource('/users','UserController');



Route::post('/users/{id}', 'ImageController@store');
// Route::get('/storage/{photo}', 'ImageController@show')->name('display');

// Route::get('/','boissonController@index');
// Route::get('/boissons/{boisson}','boissonController@show');
// Route::post('/add_boisson/create','boissonController@store');
// Route::get('/add_boisson','boissonController@create');
// Route::delete('/delete/{boisson}','boissonController@destroy')->name('deletephoto');
// Route::get('/edit/{boisson}','boissonController@edit')->name('editphoto');
// Route::put('/update/{boisson}','boissonController@update')->name('update');
