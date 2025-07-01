@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Upcoming Events</h1>
    @if($events->isEmpty())
        <p>No events found.</p>
    @else
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach($events as $event)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        @if($event->image)
                            <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="{{ $event->title }}" style="height: 200px; object-fit: cover;">
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-text flex-grow-1">{{ \Illuminate\Support\Str::limit($event->description, 100) }}</p>
                            <p class="card-text mb-1"><small class="text-muted">Date: {{ \Carbon\Carbon::parse($event->event_date)->format('F j, Y') }}</small></p>
                            <p class="card-text"><small class="text-muted">Location: {{ $event->location }}</small></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
