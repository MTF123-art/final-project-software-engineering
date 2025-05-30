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
                                <div class="d-flex align-items-center ms-auto">
                                    <a href="{{ route(Auth::user()->role . '.notification') }}"
                                        class="circle-icon wishlist-icon me-4">
                                        <i class="hicon hicon-bold hicon-bell-alerts"></i>
                                        <span>5</span>
                                    </a>
                                </div>
                            @endauth
                        </div>
                    </div>
                    @if (Auth::check())
                        {{-- auth --}}
                        <div class="dropdown user-menu ms-xl-auto">
                            <button class="user-menu-avatar show" data-bs-toggle="dropdown" data-bs-display="static"
                                aria-expanded="true">
                                <img src="{{ asset('Storage/' . Auth::user()->image) }}"
                                    onerror="this.onerror=null; this.src='{{ asset('assets/img/destinations/placeholder.webp') }}';"
                                    alt="">
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end shadow-sm animate slideIn"
                                data-bs-popper="static">
                                <li>
                                    <a class="dropdown-item fw-medium" href="#">
                                        {{ Auth::user()->name }}
                                    </a>
                                </li>
                                <li class="ps-4 pe-4">
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route(Auth::user()->role . '.dashboard') }}">
                                        <i class="hicon hicon-ycs-dashboard me-1"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <form class="dropdown-item" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <i class="hicon hicon-close-popup me-1"></i>
                                        <button type="submit"
                                            style="background: none; border: none; color: inherit; padding: 0; font: inherit; cursor: pointer;">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        {{-- auth --}}
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
