<?php

use App\Http\Controllers\clientController;
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





Route::get('/', function () {
    return view('welcome');
});

Route::post('/client/store',[clientController::class,'store'])->name('clients.store');
Route::get('/client/create',[clientController::class,'create'])->name('clients.create');
Route::put('/clients/{id}', [clientController::class,'update'])->name('clients.update');
Route::get('/clients/{id}/edit', [clientController::class,'edit'])->name('clients.edit');
Route::get('/clients',[clientController::class, 'index'])->name('clients.index');
// Route::post('/client/{id}',[clientController::class,'clients.update']);
Route::get('/users',[UserController::class, 'index'])->name('users.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
