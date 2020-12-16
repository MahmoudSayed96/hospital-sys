<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
    Route::get('/test/create', function () {
        return request()->route()->getName();
    });
    Route::get('/', 'AdminController@index')->name('welcome');
    ##################### Departments ############################
    Route::get('departments', 'DepartmentController@index')->name('departments.index');
    Route::get('departments/create', 'DepartmentController@create')->name('departments.create');
    Route::post('departments/create', 'DepartmentController@store')->name('departments.store');
    Route::post('departments/edit', 'DepartmentController@update')->name('departments.update');
    Route::post('departments/{id}/delete', 'DepartmentController@destroy')->name('departments.destroy');
});