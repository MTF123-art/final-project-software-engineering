@extends('layout.app')

@section('title', 'Home')

@section('content')
    <main>

        <!-- Title -->
        <section class="hero" data-aos="fade">
            <div class="hero-bg">
                <img src="{{ asset('assets') }}/img/destinations/d7.png" alt="">
            </div>
            <div class="bg-content container">
                <div class="hero-page-title">
                    <span class="hero-sub-title">Explore</span>
                    <h1 class="display-3 hero-title">
                        Sumenep
                    </h1>
                </div>
            </div>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="./index.html">Moliva Tours</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tour packages 1</li>
                </ol>
            </nav>
        </section>
        <!-- /Title -->

        <!-- Search tour -->
        <section class="bg-light" data-aos="fade">
            <h2 class="d-none">Search tours</h2>
            <div class="container">
                <div class="search-tours">
                    <form class="search-tour-form" method="post">
                        <div class="search-tour-input">
                            <div class="row g-3 g-xl-2 justify-content-center">
                                <div class="col-12 col-xl-8 col-md-6">
                                    <div class="input-icon-group">
                                        <label for="txtKeyword" class="input-icon hicon hicon-flights-pin"></label>
                                        <input id="txtKeyword" type="text" class="form-control shadow-sm"
                                            placeholder="Where are you going?">
                                    </div>
                                </div>
                                <div class="col-12 col-xl-2 col-md-6">
                                    <button type="submit" class="btn btn-primary btn-uppercase w-100">
                                        <i class="hicon hicon-bold hicon-search-box"></i>
                                        <span>Search</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- /Search tour -->

        <!-- Destination -->
        <section class="p-top-90 p-bottom-90 bg-gray-gradient">
            <div class="container">
                <!-- Title -->
                <div class="d-xl-flex align-items-xl-center pb-4" data-aos="fade">
                    <div class="block-title me-auto">
                        <small class="sub-title">Explore Sumenep</small>
                        <h2 class="h1 title">Popular Destinations in Sumenep</h2>
                    </div>
                </div>
                <!-- Title -->
                <!-- Destination list -->
                <div class="row">

                    @forelse ($popular as $single)
                        <div class="col-12 col-xxl-3 col-xl-4 col-md-6" data-aos="fade">
                            <!-- Destination -->
                            <a href="{{ route('detail-destination', ['slug' => $single->slug]) }}"
                                class="destination bottom-overlay hover-effect rounded mb-4">
                                <figure class="image-hover image-hover-overlay">
                                    <img src="{{ asset('storage/' . $single->highlight_photo) }}" alt=""
                                        onerror="this.onerror=null; this.src='{{ asset('assets/img/destinations/placeholder.webp') }}';">
                                    <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                </figure>
                                <div class="bottom-overlay-content">
                                    <div class="destination-content">
                                        <div class="destination-info">
                                            <h3 class="destination-title">{{ $single->nama_destinasi }}</h3>
                                            <span>{{ $single->reviews->count() }} Reviews</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- /Destination -->
                        </div>

                    @empty
                    @endforelse
                </div>
            </div>
        </section>
        <!-- /Destination -->

    </main>
@endsection
