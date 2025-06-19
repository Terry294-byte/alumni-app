@extends('layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(to right, #9D50BB, #6E48AA);
    }
    .register-card {
        border-radius: 15px;
        padding: 30px;
        max-width: 400px;
        margin: auto;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        background-color: #fff;
        position: relative;
    }
    .avatar {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin: -70px auto 20px;
        background: url('https://cdn-icons-png.flaticon.com/512/3135/3135715.png') no-repeat center;
        background-size: cover;
        border: 4px solid #fff;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        top: 0;
    }
    .register-header {
        margin-top: 60px;
        text-align: center;
    }
    .btn-register {
        background-color: #007bff;
        color: #fff;
        border-radius: 50px;
    }
    .btn-register:hover {
        background-color: #0056b3;
    }
</style>

<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="register-card">
        <div class="avatar"></div>
        <div class="register-header">
            <h4>Sign Up</h4>
            <small class="text-muted">Create your student account</small>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/register" class="mt-4">
            @csrf

            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-register">SIGN UP</button>
            </div>
        </form>

        <div class="text-center mt-3">
            <small class="text-muted">Already have an account? <a href="/login" class="fw-bold">Login</a></small>
        </div>
    </div>
</div>
@endsection
