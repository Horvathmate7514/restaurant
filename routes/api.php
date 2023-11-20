<?php

use App\Http\Controllers\CategoriController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get("/menu", [MenuController::class,"getAll"]);
Route::get("/menu/{min}/{max}", [MenuController::class,"getByPrice"]);

Route::get("/category", [CategoriController::class,"getAll"]);
Route::get("/category/{name}", [CategoriController::class,"getMenusByCategory"]);

Route::get("/orders/{order_id}", [OrderController::class,"getMenusOrderId"]);
Route::get("/orders/date/{date}", [OrderController::class,"getOrdersByDate"]);
Route::get("/orders/total/date/{date}", [OrderController::class,"getTotalOrdersByDate"]);