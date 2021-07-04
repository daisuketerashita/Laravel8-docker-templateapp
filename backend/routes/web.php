<?php

use App\Http\Controllers\TemplateController;
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


Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    //トップページ
    Route::get('/',[TemplateController::class,'index'])->name('index');
    //トップページ(選択)
    Route::get('/show/{id}', [TemplateController::class,'show'])->name('show');

    //定型文制作ページ
    Route::get('/template/create/', [TemplateController::class,'create'])->name('create');
    Route::post('/template/create/', [TemplateController::class,'store'])->name('store');

    //定型文編集ページ
    Route::get('/template/{id}/edit/', [TemplateController::class,'edit'])->name('edit');
    Route::post('/template/{id}/edit/', [TemplateController::class,'update'])->name('update');
});
