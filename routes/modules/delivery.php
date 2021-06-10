<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'user'], function(){

    Route::resource('delivery',
        App\Http\Controllers\DeliveryController::class
        );  

});
