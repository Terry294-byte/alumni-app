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
           <!-- Update Profile -->
<a href="{{ route('student.profile.edit') }}" 
   class="btn btn-primary btn-sm my-2" 
   style="border-radius: 8px; font-weight: 500; padding: 6px 14px; font-size: 14px; box-shadow: 0 3px 6px rgba(0, 123, 255, 0.2);">
   Update Profile
</a>

                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
