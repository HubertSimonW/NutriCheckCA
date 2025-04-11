@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="bg-pink-100 py-24 text-center">
        <h1 class="text-6xl font-extrabold text-red-600 mb-8">NutriCheck</h1>
        <p class="max-w-4xl mx-auto text-lg text-gray-700 mb-4 px-4">
            WE STRIVE TO DELIVER IMPORTANT NUTRITIONAL INFORMATION & HELP THE SPREAD OF POLLUTION FROM MACHINERY BY HELPING YOU MAKE THE CHANGE!
        </p>
        <p class="text-md text-gray-600 mt-6">
            According to the barcode search this is your product information:
        </p>
    </section>

    <!-- Product Card -->
    <section class="bg-white max-w-xl mx-auto mt-16 p-8 rounded-lg shadow-md text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">{{ $product->name }}</h2>

        <div class="mb-6">
            <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}" class="w-full max-w-xs mx-auto object-cover rounded-md shadow">
        </div>

        <div class="text-gray-700 space-y-2 text-lg">
            <p><strong>Size:</strong> {{ $product->size }}</p>
            <p><strong>Carbs:</strong> {{ $product->carbs }}g</p>
            <p><strong>Fat:</strong> {{ $product->fat }}g</p>
            <p><strong>Protein:</strong> {{ $product->protein }}g</p>
            <p><strong>Calories:</strong> {{ $product->cal }} kcal</p>

            @if ($product->is_eco_friendly)
                <span class="inline-block mt-2 px-4 py-2 text-sm font-semibold bg-green-100 text-green-700 rounded">
                    Eco-Friendly
                </span>
            @endif
        </div>
    </section>

    <!-- Suggestions Section -->
    <section class="mt-24 max-w-7xl mx-auto px-6 text-center">
        <h3 class="text-2xl font-semibold mb-10">
            Here are some alternative produce sellers with less pollution impact on our environment:
        </h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            @foreach ($suggestions as $suggested)
                <div class="bg-white p-6 rounded-lg shadow text-center text-lg">
                    <p class="font-semibold">{{ $suggested->name }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Membership Section -->
    <section class="bg-gray-300 py-16 px-6 text-center mt-24 rounded-lg max-w-5xl mx-auto">
        <p class="text-2xl font-semibold mb-6">
            This section is currently blocked due to the lack of a membership.
        </p>
        <p class="mb-8 text-gray-800 max-w-3xl mx-auto text-lg">
            Purchase below to gain access to more benefits such as a Smart Calorie Counter, Meal Plans, Custom Macro Tracking, In-Depth Nutrition insights & many more.
        </p>
        <a href="#" class="bg-pink-500 text-white font-semibold px-8 py-3 rounded hover:bg-pink-600 transition text-lg">
            Purchase Membership
        </a>
    </section>

    <!-- Footer -->
    <footer class="mt-32 bg-white py-8 text-center border-t">
        <p class="text-gray-600 text-sm">© 2025 NutriCheck — <a href="#" class="text-pink-500 font-semibold">Purchase Membership</a></p>
    </footer>
@endsection








