<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'user'], function(){

Route::resource('supplier',
    App\Http\Controllers\SupplierController::class
    );
});

