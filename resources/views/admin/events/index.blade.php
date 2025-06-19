@extends('layouts.app')

@section('content')
<h2>All Events</h2>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<a href="{{ route('admin.events.create') }}" style="
    display: inline-block;
    background-color: #0d6efd;
    color: white;
    padding: 8px 16px;
    text-decoration: none;
    border-radius: 5px;
    margin-bottom: 15px;
">
    + Add New Event
</a>

<table border="1" cellpadding="10" cellspacing="0" style="width: 100%;">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Date</th>
            <th>Location</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($events as $event)
        <tr>
            <td>{{ $event->title }}</td>
            <td>{{ $event->description }}</td>
            <td>{{ \Carbon\Carbon::parse($event->event_date)->toFormattedDateString() }}</td>
            <td>{{ $event->location }}</td>
            <td>
                <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Delete this event?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="color: red;">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
