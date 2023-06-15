<?php

use App\Http\Controllers\TopsisController;
use App\Http\Controllers\TopsisTestController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('ranking-list');
// });
Route::get('/', [TopsisController::class, 'index'])->name('ranking-list');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/ranking-list', [TopsisController::class, 'calculate'])->name('ranking-list');
Route::get('/test', [TopsisTestController::class, 'index'])->name('test');
Route::get('/add-data', [TopsisController::class, 'addData'])->name('add-data.get');
Route::post('/add-data', [TopsisController::class, 'addCriteriaValue'])->name('add-data.post');
Route::delete('/delete-data/{id}', [TopsisController::class, 'delete'])->name('delete-data');
