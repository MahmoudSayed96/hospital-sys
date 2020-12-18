<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
    Route::get('/test/create', function () {
        return request()->route()->getName();
    });
    Route::get('/', 'AdminController@index')->name('welcome');
    ################################ Departments ###################################################
    Route::get('departments', 'DepartmentController@index')->name('departments.index');
    Route::get('departments/create', 'DepartmentController@create')->name('departments.create');
    Route::post('departments/create', 'DepartmentController@store')->name('departments.store');
    Route::post('departments/edit', 'DepartmentController@update')->name('departments.update');
    Route::post('departments/{id}/delete', 'DepartmentController@destroy')->name('departments.destroy');
    Route::get('departments/export-xlsx', 'DepartmentController@exportAsXlsx')->name('departments.export_xlsx');
    Route::get('departments/export-csv', 'DepartmentController@exportAsCsv')->name('departments.export_csv');
    ################################ Specialists ###################################################
    Route::get('specialists', 'SpecialistController@index')->name('specialists.index');
    Route::post('specialists/create', 'SpecialistController@store')->name('specialists.store');
    Route::post('specialists/edit', 'SpecialistController@update')->name('specialists.update');
    Route::post('specialists/{id}/delete', 'SpecialistController@destroy')->name('specialists.destroy');
    Route::get('specialists/export-xlsx', 'SpecialistController@exportAsXlsx')->name('specialists.export_xlsx');
    Route::get('specialists/export-csv', 'SpecialistController@exportAsCsv')->name('specialists.export_csv');
    ############################### Settings ########################################################
    Route::get('settings', 'SettingsSiteController@index')->name('settings.index');
    Route::post('settings/site/update', 'SettingsSiteController@update')->name('settings.site.update');
    
});