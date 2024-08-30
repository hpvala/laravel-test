@extends('layouts.app')

@section('title', 'Category Details')

@section('content')
    <h1 class="mb-4">Category Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $category->name }}</h5>
            <p class="card-text">Status: {{ $category->status }}</p>
            @if($category->image)
                <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" style="width: 100px; height: 100px;">
            @endif
        </div>
    </div>

    <h2 class="mt-4">Products in this Category</h2>
    <ul class="list-group">
        @foreach ($category->products as $product)
            <li class="list-group-item">
                <h5>{{ $product->name }}</h5>
                <p>Description: {{ $product->description }}</p>
                <p>Price: {{ $product->price }}</p>
                <p>Status: {{ $product->status }}</p>
                <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">View Product</a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-4">Back to Categories</a>
@endsection
