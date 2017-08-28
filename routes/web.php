<?php

Route::namespace('user')->group(function (){
    Route::get('/',['as'=>'home','uses'=>'layoutController@home']);

});
Route::namespace('admin')->group(function (){
    //App\Http\Controller\admin namespace;
    Route::get('Login','LoginController@getLogin');
    Route::post('Login','LoginController@postLogin');
    Route::post('Logout',['as'=>'Logout','uses'=>'LoginController@getLogout']);
    Route::prefix('admin')->middleware('auth')->group(function (){
        Route::get('/',['uses'=>'Admin_Controller@index']);
    });

});