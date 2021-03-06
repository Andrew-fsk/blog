<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'Main'], function (){
   Route::get('/', 'IndexController')->name('index');
});

Route::group(['namespace' => 'admin', 'prefix' => 'admin'], function (){
    Route::group(['namespace' => 'Main'], function (){
        Route::get('/', 'IndexController')->name('admin.index');
    });
    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function (){
        Route::get('/', 'IndexController')->name('admin.categories.index');
        Route::get('/create', 'CreateController')->name('admin.categories.create');
        Route::get('/{category}/edit', 'EditController')->name('admin.categories.edit');
        Route::post('/', 'StoreController')->name('admin.categories.store');
    });
});

Auth::routes();
