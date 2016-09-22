<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('article/{n}', function ($n){
	return view('article')->with('numero', $n);
})->where('n', '[0-9]+');

Route::get('facture/{n}', function ($n){
	return view('facture')->with('numero', $n);
})->where('n', '[0-9]+');