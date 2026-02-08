<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [HomeController::class, 'loadHomePage'])->name('home');

Route::get('/products', [HomeController::class, 'loadProductsPage'])->name('products');

Route::get('/products/sms', [HomeController::class, 'loadSmsPage'])->name('products.sms');

Route::get('/about', [HomeController::class, 'loadAboutPage'])->name('about');

Route::get('/contact', [HomeController::class, 'loadContactPage'])->name('contact');

Route::get('/docs/sms/', [HomeController::class, 'loadSmsDocsPage'])->name('docs.sms');

Route::get('/docs/details', [HomeController::class, 'loadDocumentationDetailsPage'])->name('documentation.details');

Route::get('dashboard', function () {
    if (auth()->user()->role === 'super_admin') {
        return Inertia::render('admin/Dashboard', [
            'products' => Product::all(),
        ]);
    }

    return Inertia::render('client/Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
