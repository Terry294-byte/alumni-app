@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Admin Dashboard</h2>
    <p>Welcome, {{ Auth::user()->name }}!</p>

    <div class="list-group">
        <a href="{{ route('admin.events.index') }}" class="list-group-item list-group-item-action">
            Manage Events
        </a>
        <a href="{{ route('admin.alumni.index') }}" class="list-group-item list-group-item-action">
            Manage Alumni
        </a>
        <form method="POST" action="{{ route('logout') }}" class="mt-3">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</div>
@endsection
