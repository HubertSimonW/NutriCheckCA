@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold mb-8 text-center">Our Brands & Their Products</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($brands as $brand)
                <div class="bg-white p-6 rounded shadow">
                    <h2 class="text-xl font-semibold mb-4 text-pink-600">{{ $brand->name }}</h2>

                    @forelse ($brand->products as $product)
                        <div class="mb-4 border-t pt-4">
                            <p class="font-bold">{{ $product->name }}</p>
                            <p>Protein: {{ $product->protein }}g</p>
                            <p>Calories: {{ $product->cal }} kcal</p>
                        </div>
                    @empty
                        <p class="text-gray-500 italic">No products yet.</p>
                    @endforelse
                </div>
            @endforeach
        </div>
    </div>
@endsection

