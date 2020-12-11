<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth','admin']], function () {
    Route::get('/', function () {
        return view('admin.welcome');
    });
});