<?php
use App\Routes\Route;

use App\Controllers\HomeController;
use App\Controllers\RenterController;
use App\Controllers\UserController;
use App\Controllers\AuthController;

Route::get('', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::get('/user/create', 'UserController@create');
Route::post('/user/create', 'UserController@store');

Route::get('/stamp/create', 'StampController@create');
Route::post('/stamp/create', 'StampController@store');

Route::get('/login', 'AuthController@index');
Route::post('/login', 'AuthController@store');
Route::get('/logout', 'AuthController@delete');

Route::get('/reset', 'AuthController@resetPassword'); // Reset password.
Route::post('/reset', 'AuthController@resetStore');

Route::dispatch();
?>