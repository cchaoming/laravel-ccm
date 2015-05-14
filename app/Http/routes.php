<?php
Route::get('/', 'MineController@index');

//Route::get('mine', 'MineController@index');

Route::get('home', 'HomeController@index');

//Route::controller('mine', 'MineController');

Route::resource('mine', 'MineController');


Route::controllers([
'auth' => 'Auth\AuthController',
'password' => 'Auth\PasswordController',
]);
