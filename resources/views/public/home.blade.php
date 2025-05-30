@extends('layout.app')

@section('title', 'Explore Sumenep - Temukan Keindahan Wisata Sumenep')

@section('content')
    <main>
        <!-- Hero Section -->
        <section class="hero aos-init aos-animate" data-aos="fade">
            <div class="hero-bg">
                <img src="{{ asset('assets/img/destinations/d7.png') }}" alt="Explore Sumenep"
                    onerror="this.onerror=null; this.src='{{ asset('assets/img/destinations/placeholder.webp') }}';">
            </div>
            <div class="bg-content container">
                <div class="hero-page-title">
                    <small class="hero-sub-title">Jelajahi Keindahan</small>
                    <h1 class="display-3 hero-title mb-3">
                        Sumenep
                    </h1>
                    <div class="fs-5 hero-desc mb-4">
                        <span class="me-4"><i class="hicon hicon-flights-pin"></i> Madura, Jawa Timur</span>
                        <span class="me-4"><i class="hicon hicon-tag"></i> {{ $popular->count() }} Destinasi
                            Populer</span>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('destination') }}" class="btn btn-primary btn-uppercase mnw-180 me-3">
                            <i class="hicon hicon-bold hicon-search-box"></i>
                            <span>Jelajahi Destinasi</span>
                        </a>
                        <a href="#popular-destinations" class="btn btn-outline-light btn-uppercase mnw-180">
                            <i class="hicon hicon-bold hicon-flights-one-ways"></i>
                            <span>Lihat Populer</span>
                        </a>
                    </div>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- Search Section -->
        <section class="bg-light aos-init aos-animate" data-aos="fade">
            <div class="container">
                <div class="search-tours">
                    <form class="search-tour-form" method="GET" action="{{ route('destination') }}">
                        <div class="search-tour-input">
                            <div class="row g-3 g-xl-2 justify-content-center">
                                <div class="col-12 col-xl-8 col-md-6">
                                    <div class="input-icon-group">
                                        <label for="txtKeyword" class="input-icon hicon hicon-flights-pin"></label>
                                        <input id="txtKeyword" name="search" type="text" class="form-control shadow-sm"
                                            placeholder="Cari destinasi wisata di Sumenep..."
                                            value="{{ request('search') }}">
                                    </div>
                                </div>
                                <div class="col-12 col-xl-2 col-md-6">
                                    <button type="submit" class="btn btn-primary btn-uppercase w-100">
                                        <i class="hicon hicon-bold hicon-search-box"></i>
                                        <span>Cari</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- /Search Section -->

        <!-- Statistics Section -->
        <section class="pt-5 pb-5 border-top aos-init aos-animate" data-aos="fade">
            <div class="container">
                <div class="row g-3">
                    <div class="col-6 col-md-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-flights-pin"></i>
                            </span>
                            <div class="card-content">
                                <h2 class="card-title">{{ $total_destinasi ?? '50+' }}</h2>
                                <small class="card-desc">Destinasi</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-user"></i>
                            </span>
                            <div class="card-content">
                                <h2 class="card-title">{{ $total_visitors ?? '10K+' }}</h2>
                                <small class="card-desc">Pengunjung</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-star"></i>
                            </span>
                            <div class="card-content">
                                <h2 class="card-title">4.8</h2>
                                <small class="card-desc">Rating</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-chat"></i>
                            </span>
                            <div class="card-content">
                                <h2 class="card-title">{{ $total_reviews ?? '500+' }}</h2>
                                <small class="card-desc">Ulasan</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Statistics Section -->


        <!-- Popular Destinations -->
        <section id="popular-destinations" class="pt-5 p-bottom-90 bg-gray-gradient aos-init aos-animate"
            data-aos="fade">
            <div class="container">
                <!-- Section Title -->
                <div class="d-xl-flex align-items-xl-center pb-4">
                    <div class="block-title me-auto">
                        <small class="sub-title">Destinasi Terpopuler</small>
                        <h2 class="h1 title">Destinasi Favorit di Sumenep</h2>
                    </div>
                    <div class="mt-3 mt-xl-0">
                        <a href="{{ route('destination') }}" class="btn btn-outline-primary btn-uppercase">
                            <i class="hicon hicon-bold hicon-flights-one-ways me-2"></i>
                            <span>Lihat Semua</span>
                        </a>
                    </div>
                </div>
                <!-- /Section Title -->

                <!-- Destinations Grid -->
                <div class="row">
                    @forelse ($popular as $single)
                        <div class="col-12 col-xxl-3 col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade">
                            <!-- Post -->
                            <div class="post shadow-sm rounded hover-effect mb-4">
                                <div class="post-img">
                                    <a href="{{ route('destination', ['slug' => $single->kategori->slug]) }}"
                                        class="float-text float-absolute">{{ $single->kategori->nama_kategori }}</a>
                                    <a href="{{ route('detail-destination', ['slug' => $single->slug]) }}">
                                        <figure class="image-hover image-hover-overlay rounded">
                                            <img src="{{ asset('storage/' . $single->highlight_photo) }}"
                                                alt="{{ $single->nama_destinasi }}" class="img-fluid rounded"
                                                onerror="this.onerror=null; this.src='{{ asset('assets/img/destinations/placeholder.webp') }}';">
                                            <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                        </figure>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="{{ route('detail-destination', ['slug' => $single->slug]) }}">
                                            {{ $single->nama_destinasi }}
                                        </a>
                                    </h3>
                                    <div class="post-meta mb-2">
                                        <span class="text-muted me-3">
                                            <i class="hicon hicon-flights-pin me-1"></i>
                                            {{ $single->lokasi }}
                                        </span>
                                    </div>
                                    <div class="post-link">
                                        <div class="post-ext">
                                            <div class="post-comment">
                                                <i class="hicon hicon-chat"></i>
                                                <span>{{ $single->reviews->count() }} Ulasan</span>
                                            </div>
                                            <div class="post-comment">
                                                <i class="hicon hicon-dynamic-banner"></i>
                                                <span>{{ $single->bookmarks->count() }} Bookmark</span>
                                            </div>
                                            @if ($single->reviews->count() > 0)
                                                <div class="post-comment">
                                                    <i class="hicon hicon-star"></i>
                                                    <span>{{ number_format($single->reviews->avg('rating') / 10, 1) }}</span>
                                                </div>
                                            @endif
                                        </div>
                                        <a href="{{ route('detail-destination', ['slug' => $single->slug]) }}"
                                            class="circle-icon circle-icon-link" title="Lihat Detail">
                                            <i class="hicon hicon-flights-one-ways fs-4"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Post -->
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="card border-0 shadow-sm text-center p-5 mb-4">
                                <div class="mb-3">
                                    <i class="hicon hicon-flights-pin fs-1 text-muted"></i>
                                </div>
                                <h4 class="mb-2">Belum ada destinasi populer</h4>
                                <p class="text-muted mb-4">Destinasi wisata akan segera ditambahkan untuk memberikan
                                    pengalaman terbaik bagi Anda.</p>
                                <a href="{{ route('destination') }}" class="btn btn-primary">
                                    <i class="hicon hicon-search-box me-2"></i>
                                    Jelajahi Destinasi Lain
                                </a>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
        <!-- /Popular Destinations -->
    </main>

    <!-- Toast Notifications -->
    @if (session('success'))
        <x-toast type="success" />
    @endif
    @if (session('error'))
        <x-toast type="error" />
    @endif
@endsection
