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
    Route::get('index', function () {
        //Hiển thị danh sách khách hàng
        return view('modules.customer.index');
    });

    Route::get('create', function () {
        // Hiển thị form tạo khách hàng
    });

    Route::post('store', function () {
        //Hiển thị form tạo khách hàng
    });

    Route::get('{id}/show', function () {
        //Hiển thị thông tin chi tiết khách hàng
    });

    Route::get('{id}/edit', function () {
        //Hiển thị form chỉnh sửa thông tin khách hàng
    });

    Route::patch('{id}/update', function () {
        //Xử lý lưu dữ liệu thông tin khách hàng
    });

    Route::delete('{id}', function () {
        //Xóa thông tin dữ liệu khách hàng
    });
});

