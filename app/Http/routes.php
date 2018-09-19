<?php

// Page-Routes
Route::get('/', 'Page\HomeController@index');
Route::post('/save_inscription', 'Page\HomeController@save_inscription');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');

// Admin-Routes
Route::get('admin', 'Admin\AdminController@index');
Route::get('admin/administradores', 'Admin\AdminController@administradores');
Route::get('admin/inscripciones', 'Admin\InscripcionesController@index');
Route::post('admin/inscripciones/eliminar/{id}', 'Admin\InscripcionesController@destroy');