<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request){return $request->user();});

Route::get('/','PostController@get');
Route:: get('/{id}','PostController@getid');
Route::post('/','PostController@post');
Route::delete('/{id}','PostController@delete');
Route::put('/{id}','PostController@put');

