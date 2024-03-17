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
    Route::group(['namespace' => 'Room', 'prefix' => 'rooms'], function () {
        Route::get('/', 'IndexController')->name('admin.room.index');
        Route::get('/create', 'CreateController')->name('admin.room.create');
        Route::post('/', 'StoreController')->name('admin.room.store');
    });
});


Auth::routes();


