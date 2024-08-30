@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')
    <h1 class="mb-4">Edit Category</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
        </div>

        <div class="form-group">
            <label for="image">Category Image</label>
            <input type="file" class="form-control-file" id="image" name="image">
            @if ($category->image)
                <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" style="width: 50px; height: 50px; margin-top: 10px;">
            @endif
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="Active" {{ $category->status == 'Active' ? 'selected' : '' }}>Active</option>
                <option value="Inactive" {{ $category->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Category</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection