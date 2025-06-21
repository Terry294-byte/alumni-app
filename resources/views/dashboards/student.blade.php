@extends('layouts.app')

@section('content')
<style>
    body {
        background: #f8f9fa;
    }
    .dashboard-card {
        border-radius: 15px;
        box-shadow: 0 0 15px rgba(0,0,0,0.05);
        transition: transform 0.2s;
    }
    .dashboard-card:hover {
        transform: scale(1.01);
    }
    .dashboard-icon {
        font-size: 40px;
        color: #007bff;
    }
    .profile-picture {
        position: absolute;
        top: 20px;
        right: 30px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #007bff;
    }
    .logout-button {
        position: absolute;
        top: 20px;
        left: 30px;
    }
</style>

<div class="container mt-5 position-relative">
    <!-- Logout -->
    <div class="logout-button">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-danger">Logout</button>
        </form>
    </div>

    <!-- Profile Picture -->
    <div>
        @if(Auth::user()->profile_picture)
            <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile Picture" class="profile-picture">
        @else
            <img src="{{ asset('default-avatar.png') }}" alt="Default Avatar" class="profile-picture">
        @endif
    </div>

    <!-- Header -->
    <div class="text-center mb-5">
        <h2>Welcome, {{ Auth::user()->name }} 🎓</h2>
        <p class="text-muted">Here’s what’s happening with your courses today.</p>
    </div>

    <div class="row g-4">
        <!-- Assignments -->
        <div class="col-md-6 col-lg-4">
            <div class="card dashboard-card p-4">
                <div class="d-flex align-items-center mb-3">
                    <i class="dashboard-icon bi bi-journal-text me-3"></i>
                    <h5 class="mb-0">Assignments</h5>
                </div>
                <p>Check new assignments and submit before due dates.</p>
                <a href="#" class="btn btn-sm btn-outline-primary">View Assignments</a>
            </div>
        </div>

        <!-- Timetable -->
        <div class="col-md-6 col-lg-4">
            <div class="card dashboard-card p-4">
                <div class="d-flex align-items-center mb-3">
                    <i class="dashboard-icon bi bi-calendar-week me-3"></i>
                    <h5 class="mb-0">My Timetable</h5>
                </div>
                <p>View upcoming classes and sessions for the week.</p>
                <a href="#" class="btn btn-sm btn-outline-success">View Schedule</a>
            </div>
        </div>

        <!-- Progress -->
        <div class="col-md-6 col-lg-4">
            <div class="card dashboard-card p-4">
                <div class="d-flex align-items-center mb-3">
                    <i class="dashboard-icon bi bi-graph-up-arrow me-3"></i>
                    <h5 class="mb-0">My Progress</h5>
                </div>
                <p>Track your grades and assignment completion.</p>
                <a href="#" class="btn btn-sm btn-outline-info">View Report</a>
            </div>
        </div>

        <!-- Update Profile -->
        <a href="{{ route('student.profile.edit') }}" class="btn btn-primary btn-lg w-100 my-4" style="border-radius: 10px; font-weight: 600; box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);">
            Update Profile
        </a>
    </div>
</div>
@endsection
