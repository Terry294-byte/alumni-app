@extends('layouts.app')

@section('content')
<style>
    body {
        background: #f4f4f4;
    }

    .register-wrapper {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
    }

    .register-card {
        position: relative;
        background-color: #ffffff;
        padding: 60px 30px 30px; /* extra top padding for avatar */
        border-radius: 15px;
        width: 100%;
        max-width: 420px;
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
    }

    .avatar {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        background: url('https://cdn-icons-png.flaticon.com/512/3135/3135715.png') no-repeat center center;
        background-size: cover;
        border: 4px solid white;
        position: absolute;
        top: -45px;
        left: 50%;
        transform: translateX(-50%);
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.15);
    }

    .register-header {
        margin-top: 20px;
        text-align: center;
    }

    .btn-register {
        background-color: #007bff;
        color: #fff;
        border-radius: 50px;
        font-weight: bold;
    }

    .btn-register:hover {
        background-color: #0056b3;
    }

    .form-label {
        font-weight: 500;
    }
</style>

<div class="register-wrapper">
    <div class="register-card">
        <div class="avatar"></div>
        <div class="register-header">
            <h4 class="fw-bold">Sign Up</h4>
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

            <div class="d-grid mt-4">
                <button type="submit" class="btn btn-register">SIGN UP</button>
            </div>
        </form>

        <div class="text-center mt-3">
            <small class="text-muted">Already have an account? <a href="/login" class="fw-bold text-primary">Login</a></small>
        </div>
    </div>
</div>
@endsection
