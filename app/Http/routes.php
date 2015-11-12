<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::get('/', function () {
    return view('welcome');
});


Route::get('welcome','welcomeController@index');

Route::get('contact','welcomeController@contact');

Route::get('about','PageController@about');

Route::get('duplicate/{id}','ArticleController@duplicate');

/*
Route::get('articles','ArticleController@index');

Route::get('articles/create',['middleware'=>'auth','uses'=>'ArticleController@create']);

Route::get('articles/{id}','ArticleController@show');

Route::post('articles','ArticleController@store');

*/
Route::resource('articles','ArticleController');


Route::controllers([
    'auth'=>'Auth\AuthController',
    'password'=>'Auth\PasswordController',
]);



