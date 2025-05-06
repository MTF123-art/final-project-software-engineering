<?php

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\AdminProfileController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;




// public routes
Route::view('/', 'public.home')->name('home');
Route::view('/about', 'public.about')->name('about');
Route::view('/contact', 'public.contact')->name('contact');
Route::view('/destination', 'public.destination')->name('destination');
Route::view('/destination/detail', 'public.detail-destination')->name('detail-destination');

// auth routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login-form');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register-form');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// user routes
Route::middleware(['auth', 'role:user'])->prefix('user')->name('user.')->group(function () {
    Route::view('/dashboard', 'user.dashboard')->name('dashboard');
});

// admin routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    // admin dashboard
    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
    
    // profile routes
    Route::get('/profile', [AdminProfileController::class,'index'])->name('profile');
    Route::post('/profile/edit', [AdminProfileController::class,'editProfile'])->name('profile.edit');
    Route::post('/profile/edit-password', [AdminProfileController::class,'editPassword'])->name('profile.edit-password');
    // manage users
    Route::prefix('user-management')->name('user-management.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/filter/{role}', [UserController::class, 'filter'])->name('filter');
        Route::get('/create', [UserController::class, 'createForm'])->name('create-form');
        Route::post('/create', [UserController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [UserController::class, 'editForm'])->name('edit-form');
        Route::post('/edit/{id}', [UserController::class, 'edit'])->name('edit');
        Route::post('/delete/{id}', [UserController::class, 'delete'])->name('delete');
    });
    

});

// pengelola routes
Route::middleware(['auth', 'role:pengelola'])->prefix('pengelola')->name('pengelola.')->group(function () {
    Route::view('/dashboard', 'pengelola.dashboard')->name('dashboard');
});

