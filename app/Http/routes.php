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
Route::get('/',['as'=>'homepage','uses'=>'Website\WebsiteController@index']);
Route::get('/get_theme',['as'=>'get_theme','uses'=>'Website\WebsiteController@theme_home']);
/*Route::get('/', function () {
    return view('welcome');
});*/
