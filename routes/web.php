<?php

use App\Http\Controllers\producetcontroller;
use Illuminate\Support\Facades\Route;



Route::get('/', [producetcontroller::class, 'index'])->name('products.index');
Route::get('/create', [producetcontroller::class, 'create'])->name('products.create');
Route::post('/product/store', [producetcontroller::class, 'store']);
Route::get('/product/{id}/edit', [producetcontroller::class, 'edit']);
Route::put('/product/{id}/update', [producetcontroller::class, 'update']);
Route::get('/product/{id}/delete', [producetcontroller::class, 'destroy']);
