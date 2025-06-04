<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error @yield('code') - Explore Sumenep</title>
    <link href="{{ asset('assets') }}/img/logos/favicon.png" rel="shortcut icon" type="image/png">
    <link href="{{ asset('assets') }}/css/theme-1.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/theme-2.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/theme-3.min.css" rel="stylesheet">
</head>
<body>
    <div id="preloader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <main>
        <section class="vh-100" data-aos="fade">
            <div class="d-flex align-items-center text-center h-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-8 col-lg-10">
                            <div class="block-title">
                                <h1 class="display-2 title">Error @yield('code')</h1>
                            </div>
                            <h2>@yield('title')</h2>
                            <div class="fs-5 text-secondary">
                                <p>@yield('message')</p>
                            </div>
                            <a href="{{ route('home') }}" class="fw-medium">
                                <span>Homepage</span>
                                <i class="hicon hicon-thin-circle-arrow-left fsm-5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script defer src="{{ asset('assets') }}/js/theme-1.min.js"></script>
    <script defer src="{{ asset('assets') }}/js/theme-2.min.js"></script>
    <script defer src="{{ asset('assets') }}/js/theme-3.min.js"></script>
</body>
</html>
