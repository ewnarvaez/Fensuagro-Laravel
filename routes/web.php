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

    Route::get('/','InicioController@index')->name('inicio');
    Route::get('seguridad/login','Seguridad\LoginController@index')->name('login');
    Route::post('seguridad/login','Seguridad\LoginController@login')->name('login-post');
    Route::get('seguridad/logout','Seguridad\LoginController@logout')->name('logout');
    Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'superadmin']], function () {
        Route::get('', 'AdminController@index');
        Route::get('permiso', 'PermisoController@index')->name('permiso');
        Route::get('permiso/crear', 'PermisoController@crear')->name('crear-permiso');
        /*RUTAS DEL MENU*/
        Route::get('menu', 'MenuController@index')->name('menu');
        Route::get('menu/crear', 'MenuController@crear')->name('crear-menu');
        Route::post('menu', 'MenuController@guardar')->name('guardar-menu');
        Route::post('menu/guardar-orden', 'MenuController@guardarOrden')->name('guardar-orden');
        /*RUTAS DE ROL*/
        Route::get('rol', 'RolController@index')->name('rol');
        Route::get('rol/crear', 'RolController@crear')->name('crear-rol');
        Route::post('rol', 'RolController@guardar')->name('guardar-rol');
        Route::get('rol/{id}/editar', 'RolController@editar')->name('editar-rol');
        Route::put('rol/{id}', 'RolController@actualizar')->name('actualizar-rol');
        Route::delete('rol/{id}', 'RolController@eliminar')->name('eliminar-rol');
        /*RUTAS DE MENU-ROL*/
        Route::get('menu-rol', 'MenuRolController@index')->name('menu-rol');
        Route::post('menu-rol', 'MenuRolController@guardar')->name('guardar-menu-rol');
});


