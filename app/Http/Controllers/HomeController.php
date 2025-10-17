<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

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

    public function loadDocumentationPage()
    {
        return Inertia::render('Documentation');
    }

    public function loadDocumentationDetailsPage()
    {
        return Inertia::render('DocumentationDetails');
    }
}
