@extends('layout.app')

@section('title', 'Pengelola Dashboard')

@section('mini-account-menu')
@include('pengelola.mini-account-menu')
@endsection

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
                            @if ($mydestination)
                                <div
                                    class="mini-card shadow-sm rounded p-4 mb-4 justify-content-between align-items-center">
                                    <div>
                                        <h2 class="card-title mb-1">{{ $mydestination->nama_destinasi }}</h2>
                                        <p class="mb-0">{{ $mydestination->deskripsi }}</p>
                                    </div>
                                    <div>
                                        <a href="{{ route('pengelola.destination.index') }}" class="btn btn-primary">Edit
                                            Destinasi</a>
                                    </div>
                                </div>

                                <!-- Review Section -->
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body">
                                        <h2 class="h3 ff-primary mb-4 text-body-emphasis">Ulasan terbaru</h2>
                                        @forelse ($mydestination->reviews->take(3) as $review)
                                            <div class="border-bottom pb-3 mb-3">
                                                <strong>{{ $review->user->name }}</strong>
                                                <div class="testimonial-star d-flex align-items-center gap-2 mb-1">
                                                    <span class="star-rate-view star-rate-size-sm">
                                                        <span class="star-value rate-{{ $review->rating }}"></span>
                                                    </span>
                                                    <span
                                                        class="testimonial-date rounded-1">{{ $review->created_at->format('d-m-Y') }}</span>
                                                </div>
                                                <p class="mb-0">{{ $review->komentar }}</p>
                                            </div>
                                        @empty
                                            <p>Belum ada ulasan.</p>
                                        @endforelse
                                    </div>
                                </div>
                            @else
                                <div class="alert alert-warning">
                                    <strong>Destinasi belum tersedia.</strong> Silakan <a
                                        href="{{ route('pengelola.destination.index') }}">tambahkan destinasi</a>
                                    terlebih dahulu.
                                </div>
                            @endif
                            <!-- /Destinasi Info -->

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
@endsection
