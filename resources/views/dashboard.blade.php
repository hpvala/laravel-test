@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-5">
    <div class="row">
        <!-- Categories Section -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Categories</h5>
                    <p class="card-text">Manage your product categories.</p>
                    <a href="{{ route('categories.index') }}" class="btn btn-primary">Go to Categories</a>
                </div>
            </div>
        </div>

        <!-- Products Section -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Products</h5>
                    <p class="card-text">Manage your products.</p>
                    <a href="{{ route('products.index') }}" class="btn btn-primary">Go to Products</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
