<?php


Route::group(['prefix' => 'commonusers'], function(){

    Route::resource('clientes','ClienteController');
    
    Route::get('clientes/{id}/destroy',[
        'uses'  => 'ClienteController@destroy',
        'as'    => 'commonusers.clientes.destroy'
    ]);
    
});

Route::group(['prefix' => 'admin'],function(){
    Route::resource('ingrediente','IngredientesController');

    Route::get('ingrediente/{id}/destroy',[
        'ingredientes' => 'IngredientesController@destroy',
        'as' =>'admin.ingredientes.destroy']);


    Route::resource('zonas','ZonasController');

    Route::get('zonas/{id}/destroy',[
        'uses'  => 'ZonasController@destroy',
        'as'    => 'admin.zonas.destroy'
    ]);


        Route::resource('coberturas','CoberturasController');

        Route::get('coberturas/{id}/show', [
            'uses' => 'CoberturasController@show',
            'as'   => 'admin.coberturas.show'
        ]);

        Route::get('coberturas/{id}/destroy',[
            'uses' => 'CoberturasController@destroy',
            'as' => 'admin.coberturas.destroy'
        ]);

    Route::resource('users','UsersController');

    Route::get('user/{id}/destroy',[
        'users' => 'UsersController@destroy',
        'as' => 'admin.user.destroy'
    ]);
});

Route::get('/', 'HomeController@home');
Route::get('/home', 'HomeController@home');


Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');
Route::get('auth/logout','Auth\AuthController@logout');


