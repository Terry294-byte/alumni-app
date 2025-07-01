<h5 class="text-center py-4 border-bottom">Admin Panel</h5>
<a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
    <i class="bi bi-speedometer2 me-2"></i> Dashboard
</a>
<a href="{{ route('admin.events.index') }}" class="{{ request()->routeIs('admin.events.*') ? 'active' : '' }}">
    <i class="bi bi-calendar-event me-2"></i> Events
</a>
<a href="{{ route('admin.members.index') }}" class="{{ request()->routeIs('admin.members.*') ? 'active' : '' }}">
    <i class="bi bi-people me-2"></i> Members
</a>
<a href="{{ route('admin.gallery.index') }}" class="{{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}">
    <i class="bi bi-images me-2"></i> Gallery
</a>
<a href="{{ route('admin.about') }}" class="{{ request()->routeIs('admin.about') ? 'active' : '' }}">
    <i class="bi bi-info-circle me-2"></i> About Us
</a>
<a href="{{ route('logout') }}"
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <i class="bi bi-box-arrow-right me-2"></i> Logout
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
