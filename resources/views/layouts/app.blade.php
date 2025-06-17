<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alumni Portal</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f4f4; }
        header, footer { background: #0d6efd; color: white; padding: 15px 30px; }
        nav a { color: white; margin-right: 20px; text-decoration: none; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        .container { max-width: 960px; margin: 30px auto; background: white; padding: 20px; border-radius: 10px; }
        footer p { margin: 0; text-align: center; }
    </style>
</head>
<body>
    <header>
        <h2>🎓 IT College Alumni Portal</h2>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/events') }}">Events</a>
            <a href="{{ url('/gallery') }}">Gallery</a>
            <a href="{{ url('/contact') }}">Contact</a>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} IT College Alumni Association. All Rights Reserved.</p>
    </footer>
</body>
</html>
