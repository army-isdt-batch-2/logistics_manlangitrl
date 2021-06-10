<?php

use Illuminate\Support\Facades\Route;

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
    
    


