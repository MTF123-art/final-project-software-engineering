@extends('layout.app')

@section('title', 'Pengelola Dashboard')

@section('content')
    <main>
        <div class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">
            <!-- Title -->
            <section class="container">
                <div class="d-lg-flex align-items-lg-end pb-4">
                    <div class="block-title me-auto">
                        <small class="sub-title">Pengelola</small>
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
                            <!-- Destinasi Info -->
                            <div>
                                <div
                                    class="mini-card shadow-sm rounded p-4 mb-4 justify-content-between align-items-center">
                                    <div>
                                        <h2 class="card-title mb-1">Pantai Sembilan</h2>
                                        <p class="mb-0">Pantai indah dengan pasir putih yang terletak di Pulau
                                            Giligenting, Sumenep.</p>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-primary">Edit Destinasi</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Destinasi Info -->

                            <!-- Review Section -->
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <h2 class="h3 ff-primary mb-4 text-body-emphasis">Ulasan Pengunjung</h2>

                                    <!-- Review 1 -->
                                    <div class="border-bottom pb-3 mb-3">
                                        <strong>Ayu Lestari</strong>
                                        <div class="testimonial-star d-flex align-items-center gap-2 mb-1">
                                            <span class="star-rate-view star-rate-size-sm">
                                                <span class="star-value rate-45"></span>
                                            </span>
                                            <span class="testimonial-date rounded-1">Mei 12 24</span>
                                        </div>
                                        <p class="mb-0">Tempatnya bagus dan bersih, cocok buat liburan keluarga!</p>
                                    </div>

                                    <!-- Review 2 -->
                                    <div class="border-bottom pb-3 mb-3">
                                        <strong>Rudi Hartono</strong>
                                        <div class="testimonial-star d-flex align-items-center gap-2 mb-1">
                                            <span class="star-rate-view star-rate-size-sm">
                                                <span class="star-value rate-30"></span>
                                            </span>
                                            <span class="testimonial-date rounded-1">Apr 18 24</span>
                                        </div>
                                        <p class="mb-0">Pemandangannya oke, tapi fasilitas kurang lengkap.</p>
                                    </div>

                                    <!-- Review 3 -->
                                    <div class="border-bottom pb-3 mb-3">
                                        <strong>Sinta Dewi</strong>
                                        <div class="testimonial-star d-flex align-items-center gap-2 mb-1">
                                            <span class="star-rate-view star-rate-size-sm">
                                                <span class="star-value rate-50"></span>
                                            </span>
                                            <span class="testimonial-date rounded-1">Apr 07 24</span>
                                        </div>
                                        <p class="mb-0">Sangat menyenangkan, saya akan kembali lagi!</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    @include('pengelola.account-menu')
                </div>
            </section>
            <!-- /Dashboard -->
        </div>

        @if (session('success'))
            <x-toast type="success" />
        @endif
    </main>
@endsectionw