<?php

use App\Http\Controllers\Computadoras;
use Illuminate\Support\Facades\Route;

Route::controller(Computadoras::class)->group(function (){
    Route::get('/','index')->name('view-inicio');
    Route::get('/registro', 'view_store')->name('view-registro');
    Route::post('/store-computadora','store')->name('store-computadoras');
    Route::get('/editar-computadora/{id}','edit')->name('view-edit');
    Route::get('/eliminar-computadora/{id}','show')->name('view-delete');
    Route::post('/update-computadora/{id}','update')->name('update-computadoras');
    Route::delete('/destroy-computadora/{id}', 'destroy')->name('destroy-computadora');
});