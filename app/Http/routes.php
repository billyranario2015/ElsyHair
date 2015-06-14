<?php

Route::get('/', 'BaseController@index');

//Route::get('home', 'HomeController@index');

Route::get('/page/{page}','PageController@show');

//admin
Route::get('/app/dashboard', 'AdminController@index');

//products
Route::get('/app/products', 'AdminproductController@index');
Route::get('/app/product/add', 'AdminproductController@create');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
