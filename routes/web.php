<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [HomeController::class, 'loadHomePage'])->name('home');

Route::get('/products', [HomeController::class, 'loadProductsPage'])->name('products');

Route::get('/about', [HomeController::class, 'loadAboutPage'])->name('about');

Route::get('/contact', [HomeController::class, 'loadContactPage'])->name('contact');

Route::get('/docs', [HomeController::class, 'loadDocumentationPage'])->name('documentation');

Route::get('/docs/details', [HomeController::class, 'loadDocumentationDetailsPage'])->name('documentation.details');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
