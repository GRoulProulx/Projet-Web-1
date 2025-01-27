<?php
use App\Routes\Route;

use App\Controllers\HomeController;
use App\Controllers\RenterController;
use App\Controllers\UserController;
use App\Controllers\AuthController;

Route::get('', 'HomeController@index');


Route::get('/user/create', 'UserController@create');
Route::post('/user/create', 'UserController@store');

Route::get('/resetPassword', 'ResetPasswordController@index');
Route::get('/resetPassword', 'ResetPasswordController@index');

Route::get('/login', 'AuthController@index');
Route::post('/login', 'AuthController@store');
Route::get('/logout', 'AuthController@delete');




Route::dispatch();
?>