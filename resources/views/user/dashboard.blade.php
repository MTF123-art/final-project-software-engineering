@extends('layout.app')

@section('title', 'User Dashboard')

@section('content')
    <main>

        <div class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">

            <!-- Title -->
            <section class="container">
                <div class="d-lg-flex align-items-lg-end pb-4">
                    <div class="block-title me-auto">
                        <small class="sub-title">My Account</small>
                        <h1 class="display-5 title">Dashboard</h1>
                    </div>
                </div>
            </section>
            <!-- /Title -->

            <!-- Dashboard -->
            <section class="container">
                <div class="row g-0 g-xl-8">
                    <div class="col-12 col-xl-9">
                        <div class="pe-xl-4 me-xl-2">
                            <!-- Wishlist -->
                            <div class="card border-0 shadow-sm mt-4">
                                <div class="card-body">
                                    <h2 class="h3 ff-primary mb-4 text-body-emphasis">Destinasi Favorit Saya</h2>

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <a href="#"
                                                class="d-block p-3 border rounded text-decoration-none text-dark shadow-sm hover-effect">
                                                <strong>Wisata Air Terjun Madakaripura</strong>
                                                <p class="mb-0 small text-muted">Probolinggo, Jawa Timur</p>
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="#"
                                                class="d-block p-3 border rounded text-decoration-none text-dark shadow-sm hover-effect">
                                                <strong>Gunung Bromo Sunrise Tour</strong>
                                                <p class="mb-0 small text-muted">Bromo, Jawa Timur</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Review -->
                            <div class="card border-0 shadow-sm mt-4">
                                <div class="card-body">
                                    <h2 class="h3 ff-primary mb-4 text-body-emphasis">Ulasan Saya</h2>

                                    <!-- Review 1 -->
                                    <div class="border-bottom pb-3 mb-3">
                                        <strong>Ayu Lestari</strong>
                                        <div class="testimonial-star d-flex align-items-center gap-2 mb-1">
                                            <span class="star-rate-view star-rate-size-sm">
                                                <span class="star-value rate-45"></span>
                                            </span>
                                            <span class="testimonial-date rounded-1">Mei 12 24</span>
                                        </div>
                                        <p class="mb-0">Tempatnya indah dan akses mudah, cocok untuk liburan singkat.</p>
                                    </div>

                                    <!-- Review 2 -->
                                    <div class="border-bottom pb-3 mb-3">
                                        <strong>Ayu Lestari</strong>
                                        <div class="testimonial-star d-flex align-items-center gap-2 mb-1">
                                            <span class="star-rate-view star-rate-size-sm">
                                                <span class="star-value rate-50"></span>
                                            </span>
                                            <span class="testimonial-date rounded-1">Apr 30 24</span>
                                        </div>
                                        <p class="mb-0">Pemandangan menakjubkan! Sangat direkomendasikan.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Upgrade CTA -->
                            <div class="card border-0 shadow-sm mt-4">
                                <div class="card-body text-center">
                                    <h2 class="h4 mb-3">Ingin mengelola destinasi?</h2>
                                    <p class="mb-4">Tingkatkan akunmu untuk mulai mendaftarkan dan mengelola destinasi
                                        wisata.</p>
                                    <a href="{{ route('user.upgrade') }}" class="btn btn-primary">Upgrade ke Pengelola</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Account menu -->
                    @include('user.account-menu')
                    <!-- Account menu -->
                </div>
            </section>
            <!-- /Dashboard -->

        </div>

    </main>

    @if (session('success'))
        <x-toast type="success" />
    @endif
@endsection
