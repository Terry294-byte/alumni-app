@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>All Events</h2>
    <a href="{{ route('admin.events.create') }}" class="btn btn-primary">+ Add Event</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="row">
    @foreach($events as $event)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                @if($event->image)
                    <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="Event Image">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-text">{{ $event->description }}</p>
                    <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($event->event_date)->toFormattedDateString() }}</p>
                    <p><strong>Location:</strong> {{ $event->location }}</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Delete this event?');">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
