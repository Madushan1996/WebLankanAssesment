<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/users', [EmployeeController::class, 'index'])->name('users.index');
Route::get('/users/create', [EmployeeController::class, 'create'])->name('users.create');
Route::post('/users', [EmployeeController::class, 'store'])->name('users.store');
Route::get('/users/{user}/edit', [EmployeeController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [EmployeeController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [EmployeeController::class, 'destroy'])->name('users.destroy');


