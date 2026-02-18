<?php

use App\Http\Controllers\admin\BooksController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\FeaturedBooksController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\pages\HomepageController;
use Illuminate\Support\Facades\Route;

//guest routes
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('auth.register');
    Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.login');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

//auth routes
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

//admin routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/books', [BooksController::class, 'index'])->name('admin.books.index');
    Route::post('/admin/books', [BooksController::class, 'store'])->name('admin.books.store');
    Route::get('/admin/books/{id}', [BooksController::class, 'show'])->name('admin.books.show');
    Route::put('/admin/books/{id}', [BooksController::class, 'update'])->name('admin.books.update');
    Route::delete('/admin/books/{id}', [BooksController::class, 'destroy'])->name('admin.books.destroy');

    Route::get('/admin/featuredBooks', [FeaturedBooksController::class, 'index'])->name('admin.featuredBooks.index');
    Route::post('/admin/featuredBooks', [FeaturedBooksController::class, 'store'])->name('admin.featuredBooks.store');
    Route::get('/admin/featuredBooks/{id}', [FeaturedBooksController::class, 'show'])->name('admin.featuredBooks.show');
    Route::put('/admin/featuredBooks/{id}', [FeaturedBooksController::class, 'update'])->name('admin.featuredBooks.update');
    Route::delete('/admin/featuredBooks/{id}', [FeaturedBooksController::class, 'destroy'])->name('admin.featuredBooks.destroy');
});


Route::get('/', [HomepageController::class, 'index'])->name('pages.index');

