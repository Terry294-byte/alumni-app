@extends('layouts.admin')


@section('content')
<h2>Add New Event</h2>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.events.store') }}" method="POST">
    @csrf

    <label>Title:</label><br>
    <input type="text" name="title" value="{{ old('title') }}"><br><br>

    <label>Description:</label><br>
    <textarea name="description">{{ old('description') }}</textarea><br><br>

    <label>Date:</label><br>
    <input type="date" name="event_date" value="{{ old('event_date') }}"><br><br>

    <label>Location:</label><br>
    <input type="text" name="location" value="{{ old('location') }}"><br><br>

    <button type="submit">Save Event</button>
</form>
@endsection
