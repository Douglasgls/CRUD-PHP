<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect()->route('employee.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employee/{id}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::delete('/employee/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
Route::patch('/employee/{id}', [EmployeeController::class, 'update'])->name('employee.update');
Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employee',[EmployeeController::class, 'store'])->name('employee.store');



require __DIR__.'/auth.php';