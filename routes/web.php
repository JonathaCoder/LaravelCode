<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class,'index']);
Route::get('/events/create', [EventController::class,'create']);
Route::get('/contatos', [EventController::class,'contato']);
Route::get('/produtos', [EventController::class,'produto']);
Route::get('/produtos_Teste/{id?}', function ($id = null) {
    return view('product',['id'=> $id]);
});
