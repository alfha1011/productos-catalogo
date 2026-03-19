<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

Route::get('/',              [PageController::class,   'inicio'])->name('inicio');
Route::get('/nosotros',      [PageController::class,   'nosotros'])->name('nosotros');
Route::get('/catalogo',      [ProductController::class,'catalogo'])->name('catalogo');
Route::get('/producto/{id}', [ProductController::class,'detalle'])->name('detalle');
Route::get('/contacto',      [PageController::class,   'contacto'])->name('contacto');