@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>My Profile</h2>

    <div class="card p-4">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('default-avatar.png') }}"
                     alt="Profile Picture"
                     class="img-thumbnail rounded-circle"
                     style="width: 150px; height: 150px;">
            </div>
            <div class="col-md-8">
                <h4>{{ Auth::user()->name }}</h4>
                <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                <p><strong>Role:</strong> {{ Auth::user()->role }}</p>
                <a href="{{ route('student.profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                <a href="{{ url('/student/dashboard') }}" class="btn btn-secondary ms-2">Back to Dashboard</a>
            </div>
        </div>
    </div>
</div>
@endsection
