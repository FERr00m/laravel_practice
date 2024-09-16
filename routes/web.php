<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('workers')->group(function () {
    Route::get('/', [\App\Http\Controllers\WorkerController::class, 'index'])->name('worker.index');
    Route::get('/create', [\App\Http\Controllers\WorkerController::class, 'create'])->name('worker.create');
    Route::get('/{worker}', [\App\Http\Controllers\WorkerController::class, 'show'])->name('worker.show');

    Route::post('/', [\App\Http\Controllers\WorkerController::class, 'store'])->name('worker.store');
    Route::patch('/{worker}', [\App\Http\Controllers\WorkerController::class, 'update'])->name('worker.update');
    Route::get('/{worker}/edit', [\App\Http\Controllers\WorkerController::class, 'edit'])->name('worker.edit');

    Route::delete('/{worker}', [\App\Http\Controllers\WorkerController::class, 'delete'])->name('worker.delete');
});


