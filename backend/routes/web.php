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

    //定型文制作ページ
    Route::get('/template/create/', [TemplateController::class,'create'])->name('create');
});
