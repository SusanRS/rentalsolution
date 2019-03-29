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


Route::get('/admin/admindash', ['middleware' => 'admin' , function () {
    return view('admin.admindash');
}]);


Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');


Route::resource('/profile','UserController');

Route::resource('/property','PropertiesController');


Auth::routes();


//Route::get('/homeview', 'HomeviewController@index');

//Route::resource('/feedback','FeedbackController');

//Route::get('/feedback/index/{id}', 'FeedbackController@index');

Route::resource('owner', 'OwnerController');



Route::post('/search', 'SearchController@search');
Route::get('/book/{id}', 'BookingController@index');

Route::post('/book/{id}', 'BookingController@store');




