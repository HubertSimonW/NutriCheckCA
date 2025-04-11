@extends('layouts.app')

@section('content')
<div class="bg-pink-100 py-10">
    <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-4xl font-bold text-center mb-6">Our Products</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($products as $product)
                <div class="bg-white rounded-lg shadow-md p-4 text-center">
                    <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded mb-3">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $product->name }}</h2>
                    <p><strong>Protein:</strong> {{ $product->protein }}g</p>
                    <p><strong>Carbs:</strong> {{ $product->carbs }}g</p>
                    <p><strong>Fat:</strong> {{ $product->fat }}g</p>
                    <p><strong>Calories:</strong> {{ $product->cal }} kcal</p>

                    @if ($product->is_eco_friendly)
                        <span class="inline-block mt-2 px-2 py-1 text-sm font-semibold bg-green-100 text-green-700 rounded">
                            Eco-Friendly
                        </span>
                    @endif

                    <a href="{{ route('products.show', $product->id) }}" class="mt-4 inline-block text-blue-600 underline">View Product</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection








