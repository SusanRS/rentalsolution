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

Route::get('/admin', function()
{
	return view('admin.admindash');
});


Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

//route to user profile
Route::resource('/profile','UserController');

//authoriaztions routes
Auth::routes();

//route for owner
Route::resource('owner', 'OwnerController');


Route::resource('property', 'PropertyController');
Route::resource('/image', 'ImageController');
Route::post('/report/{id}', 'ReportController@store');
//Route::resource('/report/{id}', 'ReportController');

Route::get('property/{id}/book', 'BookingController@create');
Route::post('/book/{id}', 'BookingController@store');

Route::resource('booking', 'BookingController');



