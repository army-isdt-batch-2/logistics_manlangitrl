<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'user'], function(){
    
    Route::get('/admin/dashboard', [
        App\Http\Controllers\HomeController::class,
        'index'
        ])->name('home'); 

});

