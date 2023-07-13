<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::redirect('/', '/task-list');

Route::get('/task-create', [TaskController::class,'create'])->name('task.create');
Route::post('/task', [TaskController::class,'store'])->name('task.store');
Route::get('/task-list', [TaskController::class,'index'])->name('task-index');
Route::get('/task-edit/{id}', [TaskController::class,'edit'])->name('task-edit');
Route::put('/task-update/{id}', [TaskController::class,'update'])->name('task-update');
Route::delete('/task-delete/{id}', [TaskController::class,'delete'])->name('task-delete');

Route::get('/employees', [EmployeeController::class, 'index'])->name('employee-index');
Route::get('/employees-create', [EmployeeController::class, 'create'])->name('employee-create');
Route::post('/employees-store', [EmployeeController::class, 'store'])->name('employee-store');
Route::get('/employees-edit/{id}', [EmployeeController::class, 'edit'])->name('employee-edit');


