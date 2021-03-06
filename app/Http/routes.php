<?php


    Route::group(['prefix' => 'commonusers'], function(){

        //--------------Rutas Clientes----------------

        Route::resource('clientes','ClientesController');

        Route::get('clientes/{id}/destroy',[
            'uses'  => 'ClientesController@destroy',
            'as'    => 'commonusers.clientes.destroy'
        ]);

        Route::resource('comanda','ComandasController');

        Route::get('comanda/{id}/destroy',[
            'uses'  => 'ComandasController@destroy',
            'as'    => 'commonusers.comanda.destroy'
        ]);

    });

    Route::group(['prefix' => 'admin'],function(){

        //------------Rutas ingredientes--------------

        Route::resource('ingrediente','IngredientesController');

        Route::get('ingrediente/{id}/destroy',[
            'uses' => 'IngredientesController@destroy',
            'as' =>'admin.ingredientes.destroy']);

        //--------------Rutas Zona----------------------
        Route::resource('zonas','ZonasController');

        Route::get('zonas/{id}/destroy',[
            'uses'  => 'ZonasController@destroy',
            'as'    => 'admin.zonas.destroy'
        ]);

        //---------------Rutas coberturas---------------
        Route::resource('coberturas','CoberturasController');

        Route::get('coberturas/{id}/show', [
            'uses' => 'CoberturasController@show',
            'as'   => 'admin.coberturas.show'
        ]);

        Route::get('coberturas/{id}/destroy',[
            'uses' => 'CoberturasController@destroy',
            'as' => 'admin.coberturas.destroy'
        ]);

        Route::get('coberturas/{id}/guardarHistorial',[
            'uses' => 'CoberturasController@guardarHistorial',
            'as' => 'admin.coberturas.guardarHistorial'
        ]);

        Route::get('informes/historialPrecios',[
            'uses'=> 'CoberturasController@mostrarHistorial',
            'as' => 'admin.historial.historialPrecios'
        ]);

        //-------------Rutas Usuarios----------------
        Route::resource('users','UsersController');

        Route::get('users/{id}/destroy',[
            'uses' => 'UsersController@destroy',
            'as' => 'admin.users.destroy'
        ]);

        //------------Rutas pagos-----------------
        Route::resource('pagos','PagosController');

        Route::get('pagos/{id}/destroy',[
            'uses' => 'PagosController@destroy',
            'as' => 'admin.pagos.destroy'
        ]);
        //--------------Rutas Estados-------
        Route::resource('estados','EstadosController');



        Route::get('estados/{id}/destroy',[
            'uses' => 'EstadosController@destroy',
            'as' => 'admin.estados.destroy'
        ]);





    });

Route::get('/', 'HomeController@home');
Route::get('/home', 'HomeController@home');


Route::get('auth/login','Auth\AuthController@showLoginForm');
Route::post('auth/login','Auth\AuthController@postLogin');
Route::get('auth/logout','Auth\AuthController@logout');


Route::group(['prefix' => 'repartidor'],function(){
    Route::resource('EstadoComanda','EstadoComandaController');
    Route::get('repartidor/{id}/destroy',[
        'uses'  => 'EstadoComandaController@destroy',
        'as'    => 'repartidor.EstadoComanda.destroy'
    ]);
});


