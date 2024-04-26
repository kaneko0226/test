<?php
Auth::routes();

use App\Http\Controllers\DisplayController;

// use App\Http\Controllers\Api\Auth\ForgotPasswordController;
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

Route::group(['middleware' => 'auth'], function () {

    Route::resource('/', ResourceController::class);


    Route::get('/home', [DisplayController::class, 'home'])->name('home');

    Route::get('/diary_edit/{id}', [DisplayController::class, 'diary_edit'])->name('diary_edit');

    Route::get('/diary_delete/{id}', [DisplayController::class, 'diary_delete'])->name('diary_delete');
});
