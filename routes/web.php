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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/profile', 'App\Http\Controllers\UserProfileController@index');

Route::prefix('user-management')->group(function() {
    Route::get('/', 'App\Http\Controllers\UserManagementController@index')->name('user-management.index');
});

Route::prefix('trans-code')->group(function() {
    Route::get('/', 'App\Http\Controllers\TransCodeManagementController@index')->name('trans-code-management.index');
    Route::get('/create', 'App\Http\Controllers\TransCodeManagementController@create')->name('trans-code-management.create');
    Route::post('/store', 'App\Http\Controllers\TransCodeManagementController@store');
});
