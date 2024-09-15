<?php

use App\Http\Controllers\FirstSalaryReturnController;
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

Route::get('/return_form', function () {
    return view('return_form');
});

// Frontend Routes
Route::get('/', function () {
    return view('frontend/index');
});

Route::get('/first-salary-return', [FirstSalaryReturnController::class, 'index'])->name('first-salary-return.index'); //it's for show all data from this table
Route::get('/first-salary-return/create', [FirstSalaryReturnController::class, 'create'])->name('first-salary-return.create'); //it's for create return
Route::post('/first-salary-return', [FirstSalaryReturnController::class, 'store'])->name('first-salary-return.store'); //it's for store data from user
Route::get('/first-salary-return/{id}', [FirstSalaryReturnController::class, 'show'])->name('first-salary-return.show');
Route::get('/first-salary-return/{id}/edit', [FirstSalaryReturnController::class, 'edit'])->name('first-salary-return.edit');
Route::put('/first-salary-return/{id}', [FirstSalaryReturnController::class, 'update'])->name('first-salary-return.update');
Route::delete('/first-salary-return/{id}', [FirstSalaryReturnController::class, 'destroy'])->name('first-salary-return.destroy');

