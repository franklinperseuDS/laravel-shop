<?php
use App\Http\Controllers\clientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/client/store',[clientController::class,'store']);

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

