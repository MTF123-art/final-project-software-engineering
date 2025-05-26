<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DestinationController as AdminDestinationController;
use App\Http\Controllers\admin\RoleRequestController as AdminRoleRequestController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\landing\LandingController;
use App\Http\Controllers\pengelola\DestinationController as PengelolaDestinationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\user\BookmarkController;
use App\Http\Controllers\user\ReviewController;
use App\Http\Controllers\user\RoleRequestController as UserRoleRequestController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;




// public routes
Route::get('/', [LandingController::class, 'home'])->name('home');
Route::get('/about', [LandingController::class, 'about'])->name('about');
Route::get('/contact', [LandingController::class, 'contact'])->name('contact');
Route::get('/destination/filter/{slug?}', [LandingController::class, 'destination'])->name('destination');
Route::get('/destination/detail/{slug}', [LandingController::class, 'destinationDetail'])->name('detail-destination');

// auth routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login-form');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register-form');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// user routes
Route::middleware(['auth', 'role:user'])->prefix('user')->name('user.')->group(function () {
    Route::view('/dashboard', 'user.dashboard')->name('dashboard');
    // notification
    Route::get('/notication', function(){
        echo 'notication';
    })->name('notification');
    // review
    Route::prefix('review')->name('review.')->group(function () {
        Route::get('/', [ReviewController::class, 'index'])->name('index');
        Route::post('/store/{id}', [ReviewController::class, 'storeReview'])->name('store');
        Route::post('/update/{id}', [ReviewController::class, 'updateReview'])->name('update');
        Route::post('/delete/{id}', [ReviewController::class, 'deleteReview'])->name('delete');
    });
    // bookmark
    Route::prefix('bookmark')->name('bookmark.')->group(function () {
        Route::get('/', [BookmarkController::class, 'index'])->name('index');
        Route::post('/save/{id}', [BookmarkController::class, 'saveBookmark'])->name('save');
        Route::post('/delete/{id}', [BookmarkController::class, 'deleteBookmark'])->name('delete');
    });
    // pengajuan route
    Route::get('/upgrade', [UserRoleRequestController::class, 'upgradeForm'])->name('upgrade');
    Route::post('/upgrade/submit', [UserRoleRequestController::class, 'upgradeSubmit'])->name('upgrade.submit');
    Route::get('/upgrade/status', [UserRoleRequestController::class, 'roleRequestStatus'])->name('upgrade.status');
    Route::post('/upgrade/destroy/{id}', [UserRoleRequestController::class, 'roleRequestDestroy'])->name('upgrade.destroy');
    Route::post('/upgrade/destination/submit', [UserRoleRequestController::class, 'destinationSubmit'])->name('upgrade.destination.submit');
    // // profile routes
    Route::get('/profile', [ProfileController::class,'index'])->name('profile');
    Route::post('/profile/edit', [ProfileController::class,'editProfile'])->name('profile.edit');
    Route::post('/profile/edit-password', [ProfileController::class,'editPassword'])->name('profile.edit-password');
});

// admin routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    // admin dashboard
    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
    // notification
    Route::get('/notication', function(){
        echo 'notication';
    })->name('notification');
    // // profile routes
    Route::get('/profile', [ProfileController::class,'index'])->name('profile');
    Route::post('/profile/edit', [ProfileController::class,'editProfile'])->name('profile.edit');
    Route::post('/profile/edit-password', [ProfileController::class,'editPassword'])->name('profile.edit-password');
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

    Route::prefix('destination')->name('destination.')->group(function () {
        Route::get('/', [AdminDestinationController::class, 'index'])->name('index');
        Route::get('/detail/{id}', [AdminDestinationController::class, 'detail'])->name('detail');
        Route::post('/delete/{id}', [AdminDestinationController::class, 'delete'])->name('delete');
        Route::post('/update/{id}', [AdminDestinationController::class, 'update'])->name('update');
    });
    
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::post('/submit', [CategoryController::class, 'submit'])->name('submit');
        Route::post('/delete/{id}', [CategoryController::class, 'delete'])->name('delete');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
    });
    // manage role request
    Route::prefix('role-request')->name('role-request.')->group(function () {
        Route::get('/', [AdminRoleRequestController::class, 'index'])->name('index');
        Route::get('/filter/{status}', [AdminRoleRequestController::class, 'filter'])->name('filter');
        Route::post('/approve/{id}', [AdminRoleRequestController::class, 'approve'])->name('approve');
        Route::post('/reject/{id}', [AdminRoleRequestController::class, 'reject'])->name('reject');
        Route::post('/delete/{id}', [AdminRoleRequestController::class, 'delete'])->name('delete');
    });
    
});

// pengelola routes
Route::middleware(['auth', 'role:pengelola'])->prefix('pengelola')->name('pengelola.')->group(function () {
    Route::view('/dashboard', 'pengelola.dashboard')->name('dashboard');
    Route::get('/notication', function(){
        echo 'notication';
    })->name('notification');
    // // profile routes
    Route::prefix('profile')->group(function(){
        Route::get('/', [ProfileController::class,'index'])->name('profile');
        Route::post('/edit', [ProfileController::class,'editProfile'])->name('profile.edit');
        Route::post('/edit-password', [ProfileController::class,'editPassword'])->name('profile.edit-password');
    });
    // manage destination
    Route::prefix('destination')->name('destination.')->group(function () {
        Route::get('/', [PengelolaDestinationController::class, 'index'])->name('index');
        Route::post('/update', [PengelolaDestinationController::class, 'update'])->name('update');
        Route::post('/submit', [PengelolaDestinationController::class, 'submit'])->name('submit');
    });
});

