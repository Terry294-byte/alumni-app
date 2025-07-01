@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Our Photo Gallery</h2>
    <div class="row">
        @foreach($images as $img)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('storage/' . $img->image) }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <p class="card-text text-muted">{{ $img->caption }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
