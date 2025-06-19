@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f8f9fa;
    }
    .login-card {
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
    .login-header {
        margin-top: 60px;
        text-align: center;
    }
    .btn-login {
        background-color: #007bff;
        color: #fff;
        border-radius: 50px;
    }
    .btn-login:hover {
        background-color: #0056b3;
    }
</style>

<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="login-card">
        <div class="avatar"></div>
        <div class="login-header">
            <h4>Sign In</h4>
            <small class="text-muted">Sign in to manage all your devices</small>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="mt-4">
            @csrf

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required autofocus>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-2 text-end">
                <a href="#" class="small">Forgot password?</a>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-login">SIGN IN</button>
            </div>
        </form>

        <div class="text-center mt-3">
            <small class="text-muted">Do not have an account? <a href="register" class="fw-bold">Sign Up</a></small>
        </div>
    </div>
</div>
@endsection
