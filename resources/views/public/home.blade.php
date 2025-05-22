@extends('layout.app')

@section('title', 'Home')

@section('content')
    <main>

        <!-- Title -->
        <section class="hero" data-aos="fade">
            <div class="hero-bg">
                <img src="{{ asset('assets') }}/img/destinations/d7.jpg" alt="">
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
                    <div class="col-12 col-xxl-3 col-xl-4 col-md-6" data-aos="fade">
                        <!-- Destination -->
                        <a href="{{ route('detail-destination', ['slug'=> "sasasa"]) }}" class="destination bottom-overlay hover-effect rounded mb-4" onerror="this.onerror=null; this.src='{{ asset('assets/img/destinations/placeholder.webp') }}';">
                            <figure class="image-hover image-hover-overlay">
                                <img src="{{ asset('assets') }}/img/destinations/d1.jpg" alt="">
                                <i class="hicon hicon-plus-thin image-hover-icon"></i>
                            </figure>
                            <div class="bottom-overlay-content">
                                <div class="destination-content">
                                    <div class="destination-info">
                                        <h3 class="destination-title">Noriva</h3>
                                        <span>162 tours</span>
                                    </div>
                                    <span class="circle-icon circle-icon-link">
                                        <i class="hicon hicon-flights-pin"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <!-- /Destination -->
                    </div>
                    <div class="col-12 col-xxl-3 col-xl-4 col-md-6" data-aos="fade">
                        <!-- Destination -->
                        <a href="{{ route('detail-destination', ['slug'=> "sasasa"]) }}" class="destination bottom-overlay hover-effect rounded mb-4">
                            <figure class="image-hover image-hover-overlay">
                                <img src="{{ asset('assets') }}/img/destinations/d2.jpg" alt="">
                                <i class="hicon hicon-plus-thin image-hover-icon"></i>
                            </figure>
                            <div class="bottom-overlay-content">
                                <div class="destination-content">
                                    <div class="destination-info">
                                        <h3 class="destination-title">Kardal</h3>
                                        <span>127 tours</span>
                                    </div>
                                    <span class="circle-icon circle-icon-link">
                                        <i class="hicon hicon-flights-pin"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <!-- /Destination -->
                    </div>
                    <div class="col-12 col-xxl-3 col-xl-4 col-md-6" data-aos="fade">
                        <!-- Destination -->
                        <a href="{{ route('detail-destination', ['slug'=> "sasasa"]) }}" class="destination bottom-overlay hover-effect rounded mb-4">
                            <figure class="image-hover image-hover-overlay">
                                <img src="{{ asset('assets') }}/img/destinations/d3.jpg" alt="">
                                <i class="hicon hicon-plus-thin image-hover-icon"></i>
                            </figure>
                            <div class="bottom-overlay-content">
                                <div class="destination-content">
                                    <div class="destination-info">
                                        <h3 class="destination-title">Leront</h3>
                                        <span>155 tours</span>
                                    </div>
                                    <span class="circle-icon circle-icon-link">
                                        <i class="hicon hicon-flights-pin"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <!-- /Destination -->
                    </div>
                    <div class="col-12 col-xxl-3 col-xl-4 col-md-6" data-aos="fade">
                        <!-- Destination -->
                        <a href="{{ route('detail-destination', ['slug'=> "sasasa"]) }}" class="destination bottom-overlay hover-effect rounded mb-4">
                            <figure class="image-hover image-hover-overlay">
                                <img src="{{ asset('assets') }}/img/destinations/d4.jpg" alt="">
                                <i class="hicon hicon-plus-thin image-hover-icon"></i>
                            </figure>
                            <div class="bottom-overlay-content">
                                <div class="destination-content">
                                    <div class="destination-info">
                                        <h3 class="destination-title">Fruska</h3>
                                        <span>210 tours</span>
                                    </div>
                                    <span class="circle-icon circle-icon-link">
                                        <i class="hicon hicon-flights-pin"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <!-- /Destination -->
                    </div>
                    <div class="col-12 col-xxl-3 col-xl-4 col-md-6" data-aos="fade">
                        <!-- Destination -->
                        <a href="{{ route('detail-destination', ['slug'=> "sasasa"]) }}" class="destination bottom-overlay hover-effect rounded mb-4">
                            <figure class="image-hover image-hover-overlay">
                                <img src="{{ asset('assets') }}/img/destinations/d6.jpg" alt="">
                                <i class="hicon hicon-plus-thin image-hover-icon"></i>
                            </figure>
                            <div class="bottom-overlay-content">
                                <div class="destination-content">
                                    <div class="destination-info">
                                        <h3 class="destination-title">Zolmir</h3>
                                        <span>176 tours</span>
                                    </div>
                                    <span class="circle-icon circle-icon-link">
                                        <i class="hicon hicon-flights-pin"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <!-- /Destination -->
                    </div>
                    <div class="col-12 col-xxl-3 col-xl-4 col-md-6" data-aos="fade">
                        <!-- Destination -->
                        <a href="{{ route('detail-destination', ['slug'=> "sasasa"]) }}" class="destination bottom-overlay hover-effect rounded mb-4">
                            <figure class="image-hover image-hover-overlay">
                                <img src="{{ asset('assets') }}/img/destinations/d5.jpg" alt="">
                                <i class="hicon hicon-plus-thin image-hover-icon"></i>
                            </figure>
                            <div class="bottom-overlay-content">
                                <div class="destination-content">
                                    <div class="destination-info">
                                        <h3 class="destination-title">Sitafo</h3>
                                        <span>321 tours</span>
                                    </div>
                                    <span class="circle-icon circle-icon-link">
                                        <i class="hicon hicon-flights-pin"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <!-- /Destination -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /Destination -->

        <!-- About -->
        <section class="p-top-90 p-bottom-90 bg-gray-gradient" data-aos="fade">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 col-xl-6 order-1 order-xl-0">
                        <!-- Image -->
                        <div class="pe-xl-5">
                            <div class="image-info image-info-right image-info-vertical mb-5">
                                <div class="image-center rounded">
                                    <img src="{{ asset('assets') }}/img/about/a4.jpg" class="w-100" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- /Image -->
                    </div>
                    <div class="col-12 col-xl-6 order-0 order-xl-1">
                        <!-- Content -->
                        <div class="pt-4 mb-5 mb-xl-0">
                            <div class="block-title">
                                <small class="sub-title">Beautiful & Romantic</small>
                                <h2 class="h1 title">About Sumenep</h2>
                            </div>
                            <p>
                                Moliva is a breathtaking country known for its stunning natural landscapes.
                                From lush green valleys and majestic mountains to pristine beaches and serene lakes,
                                Moliva offers a diverse array of picturesque views that captivate every traveler.
                                The country’s unspoiled beauty provides the perfect backdrop for outdoor adventures
                                and peaceful retreats alike.
                            </p>
                            <p>
                                Beyond its scenic wonders, Moliva is home to incredibly friendly people and a rich cultural
                                heritage.
                                The vibrant culture is a tapestry of unique traditions, colorful festivals,
                                and diverse culinary delights that reflect the country's deep historical roots and artistic
                                expressions.
                                In Moliva, every visit is an opportunity to experience warmth, hospitality,
                                and a true sense of cultural richness.
                            </p>
                        </div>
                        <!-- /Content -->
                    </div>
                </div>
                <!-- Overview -->
                <div class="row g-3 g-lg-4 mb-0">
                    <div class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small">
                            <span class="card-icon">
                                <i class="hicon hicon-global"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">Continent</small>
                                <h3 class="h5 card-title">Asia</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small">
                            <span class="card-icon">
                                <i class="hicon hicon-poi"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">Capital</small>
                                <h3 class="h5 card-title">Noriva city</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small">
                            <span class="card-icon">
                                <i class="hicon hicon-seriously-multilingual"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">Language</small>
                                <h3 class="h5 card-title">English</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small">
                            <span class="card-icon">
                                <i class="hicon hicon-more-money"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">Currency</small>
                                <h3 class="h5 card-title">Moli</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small">
                            <span class="card-icon">
                                <i class="hicon hicon-light-snow"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">Weather</small>
                                <h3 class="h5 card-title">4 Seasons</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small">
                            <span class="card-icon">
                                <i class="hicon hicon-wintry-mix-snow-sleet"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">Winter (avg)</small>
                                <h3 class="h5 card-title">41°F/5°C</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small">
                            <span class="card-icon">
                                <i class="hicon hicon-partly-cloudy-day"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">Summer (avg)</small>
                                <h3 class="h5 card-title">68°F/20°C</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small">
                            <span class="card-icon">
                                <i class="hicon hicon-time-clock"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">Time Zone</small>
                                <h3 class="h5 card-title">GMT+2</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Overview -->
            </div>
        </section>
        <!-- /About -->

    </main>
@endsection
