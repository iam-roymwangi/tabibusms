<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\DocCategory;
use App\Models\DocPage;

class HomeController extends Controller
{
    public function loadHomePage()
    {
        return Inertia::render('Welcome');
    }

    public function loadProductsPage()
    {
        return Inertia::render('Products');
    }

    public function loadAboutPage()
    {
        return Inertia::render('About');
    }

    public function loadContactPage()
    {
        return Inertia::render('Contact');
    }

   public function loadSmsDocsPage()
{
    // 1. Fetch the SMS product with all related categories and pages
    // We use 'docCategories.docPages' to load the full hierarchy
    $product = Product::where('slug', 'sms')
        ->with(['docCategories' => function ($query) {
            $query->orderBy('order'); // Ensure categories are in the right sequence
        }, 'docCategories.docPages' => function ($query) {
            $query->orderBy('order'); // Ensure pages within categories are ordered
        }])
        ->firstOrFail();

    // 2. Pass the data to the Inertia view
    return Inertia::render('docs/Sms', [
        'product' => $product
    ]);
}

    public function loadDocumentationDetailsPage()
    {
        return Inertia::render('DocumentationDetails');
    }

    public function loadSmsPage()
    {
        return Inertia::render('products/Sms');
    }
}
