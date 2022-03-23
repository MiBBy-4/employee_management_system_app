<?php

use App\Http\Controllers\Employees\EmployeeController;
use Illuminate\Support\Facades\Route;

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
Route::group(['controller' => EmployeeController::class], function()
{
    Route::get('employees', 'index')->name('employees.index');
    Route::get('employees/create', 'create')->name('employees.create');
    Route::post('employees', 'store')->name('employees.store');
    Route::get('employees/{employee}/edit', 'edit')->name('employees.edit');
    Route::patch('employees/{employee}', 'update')->name('employees.update');
    Route::delete('employees/{employee}', 'destroy')->name('employees.destroy');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
