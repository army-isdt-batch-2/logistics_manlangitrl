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
Route::group(['middleware'=>'user'], function(){

Route::resource('users',
    App\Http\Controllers\UserController::class
    );

    Route::get('/admin/dashboard', [
        App\Http\Controllers\HomeController::class,
        'index'
        ])->name('home'); 

Route::resource('supplier',
    App\Http\Controllers\SupplierController::class
    );

Route::resource('storages',
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
    
    Route::get('/logout', [
        App\Http\Controllers\AuthController::class,
        'logout'
    ])->name('logout');
});


Route::group(['middleware'=>'guest'], function(){
 
    Route::get('/', [
            App\Http\Controllers\AuthController::class,
            'login'
      ])->name('login');


    
    Route::post('/login/verify', [
            App\Http\Controllers\AuthController::class,
            'login_verify'
        ])->name('login.verify');
 

  
    
        });
    
    




