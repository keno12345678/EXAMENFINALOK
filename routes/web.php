<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController; 
use App\Http\Controllers\ClienteController; 

Route::get('/',[WebController::class,'home'])->name('web.home'); 
Route::get('/servicios',[WebController::class,'servicios'])->name('web.servicios'); 
Route::get('/proyectos',[WebController::class,'proyectos'])->name('web.proyectos'); 
Route::get('/blog',[WebController::class,'blog'])->name('web.blog'); 
Route::get('/contacto',[WebController::class,'contacto'])->name('web.contacto'); 

Route::get('/clientes',[ClienteController::class,'index'])->name('web.clientes'); 
Route::post('/clientes/store',[ClienteController::class,'store'])->name('web.clientes.store'); 
Route::get('/clientes/{id}',[ClienteController::class,'show'])->name('web.clientes.show'); 
Route::get('/clientes/edit/{id}',[ClienteController::class,'edit'])->name('web.clientes.edit'); 
Route::put('/clientes/edit/{id}',[ClienteController::class,'update'])->name('web.clientes.update'); 
Route::delete('/clientes/destroy/{id}',[ClienteController::class,'destroy'])->name('web.clientes.destroy'); 