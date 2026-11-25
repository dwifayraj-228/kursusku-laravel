<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

// Route untuk Halaman Beranda
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route JSON untuk Cek Sisa Kursi (Ajax Week 9)
Route::get('/courses/{course}/availability', function (int $course) {
    $availability = [
        1 => ['course' => 'Web Dasar', 'remaining' => 12],
        2 => ['course' => 'PHP Dasar', 'remaining' => 8],
        3 => ['course' => 'Laravel Dasar', 'remaining' => 4],
    ];
    abort_unless(isset($availability[$course]), 404);
    return response()->json($availability[$course]);
})->name('courses.availability');

// Route Resource untuk CRUD Course (Week 10 & 11)
Route::resource('courses', CourseController::class);

// Route Resource untuk Enrollment (Week 12)
// Ini otomatis membuat route enrollments.index, enrollments.create, dan enrollments.store
Route::resource('enrollments', EnrollmentController::class)
    ->only(['index', 'create', 'store']);
    // Route Login
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.process');
});

// Route Logout
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
    
// Route Profil Pengguna
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])
        ->name('profile');

    Route::put('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');
});