

<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderHistoryController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReportExportController;
use App\Http\Controllers\UserCrudController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', UserCrudController::class);

Route::resource('orders', OrderController::class)->except(['show']);

require __DIR__.'/orders_history.php';

Route::get('reports', [ReportController::class, 'index'])->name('reports.index');
Route::get('reports/pdf', [ReportController::class, 'pdf'])->name('reports.pdf');
Route::get('reports/export/pdf', [ReportExportController::class, 'pdf'])->name('reports.export.pdf');
Route::get('orders/history', [OrderHistoryController::class, 'index'])->name('orders.history');
Route::post('orders/history/{id}/restore', [OrderHistoryController::class, 'restore'])->name('orders.history.restore');
Route::delete('orders/history/{id}/force-delete', [OrderHistoryController::class, 'forceDelete'])->name('orders.history.forceDelete');
