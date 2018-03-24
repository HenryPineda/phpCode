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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/testphpfunction', 'phpTestFunctionController@index');
Route::post('/testphpfunction', 'phpTestFunctionController@index');

Route::get('/tokens', 'phpTestFunctionController@tokens');
Route::resource('empleado', 'EmpleadoController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('empleado', 'EmpleadoController@index');

// Route::get('empleado/create', 'EmpleadoController@create');

// Route::post('empleado', 'EmpleadoController@store');

Route::get('empleado/{empleado}', [
    'as' => 'empleado.show',
    'uses' => 'EmpleadoController@show'
]);

Route::get('empleado/{empleado}/edit', [
    'as' => 'empleado.edit',
    'uses' => 'EmpleadoController@edit'
]);

Route::patch('empleado/{empleado}', [
    'as' => 'empleado.update',
    'uses' => 'EmpleadoController@update'
]);

Route::delete('empleado/{codigo}', [
	'as' => 'empleado.destroy', 
	'uses' => 'EmpleadoController@destroy']);

Route::resource('usuario', 'UsuarioController');
Route::resource('docente', 'DocenteController');
Route::resource('vendedor', 'VendedorController');
Route::resource('trabajador', 'TrabajadorController');