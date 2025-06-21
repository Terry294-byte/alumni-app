@extends('layouts.app')

@section('content')
<style>
    .hero-section {
        background: linear-gradient(to right, #004e92, #000428);
        color: white;
        padding: 80px 0;
        text-align: center;
    }
    .section {
        padding: 60px 0;
    }
    .card:hover {
        transform: scale(1.02);
        transition: 0.3s ease;
        box-shadow: 0 0 15px rgba(0,0,0,0.15);
    }
</style>

<div class="hero-section">
    <div class="container">
        <h1 class="display-4">Welcome to the IT College Alumni Portal</h1>
        <p class="lead">Empowering our alumni to stay connected, succeed, and inspire.</p>
    </div>
</div>

<div class="container section">
    <h2 class="text-center mb-4">Alumni Success Stories</h2>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card p-4">
                <h5 class="card-title">Jane M., Software Engineer at Google</h5>
                <p class="card-text">"The connections I made at IT College helped launch my tech career. I'm proud to give back to the community that shaped me."</p>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card p-4">
                <h5 class="card-title">Brian K., Founder of TechNext</h5>
                <p class="card-text">"After graduation, I started my own tech startup. IT College gave me the confidence and the skills to pursue my dream."</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-light section">
    <div class="container">
        <h2 class="text-center mb-4">Job & Internship Opportunities</h2>
        <p class="text-center">Explore tech roles shared by alumni and partner organizations.</p>
        <div class="text-center mt-3">
            <a href="/jobs" class="btn btn-success">View Opportunities</a>
        </div>
    </div>
</div>

<div class="container section text-center">
    <h2 class="mb-4">Stay Informed</h2>
    <p>Subscribe to our newsletter and never miss updates, alumni meetups, or opportunities.</p>
    <form class="row justify-content-center">
        <div class="col-md-6 col-sm-8">
            <div class="input-group">
                <input type="email" class="form-control" placeholder="Enter your email">
                <button class="btn btn-primary" type="submit">Subscribe</button>
            </div>
        </div>
    </form>
</div>

<div class="bg-dark text-white section">
    <div class="container text-center">
        <h5>Quick Links</h5>
        <div class="row mt-3">
            <div class="col-md-3"><a href="/directory" class="text-white">Alumni Directory</a></div>
            <div class="col-md-3"><a href="/update-profile" class="text-white">Update Profile</a></div>
            <div class="col-md-3"><a href="/contact" class="text-white">Contact Us</a></div>
            <div class="col-md-3"><a href="/mentorship" class="text-white">Mentorship Program</a></div>
        </div>
    </div>
</div>
@endsection
