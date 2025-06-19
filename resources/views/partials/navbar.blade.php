<nav style="
    position: fixed;
    top: 0;
    width: 100%;
    background: #0d6efd;
    padding: 15px 30px;
    color: white;
    z-index: 1000;

">
    <div style="max-width: 960px; margin: auto; display: flex; justify-content: space-between;">
        <strong>🎓 IT Alumni Portal</strong>
        <div>
            <a href="{{ url('/') }}" style="color: white; margin-right: 15px;">Home</a>
            <a href="{{ url('/about') }}" style="color: white; margin-right: 15px;">About</a>
            <a href="{{ url('/events') }}" style="color: white; margin-right: 15px;">Events</a>
            <a href="{{ url('/gallery') }}" style="color: white; margin-right: 15px;">Gallery</a>
            <a href="{{ url('/contact') }}" style="color: white;">Contact</a>
			<a href="{{ route('login') }}"style="color: white; margin-left: 15px;">Login</a>

        </div>
    </div>
</nav>
