@extends('layouts.app')

@section('content')
<style>
    .section {
        padding: 60px 0;
    }
    .job-card:hover {
        transform: scale(1.01);
        transition: 0.3s ease;
        box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="container section">
    <h2 class="text-center mb-4">Latest Job & Internship Opportunities</h2>
    <p class="text-center mb-5">Here are the most recent opportunities shared by our alumni network and partners.</p>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card job-card p-4">
                <h5 class="card-title">Junior Web Developer – Nairobi</h5>
                <p class="text-muted">Posted by <strong>Altech Solutions</strong> on June 18, 2025</p>
                <p>We’re seeking an entry-level web developer with knowledge in HTML, CSS, JavaScript, and PHP. Internship-to-job conversion available.</p>
                <a href="mailto:careers@altech.co.ke" class="btn btn-primary">Apply Now</a>
            </div>
        </div>
        
        <div class="col-md-6 mb-4">
            <div class="card job-card p-4">
                <h5 class="card-title">Software Engineering Intern – Remote</h5>
                <p class="text-muted">Posted by <strong>BrightCode Hub</strong> on June 20, 2025</p>
                <p>Remote internship focused on backend development with Node.js and MongoDB. Duration: 3 months, with mentorship provided.</p>
                <a href="mailto:hr@brightcode.com" class="btn btn-success">Apply Now</a>
            </div>
        </div>
    </div>

    <!-- You can add more job cards dynamically later from the database -->
</div>
@endsection
