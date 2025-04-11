@props(['product'])

<a href="{{ route('products.show', $product->id) }}"
    class="block border border-gray-200 rounded-lg overflow-hidden shadow hover:shadow-lg transition duration-300 bg-white">
    <div class="h-48 overflow-hidden flex justify-center items-center bg-gray-100">
        <!-- Display Product Image -->
        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="object-cover h-full">
    </div>
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-1">{{ $product->name }}</h2>
        <p class="text-sm text-gray-600">Protein: {{ $product->protein }}g</p>
        <p class="text-sm text-gray-600">Carbs: {{ $product->carbs }}g</p>
        <p class="text-sm text-gray-600">Fats: {{ $product->fat }}g</p>
        <p class="text-sm text-gray-600">Calories: {{ $product->cal }} kcal</p>

        {{-- Eco tag --}}
        @if ($product->is_eco_friendly)
            <span class="inline-block mt-2 px-2 py-1 text-xs font-medium bg-green-100 text-green-700 rounded">
                Eco-Friendly
            </span>
        @endif
    </div>
</a>
