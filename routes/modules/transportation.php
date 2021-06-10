<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'user'], function(){
    
Route::resource('transportation',
    App\Http\Controllers\TransportationController::class
    );

 
});

