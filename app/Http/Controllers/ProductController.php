<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;  // To use the brand model
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all(); // Get all of the products
        return view('products.index', compact('products')); // Pass this to the view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        return view('products.create', compact('brands')); // Pass the brands to the view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate inputs
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'size' => 'required|string|max:50',
            'carbs' => 'required|numeric|min:0',
            'fat' => 'required|numeric|min:0',
            'protein' => 'required|numeric|min:0',
            'cal' => 'required|numeric|min:0',
            'is_eco_friendly' => 'nullable|boolean',
            'brand_id' => 'required|exists:brands,id', // Ensure brand_id exists in the brands table
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Managhe image upload
        $imagePath = $request->file('image')->store('images', 'public');

        // Manage eco friendly field as boolean
        $isEcoFriendly = $request->has('is_eco_friendly') ? 1 : 0;

        // Save to database
        Product::create([
            'name' => $validated['name'],
            'size' => $validated['size'],
            'carbs' => $validated['carbs'],
            'fat' => $validated['fat'],
            'protein' => $validated['protein'],
            'cal' => $validated['cal'],
            'is_eco_friendly' => $isEcoFriendly,
            'brand_id' => $validated['brand_id'],
            'image' => basename($imagePath), // Store the image filename
        ]);

        return redirect()->route('products.index')->with('success', 'Product added!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = \App\Models\Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}

