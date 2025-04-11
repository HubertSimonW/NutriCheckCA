{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Products') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($products as $product)
                <x-product-card :product="$product" />
            @endforeach
        </div>
    </div>
</x-app-layout> --}}

@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">All Products</h1>

        @if($products->count())
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($products as $product)
                    <a href="{{ route('products.show', $product->id) }}" class="block border rounded p-4 shadow bg-white hover:shadow-lg transition">
                        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="h-48 w-full object-cover rounded mb-4">
                        <h2 class="text-xl font-semibold">{{ $product->name }}</h2>
                        <p>Protein: {{ $product->protein }}g</p>
                        <p>Carbs: {{ $product->carbs }}g</p>
                        <p>Fat: {{ $product->fat }}g</p>
                        <p>Calories: {{ $product->cal }} kcal</p>

                        @if ($product->is_eco_friendly)
                            <span class="inline-block mt-2 px-2 py-1 text-xs font-medium bg-green-100 text-green-700 rounded">
                                Eco-Friendly
                            </span>
                        @endif
                    </a>
                @endforeach
            </div>
        @else
            <p>No products found.</p>
        @endif
    </div>
@endsection






