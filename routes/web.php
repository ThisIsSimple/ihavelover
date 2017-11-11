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
    return redirect('/home');
});

Route::get('/home', function() {
    return view('main/main');
});

Route::get('/about', function() {
    return view('main/about');
});

Route::get('/features', function() {
    return view('main/features');
});



Route::get('/services', 'ServicesController@index');
Route::get('/services/manage', 'ServicesController@manage');
Route::get('/services/food', 'ServicesController@food');
Route::post('/services/food', 'ServicesController@food');



Route::get('services/manage/input', 'ServicesController@manageInput');
Route::get('services/manage/output', 'ServicesController@manageOutput');
