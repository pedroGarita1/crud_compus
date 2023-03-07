<?php

use App\Http\Controllers\Computadoras;
use Illuminate\Support\Facades\Route;

Route::controller(Computadoras::class)->group(function (){
    Route::get('/','index')->name('view-inicio');
    Route::get('/registro', 'view_store')->name('view-registro');
    Route::post('/store-computadora','store')->name('store-computadoras');
});