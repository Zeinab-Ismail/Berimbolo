<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
public function index() {
    $products = Product::all();
    return view('product', compact('products'));
}
public function store(Request $request) {
    $data = $request->validate([
        'name' => 'required',
        'category' => 'required',
        'price' => 'required|numeric',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif',
    ]);

    $imagePath = $request->file('image')->store('products', 'public');

    Product::create([
        'name' => $data['name'],
        'category' => $data['category'],
        'price' => $data['price'],
        'image' => 'storage/' . $imagePath,
    ]);

    return redirect('/products')->with('success', 'Product added successfully!');
}


}
