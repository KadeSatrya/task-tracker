<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Controllers;

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

Route::get('/', [Controllers\HomeController::class, 'index'])->name("home.index");
Route::get('/addTask', [Controllers\TaskController::class, 'index'])->name("task.index");
Route::post('/addTask', [Controllers\TaskController::class, 'submit'])->name("task.post");
Route::patch('/task/{id}', [Controllers\TaskController::class, 'changeStatus'])->name("task.changeStatus");
Route::delete('/task/{id}', [Controllers\TaskController::class, 'delete'])->name("task.delete");
