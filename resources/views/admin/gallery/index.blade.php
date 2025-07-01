@extends('layouts.admin')

@section('title', 'Gallery')

@section('content')
    <h4 class="mb-3">Gallery</h4>
    <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary mb-3">Upload Image</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        @foreach($images as $img)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('storage/' . $img->image) }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <p class="card-text">{{ $img->caption }}</p>
                        <form method="POST" action="{{ route('admin.gallery.destroy', $img->id) }}">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
