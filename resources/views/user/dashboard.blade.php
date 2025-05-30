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
                                    <h2 class="h3 ff-primary mb-4 text-body-emphasis">Destinasi Favorit Baru</h2>

                                    <div class="row g-3">
                                        @forelse ($mybookmarks as $mybookmark)
                                            <div class="col-md-6">
                                                <a href="{{ route('detail-destination', $mybookmark->destinasi->slug) }}"
                                                    class="d-block p-3 border rounded text-decoration-none text-dark shadow-sm hover-effect">
                                                    <strong>{{ $mybookmark->destinasi->nama_destinasi }}</strong>
                                                    <p class="mb-0 small text-muted">{{ $mybookmark->destinasi->lokasi }}
                                                    </p>
                                                </a>
                                            </div>

                                        @empty
                                            <div class="alert alert-warning">
                                                <strong>Belum ada destinasi yang disimpan.</strong> Silakan <a
                                                    href="{{ route('destination') }}">tambahkan
                                                    destinasi</a>
                                                terlebih dahulu.
                                            </div>
                                        @endforelse
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
