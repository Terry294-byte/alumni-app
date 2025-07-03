<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - @yield('title', 'Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
            color: white;
        }
        .sidebar a {
            color: white;
            display: block;
            padding: 12px 20px;
            text-decoration: none;
        }
        .sidebar a:hover,
        .sidebar .active {
            background-color: #495057;
        }
        .content {
            padding: 30px;
        }
        .dashboard-box {
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 sidebar">
            <h5 class="text-center py-4 border-bottom">Admin Panel</h5>
            <a href="{{ route('admin.events.index') }}" class="{{ request()->routeIs('admin.events.index') ? 'active' : '' }}">
                <i class="bi bi-calendar-event me-2"></i> Manage Events
            </a>
            <a href="{{ route('alumni.index') }}" class="{{ request()->routeIs('alumni.index') ? 'active' : '' }}">
                <i class="bi bi-people-fill me-2"></i> Manage Alumni
            </a>
            <a href="{{ route('admin.members.index') }}" class="{{ request()->routeIs('admin.members.index') ? 'active' : '' }}">
                <i class="bi bi-person-fill me-2"></i> Manage Members
            </a>
            <a href="{{ route('admin.gallery.index') }}" class="{{ request()->routeIs('gallery
.index') ? 'active' : '' }}">
                <i class="bi bi-image me-2"></i> Gallery
            </a>
            
            <a href="{{ route('student.profile.edit') }}">
                <i class="bi bi-person-circle me-2"></i> Update Profile
            </a>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right me-2"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

        <!-- Main content -->
        <div class="col-md-9 col-lg-10 content">
            @yield('content')
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
