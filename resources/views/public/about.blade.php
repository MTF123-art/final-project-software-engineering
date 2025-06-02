@extends('layout.app')

@section('title', 'Tentang Kami - Sumenep Explore')

@auth
    @section('mini-account-menu')
        @include(Auth::user()->role . '.mini-account-menu')
    @endsection
@endauth

@section('content')
    <main>

        <!-- Title -->
        <section class="hero aos-init aos-animate" data-aos="fade">
            <div class="hero-bg">
                <img src="{{ asset('assets') }}/img/destinations/d7.png" alt="">
            </div>
            <div class="bg-content container">
                <div class="hero-page-title">
                    <span class="hero-sub-title">Jelajahi Keindahan Sumenep</span>
                    <h1 class="display-3 hero-title">
                        Tentang Kami
                    </h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- /Title -->

        <!-- Featured -->
        <section class="pt-5 pb-4 aos-init aos-animate" data-aos="fade">
            <div class="container">
                <ul class="stats-list row g-0">
                    <li class="col-6 col-xl-3">
                        <div class="stats-item">
                            <h2 class="h1 stats-number">+150</h2>
                            <p class="stats-desc">
                                Destinasi wisata <br> menarik di Sumenep
                            </p>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="stats-item">
                            <h2 class="h1 stats-number">+250K</h2>
                            <p class="stats-desc">
                                Wisatawan telah<br> menjelajahi Sumenep
                            </p>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="stats-item">
                            <h2 class="h1 stats-number">4.8</h2>
                            <p class="stats-desc">
                                <span class="star-rate-view star-rate-size-sm"><span
                                        class="star-value rate-50"></span></span>
                                <br>
                                <span>Rating pengunjung</span>
                            </p>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="stats-item">
                            <h2 class="h1 stats-number">+95%</h2>
                            <p class="stats-desc">
                                Pengunjung merasa <br>puas dan terkesan
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- /Featured -->

        <!-- About -->
        <section class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 col-xl-6 order-1 order-xl-0">
                        <!-- Image -->  
                        <div class="image-info image-info-vertical me-xl-5">
                            <div class="vertical-title">
                                <small class="ls-2">
                                    <strong class="text-primary fw-semibold">Sejak 2020</strong> - <strong
                                        class="text-body fw-semibold">5 tahun</strong> melayani wisatawan
                                </small>
                            </div>
                            <div class="image-center rounded">
                                <img src="./assets/img/about/a5.jpg" alt="">
                            </div>
                        </div>
                        <!-- /Image -->
                    </div>
                    <div class="col-12 col-xl-6 order-0 order-xl-1">
                        <!-- Content -->
                        <div class="pt-xl-4 mb-xl-0 mb-5">
                            <div class="block-title">
                                <small class="sub-title">Sumenep Explore</small>
                                <h2 class="h1 title lh-sm">Platform terdepan untuk menjelajahi wisata Kabupaten Sumenep</h2>
                            </div>
                            <p>
                                Sumenep Explore adalah pintu gerbang Anda untuk menemukan pesona tersembunyi Kabupaten Sumenep, 
                                Madura. Kami menyajikan informasi lengkap tentang destinasi wisata yang memukau, mulai dari 
                                keindahan alam Pantai Lombang hingga kemegahan Keraton Sumenep yang bersejarah. 
                                Platform kami hadir untuk membantu wisatawan merencanakan perjalanan yang tak terlupakan, 
                                dengan panduan komprehensif tentang tempat wisata, kuliner khas, budaya lokal, dan akomodasi terbaik. 
                                Jelajahi keunikan Sumenep bersama kami - dari wisata bahari, wisata sejarah, hingga wisata religi 
                                yang memperkaya jiwa. Sumenep Explore berkomitmen menghadirkan pengalaman wisata yang autentik 
                                dan berkesan di ujung timur Pulau Madura.
                            </p>
                            <div class="pt-3">
                                <a href="./contact.html" class="btn btn-primary mnw-180">
                                    <i class="hicon hicon-email-envelope"></i>
                                    <span>Hubungi Kami</span>
                                </a>
                                <a href="tel:+6281234567890" class="btn btn-link link-dark link-hover fw-medium mnw-180">
                                    <i class="hicon hicon-telephone"></i>
                                    <span>+62 812-3456-7890</span>
                                </a>
                            </div>
                        </div>
                        <!-- /Content -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /About -->

    </main>
@endsection