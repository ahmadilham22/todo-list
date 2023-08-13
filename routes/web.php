<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;
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


Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('signin');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/todo', [TodoController::class, 'index'])->name('todolist.index');
    Route::get('/todo/history', [TodoController::class, 'history'])->name('todolist.history');
    Route::get('/todo/create', [TodoController::class, 'create'])->name('todolist.create');
    Route::post('/todo/create', [TodoController::class, 'store'])->name('todolist.store');
    Route::put('/todo/update/{id}', [TodoController::class, 'update'])->name('todolist.update');
    Route::put('/todo/updateId/{id}', [TodoController::class, 'updateId'])->name('todolist.clear');
    Route::get('/todo/show/{id}', [TodoController::class, 'show'])->name('todolist.show');
    Route::put('/todo/restore/{id}', [TodoController::class, 'restoreStatus'])->name('todolist.restore');
    Route::delete('/todo/delete/{id}', [TodoController::class, 'destroy'])->name('todolist.delete');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
