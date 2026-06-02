<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        // $stats = [
        //     'total_products'   => Product::count(),
        //     'total_customers'  => User::count(),
        //     'total_categories' => Product::distinct('category')->count('category'),
        //     'total_inquiries'  => 0,
        // ];
        $stats = [
            'total_products'   => 0,
            'total_customers'  => 0,
            'total_categories' => 0,
            'total_inquiries'  => 0,
        ];

        $recent_products = Product::latest()->take(10)->get();

        return view('backend.pages.dashboard', compact('stats', 'recent_products'));
    }
}
