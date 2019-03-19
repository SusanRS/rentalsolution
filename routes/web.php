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



// Route::get('/property', function () {
//     return view('home');
// });
Route::get('profile','UserController@profile');
Route::post('profile','UserController@updatepp');





Route::get('/property','PropertiesController@index')->name('property.index');
Route::get('/property/create','PropertiesController@create') -> name('property.create');

Route::post('/property','PropertiesController@store')->name("property.store");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('profile','UserController@profile');
Route::post('profile','UserController@updatepp');