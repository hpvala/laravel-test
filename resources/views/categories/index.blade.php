@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <h1 class="mb-4">Categories</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Add New Category</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                        @if($category->image)
                            <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" style="width: 50px; height: 50px;">
                        @endif
                    </td>
                    <td>{{ $category->status }}</td>
                    <td>
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection