@extends('layout.app')

@section('title', 'About Us')

@section('content')
    <main>

        <!-- Title -->
        <section class="hero aos-init aos-animate" data-aos="fade">
            <div class="hero-bg">
                <img src="{{ asset('Storage/' . $destinasi->highlight_photo) }}" alt="{{ $destinasi->nama_destinasi }}"
                    onerror="this.onerror=null; this.src='{{ asset('assets/img/destinations/placeholder.webp') }}';">
            </div>
            <div class="bg-content container">
                <div class="hero-page-title">
                    <h1 class="display-4 hero-title mb-2">
                        {{ $destinasi->nama_destinasi }}
                    </h1>
                    <div class="fs-5 hero-desc">
                        <span class="me-3"><i class="hicon hicon-flights-pin"></i> {{ $destinasi->lokasi }}</span>
                    </div>
                    <div class="mt-5">
                        @if (Auth::check() && Auth::user()->role == 'user')
                            <form action="{{ route('user.bookmark.save', ['id' => $destinasi->id]) }}" method="POST">
                                @csrf
                                <button class="btn btn-primary btn-uppercase mnw-180" type="submit">
                                    <i class="hicon hicon hicon-bold hicon-dynamic-banner"></i>
                                    <span>Add to Bookmark</span>
                                </button>
                            </form>
                        @elseif ((Auth::check() && Auth::user()->role == 'admin') || (Auth::check() && Auth::user()->role == 'pengelola'))
                            <button class="btn btn-primary btn-uppercase mnw-180" data-bs-toggle="modal"
                                data-bs-target="#alertModal2">
                                <i class="hicon hicon hicon-bold hicon-dynamic-banner"></i>
                                <span>Add to Bookmark</span>
                            </button>
                        @else
                            <button class="btn btn-primary btn-uppercase mnw-180" data-bs-toggle="modal"
                                data-bs-target="#alertModal1">
                                <i class="hicon hicon hicon-bold hicon-dynamic-banner"></i>
                                <span>Add to Bookmark</span>
                            </button>
                        @endif
                    </div>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="./tour-packages-1.html">Moliva tours</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Single tour 1</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- /Title -->

        <!-- Featured -->
        <section class="pt-5 pb-5 border-top aos-init aos-animate" data-aos="fade">
            <div class="container">
                <ul class="list-unstyled row g-3 mb-0">
                    <li class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon  hicon-promo-code"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">Tour code</small>
                                <h2 class="card-title">T0394843</h2>
                            </div>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-poi-text-search"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">Start</small>
                                <h2 class="card-title">Noriva city</h2>
                            </div>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-poi"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">End</small>
                                <h2 class="card-title">Noriva Bay</h2>
                            </div>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-travelers"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">Type tour</small>
                                <h2 class="card-title">Group tour</h2>
                            </div>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-time-clock"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">Age range</small>
                                <h2 class="card-title">16 - 59</h2>
                            </div>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-seriously-multilingual"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">Language</small>
                                <h2 class="card-title">English</h2>
                            </div>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-installment-payment"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">Payments</small>
                                <h2 class="card-title">Pay later</h2>
                            </div>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-cancel-booking"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">Cancel tour</small>
                                <h2 class="card-title">Yes/Free</h2>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- /Featured -->

        <!-- Tour details -->
        <section class="p-top-90 p-bottom-90 bg-gray-gradient">
            <div class="container">
                <!-- About -->
                <div class="card border-0 shadow-sm p-xl-2 mb-4 aos-init aos-animate" data-aos="fade">
                    <div class="card-body">
                        <div class="border-bottom mb-4 pb-4">
                            <h2 class="text-body-emphasis mb-0">About</h2>
                        </div>
                        <div class="d-lg-flex border-bottom pb-3 mb-4">
                            <div class="mnw-200">
                                <h3 class="h5">Destination Manager</h3>
                            </div>
                            <p>
                                {{ $destinasi->pengelola->name }}
                            </p>
                        </div>
                        <div class="d-lg-flex">
                            <div class="mnw-200">
                                <h3 class="h5">Description</h3>
                            </div>
                            <p>
                                {{ $destinasi->deskripsi }}
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /About -->
                <!-- Photos -->
                <div class="card border-0 shadow-sm p-xl-2 mb-4 aos-init aos-animate" data-aos="fade">
                    <div class="card-body">
                        <div class="border-bottom mb-4 pb-4">
                            <h2 class="text-body-emphasis mb-0">
                                Photos
                            </h2>
                        </div>
                        <div class="row g-3 align-items-center">
                            @foreach ($destinasi->galeri as $single)
                                <div class="col-6 col-xl-4">
                                    <a href="{{ asset('Storage/' . $single->url_gambar) }}" class="glightbox"
                                        data-glightbox="title:Explore Noriva Bay" data-gallery="tour-photos">
                                        <figure class="image-hover image-hover-scale image-hover-overlay rounded mb-0">
                                            <img src="{{ asset('Storage/' . $single->url_gambar) }}" alt="">
                                            <i class="hicon hicon-zoom-bold image-hover-icon fs-5"></i>
                                        </figure>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- /Photos -->
            </div>
        </section>
        <!-- /Tour details -->

        <!-- Customer Reviews -->
        <section id="reviews" class="p-top-90 p-bottom-90 bg-gray-gradient">
            <div class="container">
                <!-- Title -->
                <div class="block-title me-auto pb-3 aos-init" data-aos="fade">
                    <small class="sub-title">Genuine Reviews</small>
                    <h2 class="h1 title">Customer reviews</h2>
                </div>
                <!-- Title -->
                <!-- Review list -->
                <div class="row g-0">
                    <div class="col-12">
                        <div class="pe-xl-4 me-xl-2">
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <!-- Overall rating -->
                                    <div class="horizontal-review rounded shadow-sm mb-4 aos-init" data-aos="fade">
                                        <h2 class="h4 review-title pb-4 mb-4 lh-base">Overall rating</h2>
                                        <div class="review-content">
                                            <h3 class="review-score">4.9</h3>
                                            <div class="review-total">
                                                <span class="star-rate-view"><span
                                                        class="star-value rate-10"></span></span>
                                                <span><strong class="text-body">2,394</strong> reviews</span>
                                            </div>
                                        </div>
                                        <div class="review-label">
                                            <small>Excellent</small>
                                        </div>
                                    </div>
                                    <!-- /Overall rating -->
                                </div>
                                <div class="col-12 col-xl-6">
                                    <!-- Review summary -->
                                    <div class="review-summary rounded shadow-sm mb-4 aos-init" data-aos="fade">
                                        <h3 class="h4 review-title">Leave Your Review</h3>
                                        <ul class="review-content">
                                            <li>
                                                <button class="btn btn-primary  d-block w-100" type="button">
                                                    <i class="hicon hicon-bold hicon-mmb-inbox"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /Review summary -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <!-- Review list -->
                        <div class="card border-0 rounded shadow-sm mb-4 aos-init" data-aos="fade">
                            <div class="card-body">
                                <div class="border-bottom d-flex align-items-center pb-4 mb-4">
                                    <h3 class="h4 me-auto mb-0">Recent reviews</h3>
                                    <strong>2,394 reviews</strong>
                                </div>
                                <div class="review-list">
                                    <div class="review-item">
                                        <div class="review-client">
                                            <figure class="review-avatar">
                                                <img src="{{ asset('assets') }}/img/avatars/a1.jpg" alt=""
                                                    class="rounded-circle">
                                            </figure>
                                            <div class="review-name">
                                                <strong>John Doe <small>(Italy)</small></strong>
                                                <span class="star-rate-view star-rate-size-sm"><span
                                                        class="star-value rate-45"></span></span>
                                            </div>
                                        </div>
                                        <p>
                                            "The 5-day tour of Noriva was fantastic! Stunning landscapes, well-organized
                                            activities,
                                            and friendly guides made the trip unforgettable. Highly recommend!"
                                        </p>
                                        <div class="review-date">
                                            <small>February 9, 2023</small> - <span class="review-verify">Verified
                                                booking</span>
                                        </div>
                                    </div>
                                    <div class="review-item">
                                        <div class="review-client">
                                            <figure class="review-avatar">
                                                <img src="{{ asset('assets') }}/img/avatars/a2.jpg" alt=""
                                                    class="rounded-circle">
                                            </figure>
                                            <div class="review-name">
                                                <strong>Emily Smith <small>(USA)</small></strong>
                                                <span class="star-rate-view star-rate-size-sm"><span
                                                        class="star-value rate-45"></span></span>
                                            </div>
                                        </div>
                                        <p>
                                            "An incredible journey through Noriva! From breathtaking mountain views to
                                            exciting water sports,
                                            every day was packed with adventure and beauty. A must-visit!"
                                        </p>
                                        <div class="review-date">
                                            <small>February 9, 2023</small> - <span class="review-verify">Verified
                                                booking</span>
                                        </div>
                                    </div>
                                    <div class="review-item">
                                        <div class="review-client">
                                            <figure class="review-avatar">
                                                <img src="{{ asset('assets') }}/img/avatars/a3.jpg" alt=""
                                                    class="rounded-circle">
                                            </figure>
                                            <div class="review-name">
                                                <strong>Ariol Deep <small>(France)</small></strong>
                                                <span class="star-rate-view star-rate-size-sm"><span
                                                        class="star-value rate-45"></span></span>
                                            </div>
                                        </div>
                                        <p>
                                            "Our trip to Noriva exceeded expectations. The mix of scenic hikes, relaxing
                                            lakeside days,
                                            and cultural experiences made for a perfect vacation. Will definitely return!"
                                        </p>
                                        <div class="review-date">
                                            <small>February 9, 2023</small> - <span class="review-verify">Verified
                                                booking</span>
                                        </div>
                                    </div>
                                    <div class="review-item">
                                        <div class="review-client">
                                            <figure class="review-avatar">
                                                <img src="{{ asset('assets') }}/img/avatars/a5.jpg" alt=""
                                                    class="rounded-circle">
                                            </figure>
                                            <div class="review-name">
                                                <strong>Emma Ross <small>(UK)</small></strong>
                                                <span class="star-rate-view star-rate-size-sm"><span
                                                        class="star-value rate-45"></span></span>
                                            </div>
                                        </div>
                                        <p>
                                            "I loved every moment of this Noriva tour. The guided hikes, serene lakes,
                                            and exploration of tropical forests were highlights. Excellent value and great
                                            memories!"
                                        </p>
                                        <div class="review-date">
                                            <small>February 9, 2023</small> - <span class="review-verify">Verified
                                                booking</span>
                                        </div>
                                    </div>
                                    <div class="review-item">
                                        <div class="review-client">
                                            <figure class="review-avatar">
                                                <img src="{{ asset('assets') }}/img/avatars/a4.jpg" alt=""
                                                    class="rounded-circle">
                                            </figure>
                                            <div class="review-name">
                                                <strong>David Kane <small>(Germany)</small></strong>
                                                <span class="star-rate-view star-rate-size-sm"><span
                                                        class="star-value rate-45"></span></span>
                                            </div>
                                        </div>
                                        <p>
                                            "Fantastic 5-day itinerary in Noriva! Enjoyed everything from mountain climbs to
                                            cultural experiences.
                                            Well-organized, beautiful scenery, and a truly memorable trip."
                                        </p>
                                        <div class="review-date">
                                            <small>February 9, 2023</small> - <span class="review-verify">Verified
                                                booking</span>
                                        </div>
                                    </div>
                                </div>
                                <nav aria-label="Page navigation" class="text-center">
                                    <div class="text-center">
                                        <a href="#" class="fw-medium">
                                            <i class="hicon hicon-bold hicon-refresh"></i>
                                            <span>Load More</span>
                                        </a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <!-- Review list -->
                    </div>
                </div>
                <!-- Review list -->
            </div>
        </section>
        <!-- /Customer Reviews -->
    </main>

    {{-- alert modal --}}
    <div class="modal fade" id="alertModal1" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="alertModalLabel">Autentikasi Diperlukan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>

                <div class="modal-body">
                    Untuk menggunakan fitur <strong>bookmark</strong>, Anda harus login terlebih dahulu.
                    <br><br>
                    Sudah punya akun? Silakan <a href="{{ route('login-form') }}">Login</a>.
                    <br>
                    Belum punya akun? Silakan <a href="{{ route('register-form') }}">Register</a> terlebih dahulu.
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="alertModal2" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="alertModalLabel">Autentikasi Diperlukan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>

                <div class="modal-body">
                    Hanya role user yang bisa menggunakan fitur <strong>bookmark</strong>
                </div>
            </div>
        </div>
    </div>
    {{-- alert modal --}}
    {{-- toasts --}}
    @if (session('success'))
        <x-toast type="success" />
    @endif
    @if (session('error'))
        <x-toast type="error" />
    @endif
    {{-- toasts --}}
@endsection
