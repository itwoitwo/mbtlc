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

Route::get('/', 'CombosController@index');

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');
Route::resource('users', 'UsersController', ['only' => ['show']]);

Route::resource('combos', 'CombosController', ['only' => ['store', 'destroy']]);
Route::get('combo_post', 'CombosController@combo_post')->name('combo_post');

Route::group(['prefix' => 'users/{id}'], function () {
    Route::get('favorites', 'UsersController@favorites')->name('users.favorites');
});

Route::group(['prefix' => 'combos/{id}'], function () {
    Route::post('favorite', 'FavoritesController@store')->name('favorites.favorite');
    Route::delete('unfavorite', 'FavoritesController@destroy')->name('favorites.unfavorite');
});