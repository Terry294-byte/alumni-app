@php
    use Illuminate\Support\Facades\Request;
@endphp

<style>
    .admin-navbar {
        position: fixed;
        top: 0;
        width: 100%;
        background: #0d6efd;
        padding: 15px 30px;
        color: white;
        z-index: 1000;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .admin-navbar .container {
        max-width: 1140px;
        margin: auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .admin-navbar .nav-link {
        text-decoration: none;
        color: white;
        padding-bottom: 3px;
        transition: opacity 0.3s;
    }

    .admin-navbar .nav-link:hover {
        opacity: 0.85;
    }

    .admin-navbar .active {
        border-bottom: 2px solid white;
    }

    .admin-navbar .profile-img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid white;
        margin-left: 20px;
    }
</style>

<nav class="admin-navbar">
    <div class="container">
        <strong style="font-size: 20px;">🎓 IT Alumni Portal</strong>
        <div style="display: flex; gap: 15px; align-items: center;">
            <a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
                Home
            </a>
            <a href="{{ url('/about') }}" class="nav-link {{ Request::is('about') ? 'active' : '' }}">
                About
            </a>
            <a href="{{ url('/events') }}" class="nav-link {{ Request::is('events') ? 'active' : '' }}">
                Events
            </a>
            <a href="{{ url('/gallery') }}" class="nav-link {{ Request::is('gallery') ? 'active' : '' }}">
                Gallery
            </a>
            <a href="{{ url('/contact') }}" class="nav-link {{ Request::is('contact') ? 'active' : '' }}">
                Contact
            </a>
            <a href="{{ route('login') }}" class="nav-link {{ Request::is('login') ? 'active' : '' }}">
                Login
            </a>

            <form action="{{ url('/search') }}" method="GET" style="display: flex; align-items: center;">
                <input type="text" name="query" placeholder="Search..." 
                       style="padding: 5px 10px; border-radius: 4px 0 0 4px; border: none; outline: none; height: 30px;">
                <button type="submit" 
                        style="padding: 5px 10px; border-radius: 0 4px 4px 0; border: none; background: white; color: #0d6efd; cursor: pointer; height: 30px;">
                    🔍
                </button>
            </form>

            @auth
                <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('default-avatar.png') }}"
                     alt="Profile Picture"
                     class="profile-img">
            @endauth
        </div>
    </div>
</nav>
