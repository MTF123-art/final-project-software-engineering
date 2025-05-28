@extends('layout.app')

@section('title', 'About Us')

@section('content')
    <main>

        <!-- Title -->
        <section class="hero aos-init aos-animate" data-aos="fade">
            <div class="hero-bg">
                <img src="{{ asset('assets') }}/img/destinations/d7.png" alt="">
            </div>
            <div class="bg-content container">
                <div class="hero-page-title">
                    <span class="hero-sub-title">Get to Know Us</span>
                    <h1 class="display-3 hero-title">
                        About Us
                    </h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About us</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- /Title -->

        <!-- Featured -->
        <section class="pt-5 pb-4 aos-init aos-animate" data-aos="fade">
            <div class="container">
                <ul class="stats-list row g-0">
                    <li class="col-6 col-xl-3">
                        <div class="stats-item">
                            <h2 class="h1 stats-number">+250</h2>
                            <p class="stats-desc">
                                Attractive tours <br> around Moliva
                            </p>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="stats-item">
                            <h2 class="h1 stats-number">+1.1M</h2>
                            <p class="stats-desc">
                                Clients from<br> around the world
                            </p>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="stats-item">
                            <h2 class="h1 stats-number">4.9</h2>
                            <p class="stats-desc">
                                <span class="star-rate-view star-rate-size-sm"><span
                                        class="star-value rate-50"></span></span>
                                <br>
                                <span>On Tripadvisor</span>
                            </p>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="stats-item">
                            <h2 class="h1 stats-number">+98%</h2>
                            <p class="stats-desc">
                                Our clients <br>are satisfied
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- /Featured -->

        <!-- About -->
        <section class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 col-xl-6 order-1 order-xl-0">
                        <!-- Image -->
                        <div class="image-info image-info-vertical me-xl-5">
                            <div class="vertical-title">
                                <small class="ls-2">
                                    <strong class="text-primary fw-semibold">Sine 1993</strong> - <strong
                                        class="text-body fw-semibold">31 years</strong> of experience
                                </small>
                            </div>
                            <div class="image-center rounded">
                                <img src="./assets/img/about/a5.jpg" alt="">
                            </div>
                            <div class="position-absolute top-0 end-0 me-4 mt-4">
                                <div class="vertical-award rounded shadow-sm">
                                    <div class="award-content">
                                        <img src="./assets/img/logos/trip-best.png" class="w-100" alt="">
                                    </div>
                                    <div class="award-footer">
                                        <small>Tripadvisor</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Image -->
                    </div>
                    <div class="col-12 col-xl-6 order-0 order-xl-1">
                        <!-- Content -->
                        <div class="pt-xl-4 mb-xl-0 mb-5">
                            <div class="block-title">
                                <small class="sub-title">Moliva Travel Agency</small>
                                <h2 class="h1 title lh-sm">We are the leading tour service provider in Moliva</h2>
                            </div>
                            <p>
                                Moliva Travel Agency is your gateway to unforgettable adventures in the beautiful
                                country of Moliva. With years of experience and a passion for travel, we offer
                                expertly curated tours that showcase Moliva's stunning landscapes, vibrant culture,
                                and rich history. Our dedicated team ensures every aspect of your journey is seamless,
                                from comfortable accommodations to immersive activities. Whether exploring majestic
                                mountains, serene lakes, or bustling market districts, our itineraries cater to all
                                interests. At Moliva Travel Agency, we pride ourselves on exceptional service and
                                unique experiences that leave lasting memories. Discover Moliva’s hidden gems with us!
                            </p>
                            <div class="pt-3">
                                <a href="./contact.html" class="btn btn-primary mnw-180">
                                    <i class="hicon hicon-email-envelope"></i>
                                    <span>Let's talk now</span>
                                </a>
                                <a href="tel:+33321654987" class="btn btn-link link-dark link-hover fw-medium mnw-180">
                                    <i class="hicon hicon-telephone"></i>
                                    <span>+33 321-654-987</span>
                                </a>
                            </div>
                        </div>
                        <!-- /Content -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /About -->

    </main>
@endsection
