@extends('layouts.app')

@section('content')
<style>
    .hero-section {
        background: linear-gradient(to right, #004e92, #000428);
        color: white;
        padding: 80px 0;
        text-align: center;
        margin-top: 80px;
    }
    .section {
        padding: 60px 0;
    }
    .card:hover {
        transform: scale(1.02);
        transition: 0.3s ease;
        box-shadow: 0 0 15px rgba(0,0,0,0.15);
    }
    /* Make carousel full width */
    #alumniCarousel {
        max-width: 100vw;
        margin-left: calc(-50vw + 50%);
        margin-right: calc(-50vw + 50%);
        margin-top: -25px;
    }
    #alumniCarousel img {
        width: 100vw;
        object-fit: cover;
    }
</style>

<div id="alumniCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#alumniCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#alumniCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#alumniCarousel" data-bs-slide-to="2"></button>
    </div>
    
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img src="{{ asset('images/slide1.jpg') }}" class="d-block w-100" alt="Graduates">
            <div class="carousel-caption text-start bg-dark bg-opacity-50 p-4 rounded">
                <h3>Careers</h3>
                <p>
                    Graduates in engineering, energy and built environment have rewarding careers as:
                    Electrical engineers, Electronics engineers, Medical engineers, Network Managers, and more.
                </p>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <img src="{{ asset('/images/slide2.jpg') }}" class="d-block w-100" alt="Event">
            <div class="carousel-caption text-start bg-dark bg-opacity-50 p-4 rounded">
                <h3>Global Opportunities</h3>
                <p>Our alumni work in global companies, contributing to software, systems, and innovation worldwide.</p>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <img src="{{ asset('images/slide3.jpg') }}" class="d-block w-100" alt="Graduation">
            <div class="carousel-caption text-start bg-dark bg-opacity-50 p-4 rounded">
                <h3>Strong Community</h3>
                <p>We foster lifelong friendships and support through mentorship, reunions, and networking events.</p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#alumniCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#alumniCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

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
