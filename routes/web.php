<?php
use App\Routes\Route;

use App\Controllers\HomeController;
use App\Controllers\RenterController;
use App\Controllers\UserController;
use App\Controllers\AuthController;
/* Accueil */
Route::get('', 'HomeController@index');
Route::get('/home', 'HomeController@index');

/* Création de compte Utilisateur */
Route::get('/user/create', 'UserController@create');
Route::post('/user/create', 'UserController@store');

/* Création de timbre */
Route::get('/stamp/create', 'StampController@create');
Route::post('/stamp/create', 'StampController@store');

/* Catalogue des timbres */
Route::get('/products', 'ProductController@index');
Route::post('/products', 'ProductController@index');

/* Fiche produits */
Route::get('/productdetails', 'ProductController@productdetails');
Route::post('/productdetails', 'ProductController@productdetails');  /* <--- */

/* Authentification Utilisateur */
Route::get('/login', 'AuthController@index');
Route::post('/login', 'AuthController@store');
Route::get('/logout', 'AuthController@delete');

/* Réinitialisation mot de passe */
Route::get('/reset', 'AuthController@resetPassword'); // Reset password.
Route::post('/reset', 'AuthController@resetStore');

Route::dispatch();
?>