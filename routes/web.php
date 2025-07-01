<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentProfileController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AlumniController;

// Admin controllers
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\AboutController;

// Home page
Route::get('/', fn() => view('home'));

// Auth routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);

// Email verification
Route::middleware(['auth'])->group(function () {
    Route::post('/email/verification-notification', function () {
        request()->user()->sendEmailVerificationNotification();
        return back()->with('status', 'verification-link-sent');
    })->middleware(['throttle:6,1'])->name('verification.send');
});

// Dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
    Route::get('/admin/dashboard', fn() => view('dashboards.admin'))->name('admin.dashboard');
    Route::get('/student/dashboard', fn() => view('dashboards.student'))->name('student.dashboard');
});

// Profile
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/student/profile/edit', [StudentProfileController::class, 'edit'])->name('student.profile.edit');
    Route::get('/student/profile', [StudentProfileController::class, 'show'])->name('student.profile.show');
    Route::post('/student/profile/update', [StudentProfileController::class, 'update'])->name('student.profile.update');

    Route::put('/password', [PasswordController::class, 'update'])->name('password.update');
});

// Public pages
Route::get('/about', fn() => view('about'));
Route::get('/contact', fn() => view('contact'));
Route::get('/jobs', fn() => view('jobs'));

// Alumni
Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni.index');
Route::get('/alumni/create', [AlumniController::class, 'create'])->name('alumni.create');
Route::post('/alumni', [AlumniController::class, 'store'])->name('alumni.store');
Route::delete('/alumni/{id}', [AlumniController::class, 'destroy'])->name('alumni.destroy');

// Public events view
Route::get('/events', [EventController::class, 'index'])->name('events.index');

// Public gallery
Route::get('/gallery', function () {
    $images = \App\Models\Gallery::latest()->get();
    return view('gallery.index', compact('images'));
})->name('gallery');

// Admin-only routes
Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    // Events
    Route::get('/events', [AdminEventController::class, 'index'])->name('events.index');
    Route::get('/events/create', [AdminEventController::class, 'create'])->name('events.create');
    Route::post('/events', [AdminEventController::class, 'store'])->name('events.store');
    Route::get('/events/{id}/edit', [AdminEventController::class, 'edit'])->name('events.edit');
    Route::put('/events/{id}', [AdminEventController::class, 'update'])->name('events.update');
    Route::delete('/events/{id}', [AdminEventController::class, 'destroy'])->name('events.destroy');

    // Members
    Route::resource('members', MemberController::class)->except(['show']);

    // In routes/web.php inside the 'admin' group
Route::get('/about', [AboutController::class, 'index'])->name('about');

});