<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'Main'], function () {
    Route::get('/','IndexController');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function (){
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController');
    });
    Route::group(['namespace' => 'Room', 'prefix' => 'room'], function () {
        Route::get('/', 'IndexController')->name('admin.room.index');
        Route::get('/create', 'CreateController')->name('admin.room.create');
        Route::post('/', 'StoreController')->name('admin.room.store');
        Route::get('/{room}', 'ShowController')->name('admin.room.show');
        Route::get('/{room}/edit', 'EditController')->name('admin.room.edit');
        Route::patch('/{room}', 'UpdateController')->name('admin.room.update');
        Route::delete('/{room}', 'DeleteController')->name('admin.room.delete');
    });

    Route::group(['namespace' => 'Hotel', 'prefix' => 'hotels'], function () {
        Route::get('/', 'IndexController')->name('admin.hotel.index');
        Route::get('/create', 'CreateController')->name('admin.hotel.create');
        Route::post('/', 'StoreController')->name('admin.hotel.store');
        Route::get('/{hotel}', 'ShowController')->name('admin.hotel.show');
        Route::get('/{hotel}/edit', 'EditController')->name('admin.hotel.edit');
        Route::patch('/{hotel}', 'UpdateController')->name('admin.hotel.update');
        Route::delete('/{hotel}', 'DeleteController')->name('admin.hotel.delete');
    });
});


Auth::routes();


