<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/about', 'about');

Route::get("/product/{id?}", function (int $id = null) {
    return "<h1>Product ID: {$id}</h1>";
})->whereNumber('id');

Route::get('/user/{name}', function (string $name) {
    return "<h1>User: {$name}</h1>";
})->whereAlpha('name');
