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


Route::get('home', ['as' => 'home', 'uses' => 'MainController@home']);

Route::get('nota/{labelName}', ['as' => 'classified.show', 'uses' => 'MainController@show']);

//Route::get('noticias/{kind_of_new}', ['as' => 'kind_of_new.show', 'uses' => 'MainController@show']);

//Prueba
Route::get('nota/{name}/{id}', ['as' => 'newcontent.show', 'uses' => 'NewController@index']);

//Publicidad Contenido
Route::get('publicidad', ['as' => 'publicity.index', 'uses' => 'PublicityController@index']);

Route::get('publicidad/crear', ['as' => 'publicity.create', 'uses' => 'PublicityController@create']);

Route::post('publicidad', ['as' => 'publicity.store', 'uses' => 'PublicityController@store']);

Route::get('publicidad/{id}/editar', ['as' => 'publicity.edit', 'uses' => 'PublicityController@edit']);

Route::put('publicidad/{id}', ['as' => 'publicity.update', 'uses' => 'PublicityController@update']);

Route::delete('publicidad/deshabilitar/{id}', ['as' => 'publicity.deshabilitar', 'uses' => 'PublicityController@deshabilitar']);

Route::delete('publicidad/habilitar/{id}', ['as' => 'publicity.habilitar', 'uses' => 'PublicityController@habilitar']);



//Label contenido
Route::get('etiquetas', ['as' => 'label.index', 'uses' => 'LabelController@index']);

Route::get('etiquetas/crear', ['as' => 'label.create', 'uses' => 'LabelController@create']);

Route::post('etiquetas', ['as' => 'label.store', 'uses' => 'LabelController@store']);

Route::get('etiquetas/{id}/editar', ['as' => 'label.edit', 'uses' => 'LabelController@edit']);

Route::put('etiquetas/{id}', ['as' => 'label.update', 'uses' => 'LabelController@update']);

Route::delete('etiquetas/deshabilitar/{id}', ['as' => 'label.deshabilitar', 'uses' => 'LabelController@deshabilitar']);

Route::delete('etiquetas/habilitar/{id}', ['as' => 'label.habilitar', 'uses' => 'LabelController@habilitar']);



//Users
Route::get('usuarios', ['as' => 'user.index', 'uses' => 'UserController@index']);

Route::get('usuarios/crear', ['as' => 'user.create', 'uses' => 'UserController@create']);

Route::post('usuarios', ['as' => 'user.store', 'uses' => 'UserController@store']);

Route::get('usuarios/{id}/editar', ['as' => 'user.edit', 'uses' => 'UserController@edit']);

Route::put('usuarios/{id}', ['as' => 'user.update', 'uses' => 'UserController@update']);


//News
Route::get('noticias', ['as' => 'new.index', 'uses' => 'AdminNewsController@index']);

Route::get('noticias/crear', ['as' => 'new.create', 'uses' => 'AdminNewsController@create']);

Route::post('noticias', ['as' => 'new.store', 'uses' => 'AdminNewsController@store']);

Route::get('noticias/{id}/editar', ['as' => 'new.edit', 'uses' => 'AdminNewsController@edit']);

Route::put('noticias/{id}', ['as' => 'new.update', 'uses' => 'AdminNewsController@update']);

Route::delete('noticias/deshabilitar/{id}', ['as' => 'new.deshabilitar', 'uses' => 'AdminNewsController@deshabilitar']);

Route::delete('etiquetas/habilitar/{id}', ['as' => 'new.habilitar', 'uses' => 'AdminNewsController@habilitar']);



//Route::get('login', ['as' => 'admin.index', 'uses' => 'AdminController@index']);


Route::get('login', 'Auth\LoginController@showLoginForm');

Route::post('login', 'Auth\LoginController@login');

Route::get('logout', 'Auth\LoginController@logout');