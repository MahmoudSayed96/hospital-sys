<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
    Route::get('/test', function () {
        $row = App\User::with(['department', 'specialist', 'governorate', 'city'])->first();
        // return $row;
        return view('admin.doctors.actions', compact('row'))->render();
    });
    Route::get('/', 'AdminController@index')->name('welcome');
    Route::get('/gov', 'AdminController@getGovCities')->name('gov');
    ################################ Departments ###################################################
    Route::get('departments', 'DepartmentController@index')->name('departments.index');
    Route::get('departments/data', 'DepartmentController@getData')->name('departments.get_data');
    Route::get('departments/create', 'DepartmentController@create')->name('departments.create');
    Route::post('departments/create', 'DepartmentController@store')->name('departments.store');
    Route::post('departments/edit', 'DepartmentController@update')->name('departments.update');
    Route::post('departments/{id}/delete', 'DepartmentController@destroy')->name('departments.destroy');
    Route::get('departments/export-xlsx', 'DepartmentController@exportAsXlsx')->name('departments.export_xlsx');
    Route::get('departments/export-csv', 'DepartmentController@exportAsCsv')->name('departments.export_csv');
    ################################ Specialists ###################################################
    Route::get('specialists', 'SpecialistController@index')->name('specialists.index');
    Route::get('specialists/data', 'SpecialistController@getData')->name('specialists.get_data');
    Route::post('specialists/create', 'SpecialistController@store')->name('specialists.store');
    Route::post('specialists/edit', 'SpecialistController@update')->name('specialists.update');
    Route::post('specialists/{id}/delete', 'SpecialistController@destroy')->name('specialists.destroy');
    Route::get('specialists/export-xlsx', 'SpecialistController@exportAsXlsx')->name('specialists.export_xlsx');
    Route::get('specialists/export-csv', 'SpecialistController@exportAsCsv')->name('specialists.export_csv');
    ################################ Doctors ###################################################
    Route::get('doctors', 'DoctorController@index')->name('doctors.index');
    Route::get('doctors/data', 'DoctorController@getData')->name('doctors.get_data');
    Route::get('doctors/gallery', 'DoctorController@gallery')->name('doctors.gallery');
    Route::get('doctors/create', 'DoctorController@create')->name('doctors.create');
    Route::post('doctors/create', 'DoctorController@store')->name('doctors.store');
    Route::get('doctors/{id}/edit', 'DoctorController@edit')->name('doctors.edit');
    Route::get('doctors/{id}/show', 'DoctorController@show')->name('doctors.show');
    Route::post('doctors/{id}/edit', 'DoctorController@update')->name('doctors.update');
    Route::post('doctors/{id}/delete', 'DoctorController@destroy')->name('doctors.destroy');
    Route::get('doctors/export-xlsx', 'DoctorController@exportAsXlsx')->name('doctors.export_xlsx');
    Route::get('doctors/export-csv', 'DoctorController@exportAsCsv')->name('doctors.export_csv');
    ################################ Stocks ###################################################
    Route::get('inventory/stocks', 'StockController@index')->name('stocks.index');
    Route::get('inventory/stocks/data', 'StockController@getData')->name('stocks.get_data');
    Route::get('inventory/stocks/create', 'StockController@create')->name('stocks.create');
    Route::post('inventory/stocks/create', 'StockController@store')->name('stocks.store');
    Route::post('inventory/stocks/edit', 'StockController@update')->name('stocks.update');
    Route::post('inventory/stocks/{id}/delete', 'StockController@destroy')->name('stocks.destroy');
    Route::get('inventory/stocks/export-xlsx', 'StockController@exportAsXlsx')->name('stocks.export_xlsx');
    Route::get('inventory/stocks/export-csv', 'StockController@exportAsCsv')->name('stocks.export_csv');
    ################################ Order Stocks ###################################################
    Route::get('inventory/stocks/orders', 'OrderStockController@index')->name('orders_stocks.index');
    Route::get('inventory/stocks/request', 'OrderStockController@getStock')->name('orders_stocks.get_stock');
    Route::get('inventory/stocks/order/create', 'OrderStockController@create')->name('orders_stocks.create');
    Route::post('inventory/stocks/order/create', 'OrderStockController@store')->name('orders_stocks.store');
    Route::post('inventory/stocks/order/edit', 'OrderStockController@update')->name('orders_stocks.update');
    Route::post('inventory/stocks/order/{id}/delete', 'OrderStockController@destroy')->name('orders_stocks.destroy');
    Route::get('inventory/stocks/order/export-xlsx', 'OrderStockController@exportAsXlsx')->name('orders_stocks.export_xlsx');
    Route::get('inventory/stocks/order/export-csv', 'OrderStockController@exportAsCsv')->name('orders_stocks.export_csv');
    ################################ Medicines ###################################################
    Route::get('medicines', 'MedicineController@index')->name('medicines.index');
    Route::get('medicines/data', 'MedicineController@getData')->name('medicines.get_data');
    Route::get('medicines/create', 'MedicineController@create')->name('medicines.create');
    Route::post('medicines/create', 'MedicineController@store')->name('medicines.store');
    Route::get('medicines/{id}/show', 'MedicineController@show')->name('medicines.show');
    Route::get('medicines/{id}/edit', 'MedicineController@edit')->name('medicines.edit');
    Route::post('medicines/{id}/edit', 'MedicineController@update')->name('medicines.update');
    Route::post('medicines/{id}/delete', 'MedicineController@destroy')->name('medicines.destroy');
    Route::get('medicines/export-xlsx', 'MedicineController@exportAsXlsx')->name('medicines.export_xlsx');
    Route::get('medicines/export-csv', 'MedicineController@exportAsCsv')->name('medicines.export_csv');
    ############################### Settings ########################################################
    Route::get('settings', 'SettingsSiteController@index')->name('settings.index');
    Route::post('settings/site/update', 'SettingsSiteController@update')->name('settings.site.update');
    Route::get('settings/backups/{file}/download', 'BackUpController@download')->name('settings.backups.download');
    Route::post('settings/backups/{file}/delete', 'BackUpController@destroy')->name('settings.backups.destroy');
    
});