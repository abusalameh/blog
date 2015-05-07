<?php

Route::get('home','HomeController@index');
Route::get('/','PostsController@index');
Route::get('save','PostsController@save');
Route::get('yazan.falah','PostsController@yazan');
Route::get('bootstrap','PostsController@boot');
Route::get('add.post','PostsController@addPost');
Route::get('func','PostsController@func');
Route::get('naser','PostsController@naser');
Route::get('yazan.sammoudi','PostsController@sam');
Route::get('select','PostsController@selMenu');
Route::get('naji','PostsController@naji');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
