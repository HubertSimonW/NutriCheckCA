@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto p-6 bg-white shadow rounded">
        <h1 class="text-2xl font-bold mb-4">Edit Product</h1>

        @if ($errors->any())
            <div class="mb-4 text-red-600">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block font-medium">Product Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label for="size" class="block font-medium">Size</label>
                <input type="text" name="size" id="size" value="{{ old('size', $product->size) }}" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label for="carbs" class="block font-medium">Carbs (g)</label>
                <input type="number" name="carbs" id="carbs" value="{{ old('carbs', $product->carbs) }}" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label for="fat" class="block font-medium">Fat (g)</label>
                <input type="number" name="fat" id="fat" value="{{ old('fat', $product->fat) }}" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label for="protein" class="block font-medium">Protein (g)</label>
                <input type="number" name="protein" id="protein" value="{{ old('protein', $product->protein) }}" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label for="cal" class="block font-medium">Calories (kcal)</label>
                <input type="number" name="cal" id="cal" value="{{ old('cal', $product->cal) }}" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label for="brand_id" class="block text-sm font-medium text-gray-700">Brand</label>
                <select name="brand_id" id="brand_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="" disabled>Select a Brand</option>
                    @foreach (App\Models\Brand::all() as $brand)
                        <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="is_eco_friendly" class="block text-sm font-medium text-gray-700">Eco-Friendly</label>
                <input type="checkbox" name="is_eco_friendly" id="is_eco_friendly" value="1" class="mt-1 rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" {{ $product->is_eco_friendly ? 'checked' : '' }}>
            </div>

            <div class="mb-4">
                <label for="image" class="block font-medium">Update Image (Optional)</label>
                <input type="file" name="image" id="image" class="w-full border rounded px-3 py-2">
            </div>

            <div class="flex justify-between items-center">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                    Update Product
                </button>

                <a href="{{ route('products.index') }}" class="text-gray-500 hover:underline ml-4">Cancel</a>
            </div>
        </form>
    </div>
@endsection
