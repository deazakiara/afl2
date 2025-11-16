<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(12);
        return view('products.index', compact('products'));
    }


    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function search(Request $request)
{
    $query = strtolower($request->input('q'));

    // Jika query kosong, kembali ke shop
    if (!$query) {
        return redirect()->route('products');
    }

    $products = Product::whereRaw('LOWER(name) LIKE ?', ["{$query}%"])
                        ->paginate(12)
                        ->withQueryString();

    return view('products.index', compact('products', 'query'));
}



}
