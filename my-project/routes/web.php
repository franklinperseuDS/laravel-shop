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

Route::get('/factories/clients', function() {
    return \App\Models\Clients::all();
});

Route::get('/factories/products', function() {
    return \App\Models\Products::all();
});
Route::get('/factories/purchase', function() {
    return \App\Models\PurchaseOrders::all();
});

Route::get('/client',[clientController::class,'showClient']);
Route::get('/client/{id}',[clientController::class,'getById']);

Route::get('/view/client', function(){
    return view('clients', ['name' => 'Thomas']);
});

Route::get('/view/bs', function(){
    return view('testebs');
});

Route::post('/client/store',[clientController::class,'store']);

Route::post('/client/{id}',[clientController::class,'update']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
