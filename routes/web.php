<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\AddressController;
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

Route::resource('customer', CustomerController::class); // RUTAS DE LOS CLIENTES
Route::resource('sale', SaleController::class); // RUTAS DE LAS VENTAS
Route::resource('address', AddressController::class); // RUTAS DE LAS DIRECCIONES