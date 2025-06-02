<!DOCTYPE html>

<html lang="en">

<!-- Head -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Sumenep | @yield('title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Themenix.com">
    <link href="{{ asset('assets') }}/img/logos/favicon.png" rel="shortcut icon" type="image/png">
    <link href="{{ asset('assets') }}/css/theme-1.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/theme-2.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/theme-3.min.css" rel="stylesheet">
</head>

<!-- /Head -->

<body>

    <!-- Preloader -->
    {{-- <div id="preloader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div> --}}
    <!-- /Preloader -->

    <!-- Header -->
    <header id="header" data-aos="fade">

        <!-- Header Topbar -->
        <div class="header-topbar">
            <div class="container">
                <div class="row g-0">
                    <div class="col-6 col-xl-7 col-md-8">
                        <div class="d-flex align-items-center">
                            <a href="tel:+84966704132">
                                <i class="hicon hicon-telephone me-1"></i>
                                <span>+33 321-654-987</span>
                            </a>
                            <span class="vr bg-white d-none d-md-inline ms-3 me-3"></span>
                            <a href="mailto:" class="d-none d-md-inline">
                                <i class="hicon hicon-email-envelope me-1"></i>
                                <span>Booking@example.com</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Header Topbar -->

        <!-- Header Navbar -->
        <div class="header-navbar">
            <nav class="navbar navbar-expand-xl">
                <div class="container">
                    <button class="navbar-toggler me-3" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <i class="hicon hicon-bold hicon-hamburger-menu"></i>
                    </button>
                    <a class="navbar-brand" href="index-2.html">
                        <img src="{{ asset('assets') }}/img/logos/logo.png" alt="">
                    </a>
                    <div class="offcanvas offcanvas-navbar offcanvas-start border-end-0" tabindex="-1"
                        id="offcanvasNavbar">
                        <div class="offcanvas-header border-bottom p-4 p-xl-0">
                            <a href="{{ route('home') }}" class="d-inline-block">
                                <img src="{{ asset('assets') }}/img/logos/menu-logo.png" alt="">
                            </a>
                            <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body p-4 p-xl-0">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link @if (request()->is('/*')) active @endif"
                                        href="{{ route('home') }}" data-bs-display="static">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link @if (request()->is('destination*')) active @endif"
                                        href="{{ route('destination') }}" data-bs-display="static">
                                        <span>Destinations</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link @if (request()->is('about*')) active @endif"
                                        href="{{ route('about') }}" data-bs-display="static">
                                        <span>About Us</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link @if (request()->is('contact*')) active @endif"
                                        href="{{ route('contact') }}" data-bs-display="static">
                                        <span>Contact</span>
                                    </a>
                                </li>
                            </ul>
                            @auth
                                @php
                                    $unreadCount = auth()->user()->unreadNotifications->count();
                                @endphp
                                <div class="d-flex align-items-center ms-auto">
                                    <button type="button" class="circle-icon wishlist-icon me-4 position-relative"
                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                        aria-controls="offcanvasRight">
                                        <i class="hicon hicon-bold hicon-bell-alerts"></i>
                                        @if ($unreadCount > 0)
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                {{ $unreadCount }}
                                            </span>
                                        @endif
                                    </button>
                                </div>
                            @endauth

                        </div>
                    </div>
                    @if (Auth::check())
                        @yield('mini-account-menu')
                    @else
                        {{-- guest --}}
                        <div class="dropdown user-menu ms-xl-auto">
                            <button class="circle-icon circle-icon-link circle-icon-link-hover"
                                data-bs-toggle="dropdown" data-bs-display="static">
                                <i class="hicon hicon-mmb-account"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end animate slideIn" data-bs-popper="static">
                                <li>
                                    <a class="dropdown-item" href="{{ route('register-form') }}">
                                        <i class="hicon hicon-edit me-1"></i>
                                        <span>Register</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('login-form') }}">
                                        <i class="hicon hicon-aps-lock me-1"></i>
                                        <span>Login</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        {{-- guest --}}
                    @endif
                </div>
            </nav>
        </div>
        <!-- /Header Navbar -->

    </header>
    <!-- /Header -->

    <!-- Main -->
    @yield('content')
    <!-- /Main -->

    <!-- Footer -->
    <footer class="footer p-top-90 p-bottom-50" data-aos="fade">

        <!-- Footer top -->
        <div class="footer-top">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-xl-3 col-md-6">
                        <!-- Brand -->
                        <div class="footer-widget">
                            <a href="index-2.html" class="brand-img">
                                <img class="me-4" src="{{ asset('assets') }}/img/logos/footer-logo.png"
                                    alt="">
                            </a>
                            <p class="brand-desc">
                                <em>
                                    Sumenep Explore adalah pintu gerbang Anda untuk menemukan pesona tersembunyi
                                    Kabupaten Sumenep, Madura.
                                </em>
                                <a href="about.html">[+]</a>
                            </p>
                        </div>
                        <!-- /Brand -->
                    </div>
                    <div class="col-12 col-xl-3 col-md-6">
                        <!-- Contact Info -->
                        <div class="footer-widget">
                            <h2 class="h4 pb-3">Contact Info</h2>
                            <div class="contact-info">
                                <p>
                                    <span>No 234, Placer Loquen Marsei Niriva, Moliva.</span>
                                </p>
                                <p>
                                    <span>+33 321-654-987 (Ext: 123).</span>
                                </p>
                                <p>
                                    <a href="#">Booking@example.com</a>
                                </p>
                                <p>
                                    <a href="#">www.example.com</a>
                                </p>
                            </div>
                        </div>
                        <!-- /Contact Info -->
                    </div>
                    <div class="col-12 col-xl-3 col-md-6">
                        <!-- Quick Links -->
                        <div class="footer-widget">
                            <h2 class="h4 pb-3">Explore Sumenep</h2>
                            <ul class="footer-link">
                                <li class="link-item">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="link-item">
                                    <a href="{{ route('destination') }}">Destinations</a>
                                </li>
                                <li class="link-item">
                                    <a href="{{ route('about') }}">About</a>
                                </li>
                                <li class="link-item">
                                    <a href="{{ route('contact') }}">Contact us</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /Quick Links -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /Footer top -->

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p class="mb-lg-0">© 2024 Moliva Travel Agency. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Footer Bottom -->

    </footer>
    <!-- /Footer -->

    {{-- offcanvas notification --}}

@auth
    <div class="offcanvas offcanvas-end offcanvas-navbar border-start-0" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom p-4">
            <h5 class="offcanvas-title h4" id="offcanvasRightLabel">
                <i class="hicon hicon-bold hicon-bell-alerts me-2"></i>
                Notifikasi
            </h5>
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-4">
            @forelse(auth()->user()->notifications as $notification)
                <div class="notification-item {{ $notification->unread() ? 'notification-unread' : 'notification-read' }} mb-3">
                    <div class="notification-content">
                        <div class="d-flex align-items-start">
                            <div class="notification-icon me-3">
                                <div class="circle-icon circle-icon-sm bg-primary">
                                    <i class="hicon hicon-email-envelope text-white"></i>
                                </div>
                            </div>
                            <div class="notification-body flex-grow-1">
                                <h6 class="notification-title mb-1">
                                    {{ $notification->data['title'] ?? 'No Title' }}
                                </h6>
                                <p class="notification-text text-muted mb-2">
                                    {{ $notification->data['message'] ?? 'No Message' }}
                                </p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <small class="text-muted">
                                        <i class="hicon hicon-time me-1"></i>
                                        {{ $notification->created_at->diffForHumans() }}
                                    </small>
                                    @if($notification->data['url'] ?? false)
                                        <a href="{{ $notification->data['url'] }}" class="btn btn-primary btn-sm">
                                            <i class="hicon hicon-last-viewed me-1"></i>
                                            Lihat
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($notification->unread())
                        <div class="notification-indicator"></div>
                    @endif
                </div>
            @empty
                <div class="empty-state text-center py-5">
                    <div class="circle-icon circle-icon-lg bg-light mx-auto mb-3">
                        <i class="hicon hicon-bell-alerts text-muted"></i>
                    </div>
                    <h6 class="text-muted mb-2">Tidak Ada Notifikasi</h6>
                    <p class="text-muted small">Notifikasi baru akan muncul di sini</p>
                </div>
            @endforelse
            
            @if(auth()->user()->notifications->count() > 0)
                <div class="notification-actions border-top pt-3 mt-3">
                    <div class="d-flex justify-content-between">
                        <form action="">
                        <button href="#" class="btn btn-link btn-sm text-decoration-none p-0">
                            <i class="hicon hicon-check-circle me-1"></i>
                            Tandai Semua Dibaca
                        </button>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endauth


    {{-- offcanvas notification --}}

    <!-- Scroll top -->
    <a href="#" class="scroll-top">
        <i class="hicon hicon-thin-arrow-up"></i>
    </a>
    <!-- /Scroll top -->

    <script defer src="{{ asset('assets/js/theme-1.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/theme-2.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/theme-3.min.js') }}"></script>
    @stack('scripts')

</body>

</html>
