<?php

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
//     return view('welcome');
// });

Route::resource('supplier',
    App\Http\Controllers\SupplierController::class
    );

Route::resource('storage',
    App\Http\Controllers\StorageController::class
    );

Route::resource('asset',
    App\Http\Controllers\AssetController::class
    );

Route::resource('distribution',
    App\Http\Controllers\DistributionController::class
    );

Route::resource('transportation',
    App\Http\Controllers\TransportationController::class
    );

Route::resource('delivery',
    App\Http\Controllers\DeliveryController::class
    );  

 Route::resource('return',
    App\Http\Controllers\ReturnController::class
    );   




