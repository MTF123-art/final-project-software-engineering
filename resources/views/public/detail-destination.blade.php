@extends('layout.app')

@section('title', $destinasi->nama_destinasi . ' - Sumenep Explore')

@section('content')
    <main>
        <!-- Hero Section -->
        <section class="hero aos-init aos-animate" data-aos="fade">
            <div class="hero-bg">
                <img src="{{ asset('storage/' . $destinasi->highlight_photo) }}" alt="{{ $destinasi->nama_destinasi }}"
                    onerror="this.onerror=null; this.src='{{ asset('assets/img/destinations/placeholder.webp') }}';">
            </div>
            <div class="bg-content container">
                <div class="hero-page-title">
                    <h1 class="display-4 hero-title mb-2">
                        {{ $destinasi->nama_destinasi }}
                    </h1>
                    <div class="fs-5 hero-desc">
                        <span class="me-3"><i class="hicon hicon-flights-pin"></i> {{ $destinasi->lokasi }}</span>
                        <span class="me-3"><i class="hicon hicon-tag"></i> {{ $destinasi->kategori->nama_kategori }}</span>
                    </div>
                    <div class="mt-4">
                        @if (Auth::check() && Auth::user()->role == 'user')
                            <form action="{{ route('user.bookmark.save', ['id' => $destinasi->id]) }}" method="POST" class="d-inline-block">
                                @csrf
                                <button class="btn btn-primary btn-uppercase mnw-180" type="submit">
                                    <i class="hicon hicon-bold hicon-dynamic-banner"></i>
                                    <span>Add to Bookmark</span>
                                </button>
                            </form>
                        @elseif (Auth::check() && in_array(Auth::user()->role, ['admin', 'pengelola']))
                            <button class="btn btn-primary btn-uppercase mnw-180" data-bs-toggle="modal"
                                data-bs-target="#alertModal2">
                                <i class="hicon hicon-bold hicon-dynamic-banner"></i>
                                <span>Add to Bookmark</span>
                            </button>
                        @else
                            <button class="btn btn-primary btn-uppercase mnw-180" data-bs-toggle="modal"
                                data-bs-target="#alertModal1">
                                <i class="hicon hicon-bold hicon-dynamic-banner"></i>
                                <span>Add to Bookmark</span>
                            </button>
                        @endif
                    </div>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('destination') }}">Destinasi Wisata</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('destination', ['slug' => $destinasi->kategori->slug]) }}">{{ $destinasi->kategori->nama_kategori }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $destinasi->nama_destinasi }}</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- Statistics Section -->
        <section class="pt-5 pb-5 border-top aos-init aos-animate" data-aos="fade">
            <div class="container">
                <div class="row g-3">
                    <div class="col-6 col-md-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-dynamic-banner"></i>
                            </span>
                            <div class="card-content">
                                <h2 class="card-title">{{ $destinasi->bookmarks->count() }}</h2>
                                <small class="card-desc">Tersimpan</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-chat"></i>
                            </span>
                            <div class="card-content">
                                <h2 class="card-title">{{ $destinasi->reviews->count() }}</h2>
                                <small class="card-desc">Ulasan</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-star"></i>
                            </span>
                            <div class="card-content">
                                <h2 class="card-title">{{ $destinasi->reviews->count() > 0 ? number_format($destinasi->reviews->avg('rating') / 10, 1) : '0.0' }}</h2>
                                <small class="card-desc">Rating</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-user"></i>
                            </span>
                            <div class="card-content">
                                <h2 class="card-title text-truncate" title="{{ $destinasi->pengelola->name }}">{{ Str::limit($destinasi->pengelola->name, 8) }}</h2>
                                <small class="card-desc">Pengelola</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Statistics Section -->

        <!-- Content Section -->
        <section class="p-top-90 p-bottom-90 bg-gray-gradient">
            <div class="container">
                <!-- About Card -->
                <div class="card border-0 shadow-sm p-xl-2 mb-4 aos-init aos-animate" data-aos="fade">
                    <div class="card-body">
                        <div class="border-bottom mb-4 pb-4">
                            <h2 class="text-body-emphasis mb-0">Tentang Destinasi</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 mb-3">
                                <h3 class="h5 text-muted">Kategori</h3>
                                <p class="mb-0">{{ $destinasi->kategori->nama_kategori }}</p>
                            </div>
                            <div class="col-lg-3 mb-3">
                                <h3 class="h5 text-muted">Lokasi</h3>
                                <p class="mb-0">{{ $destinasi->lokasi }}</p>
                            </div>
                            <div class="col-lg-3 mb-3">
                                <h3 class="h5 text-muted">Pengelola</h3>
                                <p class="mb-0">{{ $destinasi->pengelola->name }}</p>
                            </div>
                            <div class="col-lg-3 mb-3">
                                <h3 class="h5 text-muted">Dibuat</h3>
                                <p class="mb-0">{{ $destinasi->created_at->format('d M Y') }}</p>
                            </div>
                        </div>
                        <div class="border-top mt-4 pt-4">
                            <h3 class="h5 text-muted mb-3">Deskripsi</h3>
                            <p class="mb-0">{{ $destinasi->deskripsi }}</p>
                        </div>
                    </div>
                </div>
                <!-- /About Card -->

                <!-- Photos Gallery -->
                @if($destinasi->galeri && $destinasi->galeri->count() > 0)
                <div class="card border-0 shadow-sm p-xl-2 mb-4 aos-init aos-animate" data-aos="fade">
                    <div class="card-body">
                        <div class="border-bottom mb-4 pb-4">
                            <h2 class="text-body-emphasis mb-0">Galeri Foto</h2>
                            <small class="text-muted">{{ $destinasi->galeri->count() }} foto tersedia</small>
                        </div>
                        <div class="row g-3">
                            @foreach ($destinasi->galeri as $index => $foto)
                                <div class="col-6 col-md-4 col-lg-3">
                                    <a href="{{ asset('storage/' . $foto->url_gambar) }}" class="glightbox"
                                        data-glightbox="title:{{ $destinasi->nama_destinasi }} - Foto {{ $index + 1 }}" 
                                        data-gallery="destination-gallery">
                                        <figure class="image-hover image-hover-scale image-hover-overlay rounded mb-0">
                                            <img src="{{ asset('storage/' . $foto->url_gambar) }}" 
                                                 alt="{{ $destinasi->nama_destinasi }} - Foto {{ $index + 1 }}" 
                                                 class="img-fluid rounded"
                                                 onerror="this.onerror=null; this.src='{{ asset('assets/img/destinations/placeholder.webp') }}';">
                                            <i class="hicon hicon-zoom-bold image-hover-icon fs-5"></i>
                                        </figure>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
                <!-- /Photos Gallery -->
            </div>
        </section>
        <!-- /Content Section -->

        <!-- Reviews Section -->
        <section id="reviews" class="p-top-90 p-bottom-90 bg-gray-gradient">
            <div class="container">
                <!-- Section Title -->
                <div class="block-title me-auto pb-4 aos-init" data-aos="fade">
                    <small class="sub-title">Ulasan Pengunjung</small>
                    <h2 class="h1 title">Ulasan & Rating</h2>
                </div>
                <!-- /Section Title -->

                <div class="row">
                    <!-- Overall Rating Card -->
                    <div class="col-12 col-lg-6 mb-4">
                        <div class="card border-0 shadow-sm h-100 aos-init" data-aos="fade">
                            <div class="card-body text-center">
                                <h3 class="h4 mb-4">Rating Keseluruhan</h3>
                                <div class="mb-3">
                                    <h4 class="display-4 text-primary mb-0">
                                        {{ $destinasi->reviews->count() > 0 ? number_format($destinasi->reviews->avg('rating') / 10, 1) : '0.0' }}
                                    </h4>
                                    <div class="my-2">
                                        @php
                                            $avgRating = $destinasi->reviews->avg('rating') ?? 0;
                                            $roundedRating = round($avgRating / 5) * 5;
                                            $starClass = max(5, min(50, $roundedRating));
                                        @endphp
                                        <span class="star-rate-view">
                                            <span class="star-value rate-{{ $starClass }}"></span>
                                        </span>
                                    </div>
                                    <p class="text-muted mb-0">
                                        Berdasarkan <strong>{{ $destinasi->reviews->count() }}</strong> ulasan
                                    </p>
                                </div>
                                @php
                                    $ratingLabel = 'Belum ada ulasan';
                                    if($destinasi->reviews->count() > 0) {
                                        $avg = $destinasi->reviews->avg('rating') / 10;
                                        if($avg >= 4.5) $ratingLabel = 'Luar Biasa';
                                        elseif($avg >= 4.0) $ratingLabel = 'Sangat Bagus';
                                        elseif($avg >= 3.5) $ratingLabel = 'Bagus';
                                        elseif($avg >= 3.0) $ratingLabel = 'Cukup';
                                        elseif($avg >= 2.0) $ratingLabel = 'Kurang';
                                        else $ratingLabel = 'Buruk';
                                    }
                                @endphp
                                <span class="badge bg-primary fs-6">{{ $ratingLabel }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Leave Review Card -->
                    <div class="col-12 col-lg-6 mb-4">
                        <div class="card border-0 shadow-sm h-100 aos-init" data-aos="fade">
                            <div class="card-body text-center d-flex flex-column justify-content-center">
                                <h3 class="h4 mb-4">Berikan Ulasan Anda</h3>
                                <p class="text-muted mb-4">Bagikan pengalaman Anda mengunjungi destinasi ini</p>
                                @if (Auth::check() && Auth::user()->role == 'user')
                                    <button class="btn btn-primary btn-lg" type="button"
                                        data-bs-toggle="modal" data-bs-target="#reviewModal">
                                        <i class="hicon hicon-bold hicon-mmb-inbox me-2"></i>
                                        Tulis Ulasan
                                    </button>
                                @elseif (Auth::check() && Auth::user()->role != 'user')
                                    <button class="btn btn-primary btn-lg" type="button"
                                        data-bs-toggle="modal" data-bs-target="#alertModal3">
                                        <i class="hicon hicon-bold hicon-mmb-inbox me-2"></i>
                                        Tulis Ulasan
                                    </button>
                                @else
                                    <button class="btn btn-primary btn-lg" type="button"
                                        data-bs-toggle="modal" data-bs-target="#alertModal4">
                                        <i class="hicon hicon-bold hicon-mmb-inbox me-2"></i>
                                        Tulis Ulasan
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Reviews -->
                <div class="card border-0 shadow-sm aos-init" data-aos="fade">
                    <div class="card-body">
                        <div class="border-bottom d-flex align-items-center pb-4 mb-4">
                            <h3 class="h4 me-auto mb-0">Ulasan Terbaru</h3>
                            <span class="badge bg-light text-dark">{{ $destinasi->reviews->where('status', '!=', 'hidden')->count() }} ulasan</span>
                        </div>

                        @forelse ($destinasi->reviews->where('status', '!=', 'hidden') as $review)
                            <div class="review-list border-bottom pb-4 mb-4">
                                <div class="review-item">
                                    <div class="review-client d-flex align-items-center mb-3">
                                        <figure class="review-avatar me-3 mb-0">
                                            <img src="{{ asset('storage/' . $review->user->image) }}"
                                                alt="{{ $review->user->name }}" 
                                                style="width: 50px; height: 50px;"
                                                onerror="this.onerror=null; this.src='{{ asset('assets/img/destinations/placeholder.webp') }}';"
                                                class="rounded-circle">
                                        </figure>
                                        <div class="review-name flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <strong class="d-block">{{ $review->user->name }}</strong>
                                                    <small class="text-muted">({{ ucfirst($review->user->role) }})</small>
                                                </div>
                                                <div class="text-end">
                                                    <span class="star-rate-view star-rate-size-sm d-block">
                                                        <span class="star-value rate-{{ $review->rating }}"></span>
                                                    </span>
                                                    <small class="text-muted">{{ $review->created_at->format('d M Y') }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-0">{{ $review->komentar }}</p>
                                </div>
                            </div>
                        @empty
                            <div class="text-center py-5">
                                <i class="hicon hicon-chat fs-1 text-muted mb-3"></i>
                                <h4 class="text-muted mb-2">Belum ada ulasan</h4>
                                <p class="text-muted mb-0">Jadilah yang pertama memberikan ulasan untuk destinasi ini</p>
                            </div>
                        @endforelse

                        @if($destinasi->reviews->where('status', '!=', 'hidden')->count() > 5)
                            <div class="text-center mt-4">
                                <button class="btn btn-outline-primary">
                                    <i class="hicon hicon-bold hicon-refresh me-2"></i>
                                    <span>Muat Lebih Banyak</span>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- /Reviews Section -->
    </main>

    <!-- Modals -->
    <!-- Alert Modal for Non-logged Users (Bookmark) -->
    <div class="modal fade" id="alertModal1" tabindex="-1" aria-labelledby="alertModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="alertModalLabel1">Login Diperlukan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-3">
                        <i class="hicon hicon-dynamic-banner fs-1 text-primary"></i>
                    </div>
                    <p class="text-center">Untuk menyimpan destinasi ke bookmark, Anda harus login terlebih dahulu.</p>
                    <div class="d-grid gap-2">
                        <a href="{{ route('login-form') }}" class="btn btn-primary">Login</a>
                        <a href="{{ route('register-form') }}" class="btn btn-outline-primary">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Alert Modal for Admin/Pengelola (Bookmark) -->
    <div class="modal fade" id="alertModal2" tabindex="-1" aria-labelledby="alertModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="alertModalLabel2">Akses Terbatas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body text-center">
                    <i class="hicon hicon-lock fs-1 text-warning mb-3"></i>
                    <p class="mb-0">Fitur bookmark hanya tersedia untuk pengguna dengan role <strong>User</strong>.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Alert Modal for Admin/Pengelola (Review) -->
    <div class="modal fade" id="alertModal3" tabindex="-1" aria-labelledby="alertModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="alertModalLabel3">Akses Terbatas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body text-center">
                    <i class="hicon hicon-lock fs-1 text-warning mb-3"></i>
                    <p class="mb-0">Fitur ulasan hanya tersedia untuk pengguna dengan role <strong>User</strong>.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Alert Modal for Non-logged Users (Review) -->
    <div class="modal fade" id="alertModal4" tabindex="-1" aria-labelledby="alertModalLabel4" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="alertModalLabel4">Login Diperlukan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-3">
                        <i class="hicon hicon-mmb-inbox fs-1 text-primary"></i>
                    </div>
                    <p class="text-center">Untuk memberikan ulasan, Anda harus login terlebih dahulu.</p>
                    <div class="d-grid gap-2">
                        <a href="{{ route('login-form') }}" class="btn btn-primary">Login</a>
                        <a href="{{ route('register-form') }}" class="btn btn-outline-primary">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Review Modal -->
    @auth
        <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="reviewModalLabel">Ulasan untuk {{ $destinasi->nama_destinasi }}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <div class="review-preview mb-4 p-3 bg-light rounded">
                            <div class="d-flex align-items-center">
                                <figure class="review-avatar mb-0 me-3">
                                    <img src="{{ asset('storage/' . Auth::user()->image) }}" 
                                         alt="{{ Auth::user()->name }}"
                                         onerror="this.onerror=null; this.src='{{ asset('assets/img/destinations/placeholder.webp') }}';"
                                         style="width: 50px; height: 50px;" 
                                         class="rounded-circle">
                                </figure>
                                <div>
                                    <strong class="d-block">{{ Auth::user()->name }}</strong>
                                    <small class="text-muted">({{ ucfirst(Auth::user()->role) }})</small>
                                </div>
                            </div>
                        </div>
                        
                        <form method="post" action="{{ route('user.review.store', ['id' => $destinasi->id]) }}">
                            @csrf
                            <div class="row g-4">
                                <div class="col-12">
                                    <label for="rating" class="form-label">Rating <span class="text-danger">*</span></label>
                                    <select class="form-select shadow-sm" name="rating" id="rating" required>
                                        <option value="">-- Pilih Rating --</option>
                                        <option value="50">⭐⭐⭐⭐⭐ - Luar Biasa</option>
                                        <option value="40">⭐⭐⭐⭐ - Sangat Bagus</option>
                                        <option value="30">⭐⭐⭐ - Bagus</option>
                                        <option value="20">⭐⭐ - Cukup</option>
                                        <option value="10">⭐ - Kurang</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="komentar" class="form-label">Ulasan Anda <span class="text-danger">*</span></label>
                                    <textarea class="form-control shadow-sm" 
                                              placeholder="Ceritakan pengalaman Anda mengunjungi destinasi ini..." 
                                              id="komentar" 
                                              name="komentar" 
                                              rows="5" 
                                              required></textarea>
                                    <div class="form-text">Minimal 10 karakter, maksimal 500 karakter</div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end gap-2 mt-4">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="hicon hicon-check me-2"></i>
                                    Kirim Ulasan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endauth

    <!-- Toast Notifications -->
    @if (session('success'))
        <x-toast type="success" />
    @endif
    @if (session('error'))
        <x-toast type="error" />
    @endif
@endsection