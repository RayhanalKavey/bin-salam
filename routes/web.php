<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return Inertia::render('HomePage');
});
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard.page');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [\App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
// });


