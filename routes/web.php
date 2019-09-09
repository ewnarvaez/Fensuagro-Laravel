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
        /*RUTAS DEL MENU*/
        Route::get('menu', 'MenuController@index')->name('menu');
        Route::get('menu/crear', 'MenuController@crear')->name('crear-menu');        
        Route::post('menu', 'MenuController@guardar')->name('guardar-menu');
        Route::post('menu/guardar-orden', 'MenuController@guardarOrden')->name('guardar-orden');
        Route::get('menu/{id}/editar', 'MenuController@editar')->name('editar-menu');
        Route::put('menu/{id}', 'MenuController@actualizar')->name('actualizar-menu');
        Route::get('menu/{id}/eliminar', 'MenuController@eliminar')->name('eliminar-menu');
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
        /*RUTAS DE PERMISO*/
        Route::get('permiso', 'PermisoController@index')->name('permiso');
        Route::post('permiso', 'PermisoController@guardar')->name('guardar-permiso');
        Route::get('permiso/crear', 'PermisoController@crear')->name('crear-permiso');
        Route::get('permiso/{id}/editar', 'PermisoController@editar')->name('editar-permiso');
        Route::put('permiso/{id}', 'PermisoController@actualizar')->name('actualizar-permiso');
        Route::delete('permiso/{id}', 'PermisoController@eliminar')->name('eliminar-permiso');         
        /*RUTAS DE MENU-ROL*/
        Route::get('permiso-rol', 'PermisoRolController@index')->name('permiso-rol');
        Route::post('permiso-rol', 'PermisoRolController@guardar')->name('guardar-permiso-rol');

        /*RUTAS DE USUARIO*/
        Route::get('usuario','UsuarioController@index')->name('usuario');
    });

    Route::group(['prefix' => 'func', 'namespace' => 'Funcionario', 'middleware' => ['auth']], function () {
        /*RUTAS DE ENTIDAD*/
        Route::get('entidad', 'EntidadController@index')->name('entidad');
        Route::get('entidad/crear', 'EntidadController@crear')->name('crear-entidad');
        Route::post('entidad', 'EntidadController@guardar')->name('guardar-entidad');
        Route::get('entidad/{id}/editar', 'EntidadController@editar')->name('editar-entidad');
        Route::put('entidad/{id}', 'EntidadController@actualizar')->name('actualizar-entidad');
        /*RUTAS DE ENTIDAD*/
        Route::get('social', 'SocialController@index')->name('social');
        Route::get('social/crear', 'SocialController@crear')->name('crear-social');
        Route::post('social', 'SocialController@guardar')->name('guardar-social');
        Route::get('social/{id}/editar', 'SocialController@editar')->name('editar-social');
        Route::put('social/{id}', 'SocialController@actualizar')->name('actualizar-social');
    });





