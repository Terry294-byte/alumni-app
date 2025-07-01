@extends('layouts.admin')

@section('title', 'Super Admin Dashboard')

@section('content')
<div class="d-flex align-items-center mb-4">
    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" 
         alt="Profile" 
         class="rounded-circle me-3"
         style="width: 80px; height: 80px; object-fit: cover; border: 3px solid #0d6efd;">
    <div>
        <h3 class="mb-0">Welcome, {{ Auth::user()->name }} 👋</h3>
        <small class="text-muted">Super Admin Panel Overview</small>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body">
                <h5 class="card-title text-primary"><i class="bi bi-people-fill me-2"></i>Total Users</h5>
                <h2 class="fw-bold">{{ $totalUsers ?? '0' }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body">
                <h5 class="card-title text-success"><i class="bi bi-star-fill me-2"></i>Total Reviews</h5>
                <h2 class="fw-bold">{{ $totalReviews ?? '0' }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body">
                <h5 class="card-title text-warning"><i class="bi bi-person-badge-fill me-2"></i>Total Members</h5>
                <h2 class="fw-bold">{{ $totalMembers ?? '0' }}</h2>
            </div>
        </div>
    </div>
</div>
@endsection
