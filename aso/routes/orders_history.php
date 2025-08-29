<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderHistoryController;

Route::get('orders/history', [OrderHistoryController::class, 'index'])->name('orders.history');
Route::post('orders/history/{id}/restore', [OrderHistoryController::class, 'restore'])->name('orders.history.restore');
Route::delete('orders/history/{id}/force-delete', [OrderHistoryController::class, 'forceDelete'])->name('orders.history.forceDelete');
