<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/workers', [WorkerController::class, 'index'])->name('worker.index');
Route::get('/workers/create', [WorkerController::class, 'create'])->name('worker.create');
Route::get('/workers/{worker}', [WorkerController::class, 'show'])->name('worker.show');
Route::post('/workers/store', [WorkerController::class, 'store'])->name('worker.store');
//Route::get('/workers/update', [App\Http\Controllers\WorkerController::class, 'update'])->name('worker.update');
//Route::get('/workers/delete', [App\Http\Controllers\WorkerController::class, 'delete'])->name('worker.delete');
