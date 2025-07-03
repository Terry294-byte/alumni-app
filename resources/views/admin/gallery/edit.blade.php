@extends('layouts.admin')

@section('title', 'Edit Gallery Image')

@section('content')
    <h4>Edit Image</h4>

    <form action="{{ route('admin.gallery.update', $image->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Current Image</label><br>
            <img src="{{ asset('storage/' . $image->image) }}" alt="Current Image" style="max-width: 300px; max-height: 300px;">
        </div>

        <div class="mb-3">
            <label>Replace Image (optional)</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="mb-3">
            <label>Caption</label>
            <input type="text" name="caption" class="form-control" value="{{ old('caption', $image->caption) }}">
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('admin.gallery.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
