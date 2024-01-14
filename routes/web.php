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

Route::get('/', [Controllers\HomeController::class, 'index'])->name("homeIndex");
Route::get('/addTask', [Controllers\TaskController::class, 'index'])->name("addTaskIndex");
Route::post('/addTask', [Controllers\TaskController::class, 'submit'])->name("addTaskSubmit");
