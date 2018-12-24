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

Route::get('/','PublicController@index');
Route::get('/secciongeneral','PublicController@secciongeneral');
//Route::view('/', 'welcome');
Route::view('/start','start');
Route::get('beach-destinations/{beachdestination}', function ($beachdestination){
    return 'Beach Destination: '.$beachdestination;
});
Route::get('beach-resorts/{beachresort}', 'PublicController@beachresorts');

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/start', function () {
    return view('start');
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
