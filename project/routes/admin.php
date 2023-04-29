<?php

use App\Http\Controllers\Admin\ItemController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function() {
  /* Auth */
  Route::get('/dashboard', fn() => view('admin.dashboard'))->name('dashboard');
  /* Item */
  Route::prefix('items')->name('item.')->group(function() {
    Route::get('/', [ItemController::class, 'index'])->name('index');
  });
});