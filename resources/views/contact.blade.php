@extends('layouts.app')

@section('content')
<style>
    .section {
        padding: 60px 0;
    }
</style>

<div class="container section">
    <h2 class="text-center mb-4">Contact Us</h2>
    <p class="text-center mb-4">Have questions, ideas, or feedback? We'd love to hear from you.</p>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="#">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name *</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="e.g. Terry Wambui" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email *</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="e.g. yourname@example.com" required>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject *</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="e.g. Feedback, Collaboration..." required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Your Message *</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-4">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
