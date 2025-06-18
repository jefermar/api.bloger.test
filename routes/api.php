<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\ApprenticeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

 Route::get('computers', [ComputerController::class,'index'])->name('api.v1.computer.index');
 Route::post('computers', [ComputerController::class,'store'])->name('api.v1.computer.store');
 Route::get('computers/{computer}', [ComputerController::class,'show'])->name('api.v1.computer.show');

 Route::get('apprentices', [ApprenticeController::class,'index'])->name('api.v1.apprentice.index');
 Route::post('apprentices', [ApprenticeController::class,'store'])->name('api.v1.apprentice.store');
 Route::get('apprentices/{apprentice}', [ApprenticeController::class,'show'])->name('api.v1.apprentice.show');