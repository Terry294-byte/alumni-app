@php
    use Illuminate\Support\Facades\Request;
@endphp

<nav style="
    position: fixed;
    top: 0;
    width: 100%;
    background: #0d6efd;
    padding: 15px 30px;
    color: white;
    z-index: 1000;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
">
    <div style="max-width: 1140px; margin: auto; display: flex; justify-content: space-between; align-items: center;">
        <strong style="font-size: 20px;">🎓 IT Alumni Portal</strong>
        <div style="display: flex; gap: 15px; align-items: center;">
            <a href="{{ url('/') }}"
               style="text-decoration: none; color: white; padding-bottom: 3px; border-bottom: {{ Request::is('/') ? '2px solid white' : 'none' }};"
               onmouseover="this.style.opacity='0.85'" onmouseout="this.style.opacity='1'">
                Home
            </a>

            <a href="{{ url('/about') }}"
               style="text-decoration: none; color: white; padding-bottom: 3px; border-bottom: {{ Request::is('about') ? '2px solid white' : 'none' }};"
               onmouseover="this.style.opacity='0.85'" onmouseout="this.style.opacity='1'">
                About
            </a>

            <a href="{{ url('/events') }}"
               style="text-decoration: none; color: white; padding-bottom: 3px; border-bottom: {{ Request::is('events') ? '2px solid white' : 'none' }};"
               onmouseover="this.style.opacity='0.85'" onmouseout="this.style.opacity='1'">
                Events
            </a>

            <a href="{{ url('/gallery') }}"
               style="text-decoration: none; color: white; padding-bottom: 3px; border-bottom: {{ Request::is('gallery') ? '2px solid white' : 'none' }};"
               onmouseover="this.style.opacity='0.85'" onmouseout="this.style.opacity='1'">
                Gallery
            </a>

            <a href="{{ url('/contact') }}"
               style="text-decoration: none; color: white; padding-bottom: 3px; border-bottom: {{ Request::is('contact') ? '2px solid white' : 'none' }};"
               onmouseover="this.style.opacity='0.85'" onmouseout="this.style.opacity='1'">
                Contact
            </a>

            <a href="{{ route('login') }}"
               style="text-decoration: none; color: white; padding-bottom: 3px; border-bottom: {{ Request::is('login') ? '2px solid white' : 'none' }};"
               onmouseover="this.style.opacity='0.85'" onmouseout="this.style.opacity='1'">
                Login
            </a>

            @auth
                <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('default-avatar.png') }}"
                     alt="Profile Picture"
                     style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; border: 2px solid white; margin-left: 20px;">
            @endauth
    </div>
</nav>
