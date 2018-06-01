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

Route::get('test', function(){
	$user = new radioyaravi\User;
	$user->name = 'Diego';
	$user->email = 'dijaq089@gmail.com';
	$user->password = bcrypt('123456');
	$user->idRole = 1;
	$user->estado = 2;
	$user->save();

	$role = new radioyaravi\Role;
	$role->name = 'admin';
	$role->displayName = 'Administrador';
	$role->description = 'Encargado de administrar el sitio web';
	$role->estado = 2;
	$role->save();

	$role = new radioyaravi\Prioridad;
	$role->name = 'Principal';
	$role->estado = 2;
	$role->save();

	$role = new radioyaravi\Prioridad;
	$role->name = 'Secundaria';
	$role->estado = 2;
	$role->save();

	$role = new radioyaravi\Prioridad;
	$role->name = 'Sin Prioridad';
	$role->estado = 2;
	$role->save();

	$label = new radioyaravi\Label;
	$label->name = 'Politica';
	$label->color = '#690';
	$label->estado = 2;
	$label->save();
});

Route::get('/', ['as' => 'home', 'uses' => 'MainController@home']);

Route::get('nota/{labelName}', ['as' => 'classified.show', 'uses' => 'MainController@show']);

Route::get('empresarial/{id}', ['as' => 'empresarial.detail', 'uses' => 'MainController@empresarialDetail']);

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

//Route::delete('etiquetas/habilitar/{id}', ['as' => 'new.habilitar', 'uses' => 'AdminNewsController@habilitar']);


Route::get('empresariales', ['as' => 'empresarial.index', 'uses' => 'EmpresarialController@index']);

Route::get('empresariales/crear', ['as' => 'empresarial.create', 'uses' => 'EmpresarialController@create']);

Route::post('empresariales', ['as' => 'empresarial.store', 'uses' => 'EmpresarialController@store']);

Route::get('empresariales/{id}/editar', ['as' => 'empresarial.edit', 'uses' => 'EmpresarialController@edit']);

Route::put('empresariales/{id}', ['as' => 'empresarial.update', 'uses' => 'EmpresarialController@update']);

Route::delete('empresariales/deshabilitar/{id}', ['as' => 'empresarial.deshabilitar', 'uses' => 'EmpresarialController@deshabilitar']);

Route::delete('empresariales/habilitar/{id}', ['as' => 'empresarial.habilitar', 'uses' => 'EmpresarialController@habilitar']);



Route::get('yaravi/programacion', ['as' => 'programacion.index', 'uses' => 'MainProgramacionController@index']);



Route::get('yaravi/servicios', ['as' => 'servicios.index', 'uses' => 'MainServiciosController@index']);



Route::get('yaravi/amakella', ['as' => 'amakella.index', 'uses' => 'MainAmakellaController@index']);



Route::get('yaravi/nosotros/equipodetrabajo', ['as' => 'nosotros.equipotrabajo', 'uses' => 'MainNosotrosController@equipotrabajo']);

Route::get('yaravi/nosotros/historia', ['as' => 'nosotros.historia', 'uses' => 'MainNosotrosController@historia']);

Route::get('yaravi/nosotros/quienessomos', ['as' => 'nosotros.quienessomos', 'uses' => 'MainNosotrosController@quienessomos']);


//Route::get('login', ['as' => 'admin.index', 'uses' => 'AdminController@index']);


Route::get('login', 'Auth\LoginController@showLoginForm');

Route::post('login', 'Auth\LoginController@login');

Route::get('logout', 'Auth\LoginController@logout');