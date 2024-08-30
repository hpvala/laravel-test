@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
    <h1 class="mb-4">Product Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $product->name }}</h5>
            <p class="card-text">Description: {{ $product->description }}</p>
            <p class="card-text">Price: {{ $product->price }}</p>
            <p class="card-text">Category: {{ $product->category->name }}</p>
            <p class="card-text">Status: {{ $product->status }}</p>
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 100px; height: 100px;">
            @endif
        </div>
    </div>

    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-4">Back to Products</a>
@endsection
