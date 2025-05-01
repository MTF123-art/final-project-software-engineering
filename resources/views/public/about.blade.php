@extends('layout.app')

@section('title', 'About Us')

@section('content')
    <main>

        <!-- Title -->
        <section class="hero aos-init aos-animate" data-aos="fade">
            <div class="hero-bg">
                <img src="./assets/img/about/a6.jpg" alt="">
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

        <!-- Why -->
        <section class="hero aos-init aos-animate" data-aos="fade">
            <div class="hero-bg">
                <img src="./assets/img/background/b6.jpg" alt="">
            </div>
            <div class="bg-content container">
                <div class="p-top-90 p-bottom-50">
                    <div class="block-title text-center pb-4">
                        <small class="sub-title">Great experience</small>
                        <h2 class="h1 title text-white">Why choose us</h2>
                    </div>
                    <div class="why-slider splide splide__pagination__start w-100 mb-5 mb-xl-0 splide--loop splide--ltr splide--draggable is-active is-initialized"
                        id="splide02" role="region" aria-roledescription="carousel">
                        <div class="splide__track pt-2 pb-2 splide__track--loop splide__track--ltr splide__track--draggable"
                            id="splide02-track" style="padding-left: 0px; padding-right: 0px;" aria-live="polite"
                            aria-atomic="true">
                            <ul class="splide__list" id="splide02-list" role="presentation"
                                style="transform: translateX(-2720px);">
                                <li class="splide__slide splide__slide--clone is-active" id="splide02-clone01"
                                    role="tabpanel" aria-roledescription="slide" aria-label="1 of 4"
                                    style="margin-right: 1.5rem; width: calc(25% - 1.125rem);" aria-hidden="true">
                                    <div class="transparent-card rounded hover-effect">
                                        <div class="card-icon">
                                            <i class="hicon hicon-family-with-teens"></i>
                                        </div>
                                        <h3 class="h5 card-title">Leading travel agency in Moliva</h3>
                                        <p class="card-desc">
                                            Top-rated agency in Moliva is renowned for exceptional service and unforgettable
                                            travel experiences.
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide splide__slide--clone" id="splide02-clone02" role="tabpanel"
                                    aria-roledescription="slide" aria-label="2 of 4"
                                    style="margin-right: 1.5rem; width: calc(25% - 1.125rem);" aria-hidden="true">
                                    <div class="transparent-card rounded hover-effect">
                                        <div class="card-icon">
                                            <i class="hicon hicon-regular-travel-protection"></i>
                                        </div>
                                        <h3 class="h5 card-title">Years of experience in tour operations</h3>
                                        <p class="card-desc">
                                            With years of expertise, we excel at organizing seamless, enjoyable, and
                                            memorable tours for every traveler.
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide splide__slide--clone" id="splide02-clone03" role="tabpanel"
                                    aria-roledescription="slide" aria-label="3 of 4"
                                    style="margin-right: 1.5rem; width: calc(25% - 1.125rem);" aria-hidden="true">
                                    <div class="transparent-card rounded hover-effect">
                                        <div class="card-icon">
                                            <i class="hicon hicon-tours"></i>
                                        </div>
                                        <h3 class="h5 card-title">Flexible tour packages and bookings</h3>
                                        <p class="card-desc">
                                            We offer customizable trips with flexible packages and convenient booking
                                            options tailored to your needs.
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide splide__slide--clone" id="splide02-clone04" role="tabpanel"
                                    aria-roledescription="slide" aria-label="4 of 4"
                                    style="margin-right: 1.5rem; width: calc(25% - 1.125rem);" aria-hidden="true">
                                    <div class="transparent-card rounded hover-effect">
                                        <div class="card-icon">
                                            <i class="hicon hicon-tours"></i>
                                        </div>
                                        <h3 class="h5 card-title">Best prices with attractive Offers</h3>
                                        <p class="card-desc">
                                            Enjoy unbeatable prices and exclusive offers, ensuring you receive great value
                                            with memorable vacation.
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide splide__slide--clone is-active" id="splide02-clone05"
                                    role="tabpanel" aria-roledescription="slide" aria-label="1 of 4"
                                    style="margin-right: 1.5rem; width: calc(25% - 1.125rem);" aria-hidden="true">
                                    <div class="transparent-card rounded hover-effect">
                                        <div class="card-icon">
                                            <i class="hicon hicon-family-with-teens"></i>
                                        </div>
                                        <h3 class="h5 card-title">Leading travel agency in Moliva</h3>
                                        <p class="card-desc">
                                            Top-rated agency in Moliva is renowned for exceptional service and unforgettable
                                            travel experiences.
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide splide__slide--clone" id="splide02-clone06" role="tabpanel"
                                    aria-roledescription="slide" aria-label="2 of 4"
                                    style="margin-right: 1.5rem; width: calc(25% - 1.125rem);" aria-hidden="true">
                                    <div class="transparent-card rounded hover-effect">
                                        <div class="card-icon">
                                            <i class="hicon hicon-regular-travel-protection"></i>
                                        </div>
                                        <h3 class="h5 card-title">Years of experience in tour operations</h3>
                                        <p class="card-desc">
                                            With years of expertise, we excel at organizing seamless, enjoyable, and
                                            memorable tours for every traveler.
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide splide__slide--clone" id="splide02-clone07" role="tabpanel"
                                    aria-roledescription="slide" aria-label="3 of 4"
                                    style="margin-right: 1.5rem; width: calc(25% - 1.125rem);" aria-hidden="true">
                                    <div class="transparent-card rounded hover-effect">
                                        <div class="card-icon">
                                            <i class="hicon hicon-tours"></i>
                                        </div>
                                        <h3 class="h5 card-title">Flexible tour packages and bookings</h3>
                                        <p class="card-desc">
                                            We offer customizable trips with flexible packages and convenient booking
                                            options tailored to your needs.
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide splide__slide--clone is-prev" id="splide02-clone08"
                                    role="tabpanel" aria-roledescription="slide" aria-label="4 of 4"
                                    style="margin-right: 1.5rem; width: calc(25% - 1.125rem);" aria-hidden="true">
                                    <div class="transparent-card rounded hover-effect">
                                        <div class="card-icon">
                                            <i class="hicon hicon-tours"></i>
                                        </div>
                                        <h3 class="h5 card-title">Best prices with attractive Offers</h3>
                                        <p class="card-desc">
                                            Enjoy unbeatable prices and exclusive offers, ensuring you receive great value
                                            with memorable vacation.
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide is-active is-visible" id="splide02-slide01" role="tabpanel"
                                    aria-roledescription="slide" aria-label="1 of 4"
                                    style="margin-right: 1.5rem; width: calc(25% - 1.125rem);">
                                    <div class="transparent-card rounded hover-effect">
                                        <div class="card-icon">
                                            <i class="hicon hicon-family-with-teens"></i>
                                        </div>
                                        <h3 class="h5 card-title">Leading travel agency in Moliva</h3>
                                        <p class="card-desc">
                                            Top-rated agency in Moliva is renowned for exceptional service and unforgettable
                                            travel experiences.
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide is-visible is-next" id="splide02-slide02" role="tabpanel"
                                    aria-roledescription="slide" aria-label="2 of 4"
                                    style="margin-right: 1.5rem; width: calc(25% - 1.125rem);">
                                    <div class="transparent-card rounded hover-effect">
                                        <div class="card-icon">
                                            <i class="hicon hicon-regular-travel-protection"></i>
                                        </div>
                                        <h3 class="h5 card-title">Years of experience in tour operations</h3>
                                        <p class="card-desc">
                                            With years of expertise, we excel at organizing seamless, enjoyable, and
                                            memorable tours for every traveler.
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide is-visible" id="splide02-slide03" role="tabpanel"
                                    aria-roledescription="slide" aria-label="3 of 4"
                                    style="margin-right: 1.5rem; width: calc(25% - 1.125rem);">
                                    <div class="transparent-card rounded hover-effect">
                                        <div class="card-icon">
                                            <i class="hicon hicon-tours"></i>
                                        </div>
                                        <h3 class="h5 card-title">Flexible tour packages and bookings</h3>
                                        <p class="card-desc">
                                            We offer customizable trips with flexible packages and convenient booking
                                            options tailored to your needs.
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide is-visible" id="splide02-slide04" role="tabpanel"
                                    aria-roledescription="slide" aria-label="4 of 4"
                                    style="margin-right: 1.5rem; width: calc(25% - 1.125rem);">
                                    <div class="transparent-card rounded hover-effect">
                                        <div class="card-icon">
                                            <i class="hicon hicon-tours"></i>
                                        </div>
                                        <h3 class="h5 card-title">Best prices with attractive Offers</h3>
                                        <p class="card-desc">
                                            Enjoy unbeatable prices and exclusive offers, ensuring you receive great value
                                            with memorable vacation.
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide splide__slide--clone is-active" id="splide02-clone09"
                                    role="tabpanel" aria-roledescription="slide" aria-label="1 of 4"
                                    style="margin-right: 1.5rem; width: calc(25% - 1.125rem);" aria-hidden="true">
                                    <div class="transparent-card rounded hover-effect">
                                        <div class="card-icon">
                                            <i class="hicon hicon-family-with-teens"></i>
                                        </div>
                                        <h3 class="h5 card-title">Leading travel agency in Moliva</h3>
                                        <p class="card-desc">
                                            Top-rated agency in Moliva is renowned for exceptional service and unforgettable
                                            travel experiences.
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide splide__slide--clone" id="splide02-clone10" role="tabpanel"
                                    aria-roledescription="slide" aria-label="2 of 4"
                                    style="margin-right: 1.5rem; width: calc(25% - 1.125rem);" aria-hidden="true">
                                    <div class="transparent-card rounded hover-effect">
                                        <div class="card-icon">
                                            <i class="hicon hicon-regular-travel-protection"></i>
                                        </div>
                                        <h3 class="h5 card-title">Years of experience in tour operations</h3>
                                        <p class="card-desc">
                                            With years of expertise, we excel at organizing seamless, enjoyable, and
                                            memorable tours for every traveler.
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide splide__slide--clone" id="splide02-clone11" role="tabpanel"
                                    aria-roledescription="slide" aria-label="3 of 4"
                                    style="margin-right: 1.5rem; width: calc(25% - 1.125rem);" aria-hidden="true">
                                    <div class="transparent-card rounded hover-effect">
                                        <div class="card-icon">
                                            <i class="hicon hicon-tours"></i>
                                        </div>
                                        <h3 class="h5 card-title">Flexible tour packages and bookings</h3>
                                        <p class="card-desc">
                                            We offer customizable trips with flexible packages and convenient booking
                                            options tailored to your needs.
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide splide__slide--clone" id="splide02-clone12" role="tabpanel"
                                    aria-roledescription="slide" aria-label="4 of 4"
                                    style="margin-right: 1.5rem; width: calc(25% - 1.125rem);" aria-hidden="true">
                                    <div class="transparent-card rounded hover-effect">
                                        <div class="card-icon">
                                            <i class="hicon hicon-tours"></i>
                                        </div>
                                        <h3 class="h5 card-title">Best prices with attractive Offers</h3>
                                        <p class="card-desc">
                                            Enjoy unbeatable prices and exclusive offers, ensuring you receive great value
                                            with memorable vacation.
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide splide__slide--clone is-active" id="splide02-clone13"
                                    role="tabpanel" aria-roledescription="slide" aria-label="1 of 4"
                                    style="margin-right: 1.5rem; width: calc(25% - 1.125rem);" aria-hidden="true">
                                    <div class="transparent-card rounded hover-effect">
                                        <div class="card-icon">
                                            <i class="hicon hicon-family-with-teens"></i>
                                        </div>
                                        <h3 class="h5 card-title">Leading travel agency in Moliva</h3>
                                        <p class="card-desc">
                                            Top-rated agency in Moliva is renowned for exceptional service and unforgettable
                                            travel experiences.
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide splide__slide--clone" id="splide02-clone14" role="tabpanel"
                                    aria-roledescription="slide" aria-label="2 of 4"
                                    style="margin-right: 1.5rem; width: calc(25% - 1.125rem);" aria-hidden="true">
                                    <div class="transparent-card rounded hover-effect">
                                        <div class="card-icon">
                                            <i class="hicon hicon-regular-travel-protection"></i>
                                        </div>
                                        <h3 class="h5 card-title">Years of experience in tour operations</h3>
                                        <p class="card-desc">
                                            With years of expertise, we excel at organizing seamless, enjoyable, and
                                            memorable tours for every traveler.
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide splide__slide--clone" id="splide02-clone15" role="tabpanel"
                                    aria-roledescription="slide" aria-label="3 of 4"
                                    style="margin-right: 1.5rem; width: calc(25% - 1.125rem);" aria-hidden="true">
                                    <div class="transparent-card rounded hover-effect">
                                        <div class="card-icon">
                                            <i class="hicon hicon-tours"></i>
                                        </div>
                                        <h3 class="h5 card-title">Flexible tour packages and bookings</h3>
                                        <p class="card-desc">
                                            We offer customizable trips with flexible packages and convenient booking
                                            options tailored to your needs.
                                        </p>
                                    </div>
                                </li>
                                <li class="splide__slide splide__slide--clone" id="splide02-clone16" role="tabpanel"
                                    aria-roledescription="slide" aria-label="4 of 4"
                                    style="margin-right: 1.5rem; width: calc(25% - 1.125rem);" aria-hidden="true">
                                    <div class="transparent-card rounded hover-effect">
                                        <div class="card-icon">
                                            <i class="hicon hicon-tours"></i>
                                        </div>
                                        <h3 class="h5 card-title">Best prices with attractive Offers</h3>
                                        <p class="card-desc">
                                            Enjoy unbeatable prices and exclusive offers, ensuring you receive great value
                                            with memorable vacation.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <ul class="splide__pagination splide__pagination--ltr" role="tablist"
                            aria-label="Select a slide to show">
                            <li role="presentation"><button class="splide__pagination__page is-active" type="button"
                                    role="tab" aria-controls="splide02-slide01" aria-label="Go to slide 1"
                                    aria-selected="true"></button></li>
                            <li role="presentation"><button class="splide__pagination__page" type="button"
                                    role="tab" aria-controls="splide02-slide02" aria-label="Go to slide 2"
                                    tabindex="-1"></button></li>
                            <li role="presentation"><button class="splide__pagination__page" type="button"
                                    role="tab" aria-controls="splide02-slide03" aria-label="Go to slide 3"
                                    tabindex="-1"></button></li>
                            <li role="presentation"><button class="splide__pagination__page" type="button"
                                    role="tab" aria-controls="splide02-slide04" aria-label="Go to slide 4"
                                    tabindex="-1"></button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Why -->

        <!-- Our team -->
        <section class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">
            <div class="container">
                <div class="team-slider splide mb-5 splide--loop splide--ltr splide--draggable is-active is-overflow is-initialized"
                    id="splide03" role="region" aria-roledescription="carousel">
                    <!-- Title -->
                    <div class="block-title text-center pb-3">
                        <small class="sub-title">Enthusiastic people</small>
                        <h2 class="h1 title">Meet our team</h2>
                    </div>
                    <!-- /Title -->
                    <!-- Team -->
                    <div class="splide__track pt-2 pb-2 splide__track--loop splide__track--ltr splide__track--draggable"
                        id="splide03-track" style="padding-left: 0px; padding-right: 0px;" aria-live="polite"
                        aria-atomic="true">
                        <ul class="splide__list" id="splide03-list" role="presentation"
                            style="transform: translateX(-2720px);">
                            <li class="splide__slide splide__slide--clone" id="splide03-clone01" role="tabpanel"
                                aria-roledescription="slide" aria-label="3 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);" aria-hidden="true">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t3.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">Alex Mark</h3>
                                        <span class="team-city">Tour guide</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide splide__slide--clone" id="splide03-clone02" role="tabpanel"
                                aria-roledescription="slide" aria-label="4 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);" aria-hidden="true">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t5.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">Tom Cruise</h3>
                                        <span class="team-city">Financial management</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide splide__slide--clone" id="splide03-clone03" role="tabpanel"
                                aria-roledescription="slide" aria-label="5 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);" aria-hidden="true">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t4.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">Anna Lee</h3>
                                        <span class="team-city">Tour Operator</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide splide__slide--clone" id="splide03-clone04" role="tabpanel"
                                aria-roledescription="slide" aria-label="6 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);" aria-hidden="true">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t4.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">Anna Lee</h3>
                                        <span class="team-city">Tour Operator</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide splide__slide--clone is-active" id="splide03-clone05"
                                role="tabpanel" aria-roledescription="slide" aria-label="1 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);" aria-hidden="true">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t2.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">John Doe</h3>
                                        <span class="team-city">CEO</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide splide__slide--clone" id="splide03-clone06" role="tabpanel"
                                aria-roledescription="slide" aria-label="2 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);" aria-hidden="true">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t1.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">Emily Smith</h3>
                                        <span class="team-city">Marketing Manager</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide splide__slide--clone" id="splide03-clone07" role="tabpanel"
                                aria-roledescription="slide" aria-label="3 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);" aria-hidden="true">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t3.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">Alex Mark</h3>
                                        <span class="team-city">Tour guide</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide splide__slide--clone" id="splide03-clone08" role="tabpanel"
                                aria-roledescription="slide" aria-label="4 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);" aria-hidden="true">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t5.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">Tom Cruise</h3>
                                        <span class="team-city">Financial management</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide splide__slide--clone" id="splide03-clone09" role="tabpanel"
                                aria-roledescription="slide" aria-label="5 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);" aria-hidden="true">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t4.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">Anna Lee</h3>
                                        <span class="team-city">Tour Operator</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="none"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide splide__slide--clone is-prev" id="splide03-clone10"
                                role="tabpanel" aria-roledescription="slide" aria-label="6 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);" aria-hidden="true">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t4.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">Anna Lee</h3>
                                        <span class="team-city">Tour Operator</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.75"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide is-active is-visible" id="splide03-slide01" role="tabpanel"
                                aria-roledescription="slide" aria-label="1 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t2.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">John Doe</h3>
                                        <span class="team-city">CEO</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.75"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide is-visible is-next" id="splide03-slide02" role="tabpanel"
                                aria-roledescription="slide" aria-label="2 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t1.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">Emily Smith</h3>
                                        <span class="team-city">Marketing Manager</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.75"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide is-visible" id="splide03-slide03" role="tabpanel"
                                aria-roledescription="slide" aria-label="3 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t3.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">Alex Mark</h3>
                                        <span class="team-city">Tour guide</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.75"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide is-visible" id="splide03-slide04" role="tabpanel"
                                aria-roledescription="slide" aria-label="4 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t5.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">Tom Cruise</h3>
                                        <span class="team-city">Financial management</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.75"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide is-visible" id="splide03-slide05" role="tabpanel"
                                aria-roledescription="slide" aria-label="5 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t4.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">Anna Lee</h3>
                                        <span class="team-city">Tour Operator</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.75"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide" id="splide03-slide06" role="tabpanel"
                                aria-roledescription="slide" aria-label="6 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);" aria-hidden="true">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t4.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">Anna Lee</h3>
                                        <span class="team-city">Tour Operator</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.75"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide splide__slide--clone is-active" id="splide03-clone11"
                                role="tabpanel" aria-roledescription="slide" aria-label="1 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);" aria-hidden="true">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t2.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">John Doe</h3>
                                        <span class="team-city">CEO</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.75"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide splide__slide--clone" id="splide03-clone12" role="tabpanel"
                                aria-roledescription="slide" aria-label="2 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);" aria-hidden="true">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t1.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">Emily Smith</h3>
                                        <span class="team-city">Marketing Manager</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.75"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide splide__slide--clone" id="splide03-clone13" role="tabpanel"
                                aria-roledescription="slide" aria-label="3 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);" aria-hidden="true">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t3.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">Alex Mark</h3>
                                        <span class="team-city">Tour guide</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.75"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide splide__slide--clone" id="splide03-clone14" role="tabpanel"
                                aria-roledescription="slide" aria-label="4 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);" aria-hidden="true">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t5.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">Tom Cruise</h3>
                                        <span class="team-city">Financial management</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.75"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide splide__slide--clone" id="splide03-clone15" role="tabpanel"
                                aria-roledescription="slide" aria-label="5 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);" aria-hidden="true">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t4.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">Anna Lee</h3>
                                        <span class="team-city">Tour Operator</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.75"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide splide__slide--clone" id="splide03-clone16" role="tabpanel"
                                aria-roledescription="slide" aria-label="6 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);" aria-hidden="true">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t4.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">Anna Lee</h3>
                                        <span class="team-city">Tour Operator</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.75"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide splide__slide--clone is-active" id="splide03-clone17"
                                role="tabpanel" aria-roledescription="slide" aria-label="1 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);" aria-hidden="true">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t2.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">John Doe</h3>
                                        <span class="team-city">CEO</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.75"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide splide__slide--clone" id="splide03-clone18" role="tabpanel"
                                aria-roledescription="slide" aria-label="2 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);" aria-hidden="true">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t1.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">Emily Smith</h3>
                                        <span class="team-city">Marketing Manager</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.75"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide splide__slide--clone" id="splide03-clone19" role="tabpanel"
                                aria-roledescription="slide" aria-label="3 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);" aria-hidden="true">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t3.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">Alex Mark</h3>
                                        <span class="team-city">Tour guide</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.75"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide splide__slide--clone" id="splide03-clone20" role="tabpanel"
                                aria-roledescription="slide" aria-label="4 of 6"
                                style="margin-right: 1.5rem; width: calc(20% - 1.2rem);" aria-hidden="true">
                                <div class="team shadow-sm rounded hover-effect">
                                    <img src="./assets/img/team/t5.jpg" alt="">
                                    <div class="team-info">
                                        <h3 class="h5 team-name">Tom Cruise</h3>
                                        <span class="team-city">Financial management</span>
                                        <ul class="social-list d-inline-block mb-0">
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                                        <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.75"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11l0 5"></path>
                                                        <path d="M8 8l0 .01"></path>
                                                        <path d="M12 16l0 -5"></path>
                                                        <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social-item">
                                                <a href="#" tabindex="-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="none" stroke-width="1.75" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 20l4 -9"></path>
                                                        <path
                                                            d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7">
                                                        </path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /Team -->
                    <ul class="splide__pagination splide__pagination--ltr" role="tablist"
                        aria-label="Select a slide to show">
                        <li role="presentation"><button class="splide__pagination__page is-active" type="button"
                                role="tab" aria-controls="splide03-slide01" aria-label="Go to slide 1"
                                aria-selected="true"></button></li>
                        <li role="presentation"><button class="splide__pagination__page" type="button"
                                role="tab" aria-controls="splide03-slide02" aria-label="Go to slide 2"
                                tabindex="-1"></button></li>
                        <li role="presentation"><button class="splide__pagination__page" type="button"
                                role="tab" aria-controls="splide03-slide03" aria-label="Go to slide 3"
                                tabindex="-1"></button></li>
                        <li role="presentation"><button class="splide__pagination__page" type="button"
                                role="tab" aria-controls="splide03-slide04" aria-label="Go to slide 4"
                                tabindex="-1"></button></li>
                        <li role="presentation"><button class="splide__pagination__page" type="button"
                                role="tab" aria-controls="splide03-slide05" aria-label="Go to slide 5"
                                tabindex="-1"></button></li>
                        <li role="presentation"><button class="splide__pagination__page" type="button"
                                role="tab" aria-controls="splide03-slide06" aria-label="Go to slide 6"
                                tabindex="-1"></button></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- /Our team -->

    </main>
@endsection
