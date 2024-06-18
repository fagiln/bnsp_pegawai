<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\HomeController;
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



Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('login', [AuthController::class, 'authenticate'])->name('login.authenticate');
});
Route::middleware('auth')->group(function(){
    Route::get('home', [HomeController::class, 'home'])->name('home');
    Route::get('list-employee', [HomeController::class, 'list'])->name('list.employee');
    Route::get('add-employee', [HomeController::class, 'show'])->name('employee.show');
    Route::post('add-employee', [HomeController::class, 'store'])->name('employee.store');
    Route::get('edit-employee/{id}/edit', [HomeController::class, 'edit'])->name('employee.edit');
    Route::post('edit-employee/{id}', [HomeController::class, 'update'])->name('employee.update');
    Route::delete('destroy/{id}', [HomeController::class, 'destroy'])->name('employee.destroy');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});