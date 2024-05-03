<?php


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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::resource('resource', ResourceController::class)->only([
        'index', 'create', 'store'
    ]);

    Route::post('resource/search', [DisplayController::class, 'postsearch'])->name('postsearch');

    Route::get('/diary_edit/{id}', [DisplayController::class, 'diary_edit'])->name('diary_edit');
    Route::get('/diary_delete/{id}', [DisplayController::class, 'diary_delete'])->name('diary_delete');
});
// パスワードリセット-----------------------------------------------------------------------------------
Route::prefix('reset')->group(function () {
    // パスワード再設定用のメール送信フォーム
    Route::get('/', 'UsersController@requestResetPassword')->name('reset.form');
    // メール送信処理
    Route::post('/send', 'UsersController@sendResetPasswordMail')->name('reset.send');
    // メール送信完了
    Route::get('/send/complete', 'UsersController@sendCompleteResetPasswordMail')->name('reset.send.complete');
    // パスワード再設定
    Route::get('/password/edit', 'UsersController@resetPassword')->name('reset.password.edit');
    // パスワード更新
    Route::post('/password/update', 'UsersController@updatePassword')->name('reset.password.update');
});
// ----------------------------------------------------------------------------------------------------------

// いいね機能-----------------------------------------------------------------------------------

Route::post('/like', 'ReviewController@like')->name('reviews.like');// ----------------------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------------------
