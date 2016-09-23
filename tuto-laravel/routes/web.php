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

Route::get('/', 'WelcomeController@index');


Route::get('article/{n}', 'ArticleController@show')->where('n', '[0-9]+');

Route::get('facture/{n}', function ($n){
	return view('facture')->with('numero', $n);
})->where('n', '[0-9]+');

Route::get('users', 'UsersController@getInfos');
Route::post('users', 'UsersController@postInfos');


Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');

Route::get('photo', 'PhotoController@getForm');
Route::post('photo', 'PhotoController@postForm');

Route::group(['middleware' => ['web']], function () {
    Route::get('sondage', 'SondageController@index');
    Route::get('sondage/create/{nom}', 'SondageController@create');
    Route::post('sondage/{nom}', 'SondageController@store');
});

