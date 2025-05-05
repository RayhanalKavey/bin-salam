<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Models\Service;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('HomePage');
});
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard.page');


// Projects CRUD routes
Route::get('/dashboard/projects', [ProjectController::class, 'index'])->name('project.index');
// Route::get('/dashboard/projects/create', [ProjectController::class, 'create'])->name('project.create');
// Route::post('/dashboard/projects', [ProjectController::class, 'store'])->name('project.store');
// Route::get('/dashboard/projects/{id}', [ProjectController::class, 'show'])->name('project.show');
// Route::get('/dashboard/projects/{id}/edit', [ProjectController::class, 'edit'])->name('project.edit');
// Route::put('/dashboard/projects/{id}', [ProjectController::class, 'update'])->name('project.update');
// Route::delete('/dashboard/projects/{id}', [ProjectController::class, 'destroy'])->name('profile.destroy');

//Blogs CRUD routes

Route::get('/dashboard/blogs', [BlogController::class, 'index'])->name('blog.index');
// Route::get('/dashboard/blogs/create', [BlogController::class, 'create'])->name('blog.create');
// Route::post('/dashboard/blogs', [BlogController::class, 'store'])->name('blog.store');
// Route::get('/dashboard/blogs/{id}', [BlogController::class, 'show'])->name('blog.show');
// Route::get('/dashboard/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
// Route::put('/dashboard/blogs/{id}', [BlogController::class, 'update'])->name('blog.update');
// Route::delete('/dashboard/blogs/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

//Categories CRUD routes

Route::get('/dashboard/categories', [CategoryController::class, 'index'])->name('category.index');
// Route::get('/dashboard/categories/create', [CategoryController::class, 'create'])->name('category.create');
// Route::post('/dashboard/categories', [CategoryController::class, 'store'])->name('category.store');
// Route::get('/dashboard/categories/{id}', [CategoryController::class, 'show'])->name('category.show');
// Route::get('/dashboard/categories/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');

// Services CRUD routes


Route::get('/dashboard/services', [ServiceController::class, 'index'])->name('blog.index');