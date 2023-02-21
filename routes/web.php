<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LayoutController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/index', [UsersController::class, 'index']);

Route::get('/user/create', [UsersController::class, 'create'])->name('tambah.user');
Route::post('/user/insert', [UsersController::class, 'insert'])->name('insert.user');
Route::get('/user/edit/{id}', [UsersController::class, 'edit'])->name('edit.user');
Route::post('/user/update', [UsersController::class, 'update'])->name('update.user');
Route::get('/user/delete/{id}', [UsersController::class, 'delete'])->name('delete.user');

Route::get('/layout', [LayoutController::class, 'index']);

