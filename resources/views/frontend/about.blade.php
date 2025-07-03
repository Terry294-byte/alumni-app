@extends('layouts.app')

@section('content')
<style>
    .section {
        padding: 60px 0;
    }
    .about-icon {
        font-size: 2.5rem;
        color: #0d6efd;
    }
    .member-card {
        box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 0.075);
        border-radius: 0.25rem;
        overflow: hidden;
        transition: transform 0.3s ease;
    }
    .member-card:hover {
        transform: translateY(-5px);
    }
    .member-photo {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
</style>

<div class="container section">
    <h2 class="text-center mb-4">About Us</h2>
    <p class="text-center mb-5">The IT College Alumni Portal exists to unite our graduates and inspire lifelong connections through shared memories, mentorship, and opportunity.</p>

    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <i class="bi bi-mortarboard-fill about-icon"></i>
            <h5 class="mt-3">Our Mission</h5>
            <p>To support, empower, and celebrate the journey of every IT College graduate through a vibrant alumni network.</p>
        </div>
        <div class="col-md-4 mb-4">
            <i class="bi bi-globe2 about-icon"></i>
            <h5 class="mt-3">Our Reach</h5>
            <p>With alumni working across the globe, we stay connected through events, newsletters, and mentorship programs.</p>
        </div>
        <div class="col-md-4 mb-4">
            <i class="bi bi-stars about-icon"></i>
            <h5 class="mt-3">Our Values</h5>
            <p>Community, growth, innovation, and giving back to uplift the next generation of tech leaders.</p>
        </div>
    </div>

    <h3 class="text-center mt-5 mb-4">Our Team</h3>
    <div class="row">
        @forelse($members as $member)
            <div class="col-md-4 mb-4">
                <div class="member-card">
                    @if($member->photo)
                        <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}" class="member-photo">
                    @else
                        <img src="{{ asset('images/default-profile.png') }}" alt="Default Profile" class="member-photo">
                    @endif
                    <div class="p-3 text-center">
                        <h5>{{ $member->name }}</h5>
                        <p class="text-muted mb-1">{{ $member->position }}</p>
                        <p class="text-muted"><small>{{ $member->email }}</small></p>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">No Team Members to display.</p>
        @endforelse
    </div>

    <div class="text-center mt-5">
        <a href="/contact" class="btn btn-primary">Contact Us</a>
    </div>
</div>
@endsection
