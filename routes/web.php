<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReportController;
use App\Http\Middleware\Admin;

use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return redirect()->route('reports.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
    Route::get('/reports/create', [ReportController::class, 'create'])->name('reports.create');
    Route::post('/reports', [ReportController::class, 'store'])->name('reports.store');
    Route::get('/reports/{report}', [ReportController::class, 'show'])->name('reports.show');
    Route::get('/reports/{report}/edit', [ReportController::class, 'edit'])->name('reports.edit');
    Route::put('/reports/{report}', [ReportController::class, 'update'])->name('reports.update');
    Route::delete('/reports/{report}', [ReportController::class, 'destroy'])->name('reports.destroy');
});

require __DIR__ . '/auth.php';

Route::middleware(Admin::class)->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])
        ->name('admin.index');

    Route::patch(
        '/reports/status/{report}',
        [ReportController::class, 'statusUpdate']
    )->name('reports.status.update');
});

