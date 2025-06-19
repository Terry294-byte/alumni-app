@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Update Profile</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('student.profile.update') }}" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            <div class="col-md-4 text-center">
                <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('default-avatar.png') }}"
                     alt="Profile Picture"
                     class="img-thumbnail rounded-circle"
                     style="width: 120px; height: 120px;">
                <input type="file" name="profile_picture" class="form-control mt-2">
            </div>
            <div class="col-md-8">
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Save Changes</button>
                <a href="{{ route('student.profile.show') }}" class="btn btn-secondary ms-2">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection
