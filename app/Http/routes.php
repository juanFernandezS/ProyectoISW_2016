<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'],function(){
    Route::resource('ingrediente','IngredientesController');
    
    Route::get('ingrediente/{id}/destroy',[
        'ingredientes' => 'IngredientesController@destroy',
        'as' =>'admin.ingredientes.destroy'


    ]);


});