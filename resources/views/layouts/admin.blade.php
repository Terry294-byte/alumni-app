<!DOCTYPE html>
<html>
<head>
    <title>Admin | Alumni Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding-top: 70px;
            background-color: #f4f4f4;
        }

        .navbar-admin {
            background: linear-gradient(135deg, #000428, #004e92);
            color: white;
        }

        .navbar-admin .nav-link {
            color: white !important;
            margin-right: 20px;
            border-bottom: 2px solid transparent;
        }

        .navbar-admin .nav-link.active,
        .navbar-admin .nav-link:hover {
            border-bottom: 2px solid white;
        }

        .content {
            padding: 20px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top navbar-admin shadow">
    <div class="container-fluid px-4">
        <a class="navbar-brand text-white fw-bold" href="{{ route('admin.dashboard') }}">
            🛡️ Admin Dashboard
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar" aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-white"></span>
        </button>

        <div class="collapse navbar-collapse" id="adminNavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/events*') ? 'active' : '' }}" href="{{ route('admin.events.index') }}">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('admin/alumni*') ? 'active' : '' }}" href="{{ route('alumni.index') }}">Alumni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </li>
            </ul>
        </div>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</nav>

<div class="container content">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
