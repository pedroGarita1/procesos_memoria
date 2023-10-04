<?php

use App\Http\Controllers\Proceso_memoria;
use App\Http\Controllers\Vistas;
use Illuminate\Support\Facades\Route;

Route::controller(Vistas::class)->group(function(){
    Route::get('/','index')->name('view-inicio');
});
Route::controller(Proceso_memoria::class)->group(function(){
    Route::post('/insert-proceso','store')->name('Proceso-store');
    Route::get('/update-pause/{id}','update_puase')->name('Proceso-update-pause');
    Route::get('/update-activo/{id}','update_activo')->name('Proceso-update-activo');
    Route::get('/destroy-procesos/{id}','destroy')->name('Proceso-delete');
});