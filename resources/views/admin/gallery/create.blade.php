@extends('layouts.admin')

@section('title', 'Upload Gallery Image')

@section('content')
    <h4>Upload Image</h4>

    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Caption</label>
            <input type="text" name="caption" class="form-control">
        </div>
        <button class="btn btn-success">Upload</button>
    </form>
@endsection
