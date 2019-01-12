<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
    Route::name('admin.')->group(function (){
        Auth::routes();
    });

    //Route::get('/', 'AdminController@master');

    //Mian-Index
    //Route::get('/index', 'AdminController@index');
});


 Route::group(['middleware' => ['web','auth:admin'], 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{

    Route::get('/', 'AdminController@master');

    //Mian-Index
    Route::get('/index', 'AdminController@index');
});
