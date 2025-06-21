
@extends('layouts.admin')

@section('content')
<h2>Edit Event</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')

    <div class="mb-3">
        <label>Title:</label>
        <input type="text" name="title" value="{{ $event->title }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Description:</label>
        <textarea name="description" class="form-control">{{ $event->description }}</textarea>
    </div>

    <div class="mb-3">
        <label>Date:</label>
        <input type="date" name="event_date" value="{{ $event->event_date }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Location:</label>
        <input type="text" name="location" value="{{ $event->location }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Current Image:</label><br>
        @if($event->image)
            <img src="{{ asset('storage/' . $event->image) }}" alt="Event image" style="max-width: 200px;">
        @else
            <p>No image uploaded.</p>
        @endif
    </div>

    <div class="mb-3">
        <label>Upload New Image (optional):</label>
        <input type="file" name="image" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Update Event</button>
</form>
@endsection
