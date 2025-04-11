{{-- <h1>{{ $product->name }}</h1>

<h3>Related Products:</h3>
<ul>
    @foreach($relatedProducts as $relatedProduct)
        <li>{{ $relatedProduct->name }}</li>
    @endforeach
</ul> --}}

extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $product->name }}</h1>
        <p><strong>Size:</strong> {{ $product->size }}</p>
        <p><strong>Carbs:</strong> {{ $product->carbs }}g</p>
        <p><strong>Fat:</strong> {{ $product->fat }}g</p>
        <p><strong>Protein:</strong> {{ $product->protein }}g</p>
        <p><strong>Calories:</strong> {{ $product->cal }}cal</p>

        <h3>Related Products:</h3>
        <ul>
            @foreach($relatedProducts as $relatedProduct)
                <li>{{ $relatedProduct->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection