@extends('layouts.admin')


    <!-- Page Content -->
    <div class="container mt-5 pt-3">
        <div class="dashboard-box">
            <h2 class="mb-3">Welcome, {{ Auth::user()->name }} 👋</h2>

            <div class="list-group">
                <a href="{{ route('admin.events.index') }}" class="list-group-item list-group-item-action">
                    <i class="bi bi-calendar-event me-2"></i> Manage Events
                </a>
                <a href="{{ route('alumni.index') }}" class="list-group-item list-group-item-action">
                    <i class="bi bi-people-fill me-2"></i> Manage Alumni
                </a>
            </div>

            <div class="mt-4">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-box-arrow-right me-1"></i> Logout
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
