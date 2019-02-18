<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('customer')->group(function () {
    Route::get('index', 'CustomerController@index')->name('index');
//    Route::get('index', function () {
//        //Hiển thị danh sách khách hàng
//        return view('modules.customer.index');
//    });

    Route::get('create', 'CustomerController@create')->name('create');
//    Route::get('create', function () {
//        // Hiển thị form tạo khách hàng
//        return view('modules.customer.create');
//    });

    Route::post('store', 'CustomerController@store')->name('store');
//    Route::post('store', function () {
//        // Xử lý lưu dữ liệu tạo khách hàng thong qua phương thức POST từ form
//        return view('modules.customer.store');
//    });

    Route::get('{id}/show', 'CustomerController@show')->name('show');
//    Route::get('{id}/show', function () {
//        //Hiển thị thông tin chi tiết khách hàng
//        return view('modules.customer.show');
//    });

    Route::get('{id}/edit', 'CustomerController@edit')->name('edit');
//    Route::get('{id}/edit', function () {
//        //Hiển thị form chỉnh sửa thông tin khách hàng
//        return view('modules.customer.edit');
//    });

    Route::patch('{id}/update', 'CustomerController@update');
//    Route::patch('{id}/update', function () {
//        //Xử lý lưu dữ liệu thông tin khách hàng
//    });

    Route::delete('{id}', 'CustomerController@destroy')->name('delete');
//    Route::delete('{id}', function () {
//        //Xóa thông tin dữ liệu khách hàng
//        return view('modules.customer.delete');
//    });
});

