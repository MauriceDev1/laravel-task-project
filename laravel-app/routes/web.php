<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', [TaskController::class, 'home'])->name('home');

Route::get('/view_tasks', [TaskController::class, 'view'])->name('view');

Route::get('/create', [TaskController::class, 'create'])->name('create');

Route::post('/create', [TaskController::class, 'store'])->name('task.store');

Route::get('/edit_task/{id}', [TaskController::class, 'edit' ])->name('edit');

Route::put('/task/{task}/update', [TaskController::class, 'update'])->name('task.update');