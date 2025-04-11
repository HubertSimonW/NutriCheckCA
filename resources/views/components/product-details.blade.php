@props(['product'])

<!-- Product Details Component -->
<div class="border rounded-lg shadow-md p-6 bg-white max-w-xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $product->name }}</h1>

    <div class="overflow-hidden rounded-lg mb-4 flex justify-center">
        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="w-full max-w-xs h-auto object-cover">
    </div>

    <div class="text-gray-700 space-y-2">
        <p><strong>Size:</strong> {{ $product->size }}</p>
        <p><strong>Carbs:</strong> {{ $product->carbs }}g</p>
        <p><strong>Fat:</strong> {{ $product->fat }}g</p>
        <p><strong>Protein:</strong> {{ $product->protein }}g</p>
        <p><strong>Calories:</strong> {{ $product->cal }} kcal</p>

        @if ($product->is_eco_friendly)
            <span class="inline-block px-3 py-1 text-xs font-semibold bg-green-100 text-green-700 rounded">
                Eco-Friendly
            </span>
        @endif
    </div>
</div>
