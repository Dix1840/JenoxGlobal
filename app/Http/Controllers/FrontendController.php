<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display the homepage
     */
    public function index()
    {
        return view('frontend.pages.index');
    }

    /**
     * Display the about page
     */
    public function about()
    {
        return view('frontend.pages.about');
    }

    /**
     * Display the contact page
     */
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    /**
     * Display the categories page
     */
    public function categories()
    {
        return view('frontend.pages.categories');
    }

    /**
     * Display the products listing page
     */
    public function products()
    {
        return view('frontend.pages.products');
    }

    /**
     * Display the product detail page
     */
    public function productDetail($slug)
    {
        return view('frontend.pages.product-detail', compact('slug'));
    }

    /**
     * Display the certificates page
     */
    public function certificates()
    {
        return view('frontend.pages.certificates');
    }

    /**
     * Display the FAQ page
     */
    public function faq()
    {
        return view('frontend.pages.faq');
    }

    /**
     * Handle contact form submission
     */
    public function sendContact(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'country' => 'required|string|max:100',
            'product_interest' => 'required|string|max:255',
            'quantity' => 'required|string|max:255',
            'destination_port' => 'required|string|max:255',
            'incoterm' => 'nullable|string|max:50',
            'hs_code' => 'nullable|string|max:20',
            'message' => 'required|string',
            'newsletter' => 'nullable|boolean',
        ]);

        // Here you would typically:
        // 1. Save to database
        // 2. Send email notification
        // 3. Return success response

        return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
