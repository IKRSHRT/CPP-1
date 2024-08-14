<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InternController;
use App\Http\Controllers\IntervieweeController;

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

Route::get('/shops', [\App\Http\Controllers\ShopListController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('社員一覧')->middleware('auth');
Route::get('/roles', [\App\Http\Controllers\RoleController::class,'index'])->name('ロール一覧')->middleware('auth');
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('/customers', 'CustomerController@store');
Route::get('/interns', [InternController::class, 'index']);
Route::get('/interviewees', [IntervieweeController::class, 'index']);
URL::forceScheme('https');






Auth::routes();
