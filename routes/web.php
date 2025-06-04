<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CustomerMessageController;
use App\Http\Controllers\admin\DashboardController as AdminDasboardController;
use App\Http\Controllers\admin\DestinationController as AdminDestinationController;
use App\Http\Controllers\admin\ReviewController as AdminReviewController;
use App\Http\Controllers\admin\RoleRequestController as AdminRoleRequestController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\landing\LandingController;
use App\Http\Controllers\pengelola\DashboardController as PengelolaDashboardController;
use App\Http\Controllers\pengelola\DestinationController as PengelolaDestinationController;
use App\Http\Controllers\pengelola\ReviewController as PengelolaReviewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\user\BookmarkController;
use App\Http\Controllers\user\DashboardController as UserDashboardController;
use App\Http\Controllers\user\NotificationController as UserNotificationController;
use App\Http\Controllers\admin\NotificationController as AdminNotificationController;
use App\Http\Controllers\pengelola\NotificationController as PengelolaNotificationController;
use App\Http\Controllers\user\ReviewController;
use App\Http\Controllers\user\RoleRequestController as UserRoleRequestController;
use Illuminate\Auth\Events\Login;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Email verification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})
    ->middleware('auth')
    ->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route(Auth::user()->role . '.dashboard');
})
    ->middleware(['auth', 'signed'])
    ->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('success', 'Verification link sent!');
})
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');

// public routes
Route::get('/', [LandingController::class, 'home'])->name('home');
Route::get('/about', [LandingController::class, 'about'])->name('about');
Route::get('/contact', [LandingController::class, 'contact'])->name('contact');
Route::post('/contact/store', [LandingController::class, 'contactStore'])->name('contact.store');
Route::get('/destination/filter/{slug?}', [LandingController::class, 'destination'])->name('destination');
Route::get('/destination/detail/{slug}', [LandingController::class, 'destinationDetail'])->name('detail-destination');

// auth routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login-form');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register-form');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// user routes
Route::middleware(['auth', 'role:user', 'verified'])
    ->prefix('user')
    ->name('user.')
    ->group(function () {
        Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
        // notification
        Route::prefix('notification')
            ->name('notification.')
            ->group(function () {
                Route::get('/', [UserNotificationController::class, 'index'])->name('index');
                Route::post('/mark-all-read', [UserNotificationController::class, 'markAllAsRead'])->name('markAllRead');
                Route::post('/delete-all', [UserNotificationController::class, 'deleteAll'])->name('deleteAll');
                Route::post('/mark-read/{id}', [UserNotificationController::class, 'markAsRead'])->name('markRead');
                Route::delete('/delete/{id}', [UserNotificationController::class, 'delete'])->name('delete');
            });
        // review
        Route::prefix('review')
            ->name('review.')
            ->group(function () {
                Route::get('/', [ReviewController::class, 'index'])->name('index');
                Route::post('/store/{id}', [ReviewController::class, 'storeReview'])->name('store');
                Route::post('/update/{id}', [ReviewController::class, 'updateReview'])->name('update');
                Route::post('/delete/{id}', [ReviewController::class, 'deleteReview'])->name('delete');
            });
        // bookmark
        Route::prefix('bookmark')
            ->name('bookmark.')
            ->group(function () {
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
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::post('/profile/edit', [ProfileController::class, 'editProfile'])->name('profile.edit');
        Route::post('/profile/edit-password', [ProfileController::class, 'editPassword'])->name('profile.edit-password');
    });

// admin routes
Route::middleware(['auth', 'role:admin', 'verified'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        
        Route::get('/dashboard', [AdminDasboardController::class, 'index'])->name('dashboard');
        
        Route::prefix('notification')
            ->name('notification.')
            ->group(function () {
                Route::get('/', [AdminNotificationController::class, 'index'])->name('index');
                Route::post('/mark-all-read', [AdminNotificationController::class, 'markAllAsRead'])->name('markAllRead');
                Route::post('/delete-all', [AdminNotificationController::class, 'deleteAll'])->name('deleteAll');
                Route::post('/mark-read/{id}', [AdminNotificationController::class, 'markAsRead'])->name('markRead');
                Route::delete('/delete/{id}', [AdminNotificationController::class, 'delete'])->name('delete');
            });

        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::post('/profile/edit', [ProfileController::class, 'editProfile'])->name('profile.edit');
        Route::post('/profile/edit-password', [ProfileController::class, 'editPassword'])->name('profile.edit-password');

        Route::prefix('user-management')
            ->name('user-management.')
            ->group(function () {
                Route::get('/', [UserController::class, 'index'])->name('index');
                Route::get('/filter/{role}', [UserController::class, 'filter'])->name('filter');
                Route::get('/create', [UserController::class, 'createForm'])->name('create-form');
                Route::post('/create', [UserController::class, 'create'])->name('create');
                Route::get('/edit/{id}', [UserController::class, 'editForm'])->name('edit-form');
                Route::post('/edit/{id}', [UserController::class, 'edit'])->name('edit');
                Route::post('/delete/{id}', [UserController::class, 'delete'])->name('delete');
            });

        Route::prefix('destination')
            ->name('destination.')
            ->group(function () {
                Route::get('/', [AdminDestinationController::class, 'index'])->name('index');
                Route::get('/detail/{id}', [AdminDestinationController::class, 'detail'])->name('detail');
                Route::post('/delete/{id}', [AdminDestinationController::class, 'delete'])->name('delete');
                Route::post('/update/{id}', [AdminDestinationController::class, 'update'])->name('update');
            });

        Route::prefix('category')
            ->name('category.')
            ->group(function () {
                Route::get('/', [CategoryController::class, 'index'])->name('index');
                Route::post('/submit', [CategoryController::class, 'submit'])->name('submit');
                Route::post('/delete/{id}', [CategoryController::class, 'delete'])->name('delete');
                Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
            });
        
        Route::prefix('role-request')
            ->name('role-request.')
            ->group(function () {
                Route::get('/', [AdminRoleRequestController::class, 'index'])->name('index');
                Route::get('/filter/{status}', [AdminRoleRequestController::class, 'filter'])->name('filter');
                Route::post('/approve/{id}', [AdminRoleRequestController::class, 'approve'])->name('approve');
                Route::post('/reject/{id}', [AdminRoleRequestController::class, 'reject'])->name('reject');
                Route::post('/delete/{id}', [AdminRoleRequestController::class, 'delete'])->name('delete');
            });

        Route::prefix('review-management')
            ->name('review-management.')
            ->group(function () {
                Route::get('/', [AdminReviewController::class, 'index'])->name('index');
                Route::post('/update/{id}', [AdminReviewController::class, 'updateStatus'])->name('update');
                Route::post('/delete/{id}', [AdminReviewController::class, 'delete'])->name('delete');
            });

        Route::prefix('customer-message')
            ->name('customer-message.')
            ->group(function () {
                Route::get('/', [CustomerMessageController::class, 'index'])->name('index');
                Route::get('/show/{id}', [CustomerMessageController::class, 'show'])->name('show');
                Route::post('/delete/{id}', [CustomerMessageController::class, 'delete'])->name('delete');
            });
    });
// pengelola routes
Route::middleware(['auth', 'role:pengelola', 'verified'])
    ->prefix('pengelola')
    ->name('pengelola.')
    ->group(function () {
        
        Route::get('/dashboard', [PengelolaDashboardController::class, 'index'])->name('dashboard');
        
        Route::prefix('notification')
            ->name('notification.')
            ->group(function () {
                Route::get('/', [PengelolaNotificationController::class, 'index'])->name('index');
                Route::post('/mark-all-read', [PengelolaNotificationController::class, 'markAllAsRead'])->name('markAllRead');
                Route::post('/delete-all', [PengelolaNotificationController::class, 'deleteAll'])->name('deleteAll');
                Route::post('/mark-read/{id}', [PengelolaNotificationController::class, 'markAsRead'])->name('markRead');
                Route::delete('/delete/{id}', [PengelolaNotificationController::class, 'delete'])->name('delete');
            });

        Route::prefix('profile')->group(function () {
            Route::get('/', [ProfileController::class, 'index'])->name('profile');
            Route::post('/edit', [ProfileController::class, 'editProfile'])->name('profile.edit');
            Route::post('/edit-password', [ProfileController::class, 'editPassword'])->name('profile.edit-password');
        });
    
        Route::prefix('destination')
            ->name('destination.')
            ->group(function () {
                Route::get('/', [PengelolaDestinationController::class, 'index'])->name('index');
                Route::post('/update', [PengelolaDestinationController::class, 'update'])->name('update');
                Route::post('/submit', [PengelolaDestinationController::class, 'submit'])->name('submit');
            });

        Route::prefix('review')
            ->name('review.')
            ->group(function () {
                Route::get('/', [PengelolaReviewController::class, 'index'])->name('index');
                Route::post('/update/{id}', [PengelolaReviewController::class, 'updateStatus'])->name('update');
            });
    });
