@extends('layout.app')

@section('title', 'Admin Dashboard')

@section('content')
    <main>
        <div class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">

            <!-- Title -->
            <section class="container">
                <div class="d-lg-flex align-items-lg-end pb-4">
                    <div class="block-title me-auto">
                        <small class="sub-title">Admin Panel</small>
                        <h1 class="display-5 title">Explore Sumenep - Dashboard Admin</h1>
                        <p class="text-muted mt-2" style="font-size: 0.95em;">
                            Anda adalah admin utama. Semua permintaan pengelola harus melalui persetujuan Anda.
                        </p>
                    </div>
                </div>
            </section>
            <!-- /Title -->

            <!-- Dashboard -->
            <section class="container">
                <div class="row g-0 g-xl-8">
                    <div class="col-12 col-xl-9">
                        <div class="pe-xl-4 me-xl-2">
                            <!-- Overview -->
                            <div class="pb-4">
                                <div class="row g-3 g-md-4">
                                    <div class="col-12 col-md-6">
                                        <a href="./booking.html"
                                            class="mini-card card-hover hover-effect shadow-sm rounded p-4">
                                            <span class="card-icon">
                                                <i class="icon hicon hicon-bold hicon-menu-calendar"></i>
                                            </span>
                                            <div class="card-content">
                                                <h2 class="card-title">28 Booking</h2>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <a href="./wishlist.html"
                                            class="mini-card card-hover hover-effect shadow-sm rounded p-4">
                                            <span class="card-icon">
                                                <i class="hicon hicon hicon-bold hicon-menu-favorite"></i>
                                            </span>
                                            <div class="card-content">
                                                <h2 class="card-title">16 Wishlist</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Overview -->

                            <!-- Review List -->
                            <div class="card border-0 shadow-sm mt-5">
                                <div class="card-body">
                                    <h2 class="h4 ff-primary mb-4 text-body-emphasis">Review Terbaru</h2>
                                    <div class="table-responsive">
                                        <table class="table table-bordered align-middle text-center">
                                            <thead class="table-light">
                                                <tr>
                                                    <th style="width: 60px;">ID</th>
                                                    <th>Nama Destinasi</th>
                                                    <th>Jumlah Komentar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($reviews as $review)
                                                <tr>
                                                    <td>
                                                        <span class="badge bg-primary">{{ $review->id }}</span>
                                                    </td>
                                                    <td class="text-start">
                                                        <strong>{{ $review->destinasi->nama ?? '-' }}</strong>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info text-dark">{{ $review->comments->count() }}</span>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @if($reviews->isEmpty())
                                            <div class="text-center text-muted py-3">Belum ada review.</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- /Review List -->

                        </div>
                    </div>
                    @include('admin.account-menu')
                </div>
            </section>
            <!-- /Dashboard -->

        </div>
    </main>

    @if (session('success'))
        <x-toast type="success" />
    @endif
@endsection
