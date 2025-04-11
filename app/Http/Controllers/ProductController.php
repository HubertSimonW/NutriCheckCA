<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Brand;
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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'size' => 'required|string|max:50',
            'carbs' => 'required|numeric|min:0',
            'fat' => 'required|numeric|min:0',
            'protein' => 'required|numeric|min:0',
            'cal' => 'required|numeric|min:0',
            'is_eco_friendly' => 'nullable|boolean',
            'brand_id' => 'required|exists:brands,id',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');
        $isEcoFriendly = $request->has('is_eco_friendly') ? 1 : 0;

        Product::create([
            'name' => $validated['name'],
            'size' => $validated['size'],
            'carbs' => $validated['carbs'],
            'fat' => $validated['fat'],
            'protein' => $validated['protein'],
            'cal' => $validated['cal'],
            'is_eco_friendly' => $isEcoFriendly,
            'brand_id' => $validated['brand_id'],
            'image' => basename($imagePath),
        ]);

        return redirect()->route('products.index')->with('success', 'Product added!');
    }




    public function show($id)
    {
        $product = Product::findOrFail($id);
        $suggestions = Product::where('id', '!=', $product->id)->inRandomOrder()->limit(4)->get();

        return view('products.show', compact('product', 'suggestions'));
    }






    public function edit(Product $product)
    {
        $brands = Brand::all();
        return view('products.edit', compact('product', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'size' => 'required|string|max:50',
            'carbs' => 'required|numeric|min:0',
            'fat' => 'required|numeric|min:0',
            'protein' => 'required|numeric|min:0',
            'cal' => 'required|numeric|min:0',
            'brand_id' => 'required|exists:brands,id',
            'is_eco_friendly' => 'nullable|boolean',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validated['image'] = basename($imagePath);
        } else {
            $validated['image'] = $product->image;
        }

        $validated['is_eco_friendly'] = $request->has('is_eco_friendly');
        $product->update($validated);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }


    public function search(Request $request)
    {
        $query = $request->input('query');

        $products = Product::where('name', 'like', '%' . $query . '%')->get();

        return view('products.index', compact('products'));
    }







}
