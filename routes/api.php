<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', 'Api\AuthController@login');
Route::post('/register', 'Api\AuthController@register');

Route::get('/products/get', 'Api\ProductController@getProducts');
Route::get('/products/get-detail/{id}', 'Api\ProductController@getProductDetail');