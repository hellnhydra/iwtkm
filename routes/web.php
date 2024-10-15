<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ConferenceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});
Route::get('/conferences/edit/{id}', [EmployeeController::class, 'edit'])->name('conferences.edit');
Route::post('/conferences/update/{id}', [EmployeeController::class, 'update'])->name('conferences.update');
Route::get('/client', [ClientController::class, 'index']);
Route::get('/client/conference/{id}', [ClientController::class, 'show']);
Route::post('/client/conference/register/{id}', [ClientController::class, 'register']);
Route::get('/conferences/{conference}/edit', 'ClientController@edit')->name('conferences.edit');
Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/conferences/{id}/edit', 'ConferenceController@edit')->name('conferences.edit');
Route::get('/employee/conference/{id}', [EmployeeController::class, 'show']);
Route::put('/conferences/{conference}', 'ClientController@update')->name('conferences.update');
Route::get('/admin/index', 'ConferenceController@index');
Route::put('/conferences/{id}', 'ConferenceController@update')->name('conferences.update');
Route::get('admin/index', 'ClientController@index');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/conferences/create', 'ConferenceController@create')->name('conferences.create');
Route::get('/admin/index', [ConferenceController::class, 'index']);
Route::get('/admin/index', 'ConferenceController@index');
Route::put('/conferences/{conference}', 'ConferenceController@update')->name('conferences.update');
Route::get('/conferences/{conference}/edit', 'ConferenceController@edit')->name('conferences.edit');
Route::prefix('admin')->group(function () {
});