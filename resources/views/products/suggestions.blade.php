@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-8">
    <h2 class="text-3xl font-bold mb-4">Eco-Friendly Alternatives for {{ $product->name }}</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($suggested as $alt)
            <div class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center">
                <img src="{{ asset('storage/' . $alt->image) }}" alt="{{ $alt->name }}" class="w-full h-48 object-cover rounded">
                <h3 class="mt-4 text-xl font-semibold">{{ $alt->name }}</h3>
                <p class="text-sm text-gray-500 mt-1">Calories: {{ $alt->calories }} kcal</p>
                <p class="text-sm text-gray-500">Eco Rating: {{ $alt->eco_rating ?? 'N/A' }}</p>
                <a href="{{ route('products.show', $alt->id) }}" class="mt-3 inline-block px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                    View Product
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
