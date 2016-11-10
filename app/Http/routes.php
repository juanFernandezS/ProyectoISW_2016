<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'],function(){
    Route::resource('ingrediente','IngredientesController');

    Route::get('ingrediente/{id}/destroy',[
        'ingredientes' => 'IngredientesController@destroy',
        'as' =>'admin.ingredientes.destroy']);



    Route::resource('coberturas','CoberturasController');

    Route::resource('users','UsersController');

    Route::get('user/{id}/destroy',[
        'users' => 'UsersController@destroy',
        'as' => 'admin.user.destroy'
    ]);
    
    
});