<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

// Route::get('/', function () {
//     return view('welcome');
// });


// ユーザー一覧画面
Route::get('people',[UserController::class, 'Users'])->name('users');

// ユーザー削除
Route::post('people',[UserController::class,'UserDelete'])->name('user_delete');

// ユーザー詳細画面
Route::get('people/{user}',[UserController::class, 'User'])->name('user_detail');

// ユーザー編集画面
Route::get('edit/{user}',[UserController::class, 'UserEdit'])->name('user_edit');
Route::post('edit/{user}',[UserController::class, 'UserEditPost']);



// ユーザー作成画面
Route::get('create',[UserController::class, 'UserCreate'])->name('user_create');
Route::post('create',[UserController::class, 'UserCreatePost']);



