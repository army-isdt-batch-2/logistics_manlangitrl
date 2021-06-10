<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'user'], function(){
    Route::get('/logout', [
        App\Http\Controllers\AuthController::class,
        'logout'
    ])->name('logout');
});

