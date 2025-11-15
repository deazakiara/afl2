<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $featured = Product::latest()->take(2)->get();

        $services = Service::all();

        return view('home', compact('featured', 'services'));
    }
}
