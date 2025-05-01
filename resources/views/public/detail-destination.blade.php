@extends('layout.app')

@section('title', 'About Us')

@section('content')
    <main>

        <!-- Title -->
        <section class="hero aos-init aos-animate" data-aos="fade">
            <div class="hero-bg">
                <img src="{{ asset('assets') }}/img/tours/t16.jpg" alt="">
            </div>
            <div class="bg-content container">
                <div class="hero-page-title">
                    <div class="hero-desc mb-3">
                        <span class="text-uppercase">From:</span>
                        <strong class="fs-1 text-white"><sup>$</sup>185.80</strong>
                        <span class="text-uppercase"><sup>$</sup><del class="">230.00</del></span>
                    </div>
                    <h1 class="display-4 hero-title mb-2">
                        Explore Noriva Tour
                    </h1>
                    <div class="fs-5 hero-desc">
                        <span class="me-3"><i class="hicon hicon-menu-calendar"></i> 5 days</span>
                        <span class="me-3"><i class="hicon hicon-flights-pin"></i> Noriva</span>
                    </div>
                    <div class="mt-5">
                        <a href="#book-tour" class="btn btn-primary btn-uppercase mnw-180">
                            <i class="hicon hicon hicon-bold hicon-menu-calendar"></i>
                            <span>Book tour</span>
                        </a>
                    </div>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="./tour-packages-1.html">Moliva tours</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Single tour 1</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- /Title -->

        <!-- Featured -->
        <section class="pt-5 pb-5 border-top aos-init aos-animate" data-aos="fade">
            <div class="container">
                <ul class="list-unstyled row g-3 mb-0">
                    <li class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon  hicon-promo-code"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">Tour code</small>
                                <h2 class="card-title">T0394843</h2>
                            </div>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-poi-text-search"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">Start</small>
                                <h2 class="card-title">Noriva city</h2>
                            </div>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-poi"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">End</small>
                                <h2 class="card-title">Noriva Bay</h2>
                            </div>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-travelers"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">Type tour</small>
                                <h2 class="card-title">Group tour</h2>
                            </div>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-time-clock"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">Age range</small>
                                <h2 class="card-title">16 - 59</h2>
                            </div>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-seriously-multilingual"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">Language</small>
                                <h2 class="card-title">English</h2>
                            </div>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-installment-payment"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">Payments</small>
                                <h2 class="card-title">Pay later</h2>
                            </div>
                        </div>
                    </li>
                    <li class="col-6 col-xl-3">
                        <div class="mini-card card-simple card-mobile-small rounded">
                            <span class="card-icon">
                                <i class="hicon hicon-cancel-booking"></i>
                            </span>
                            <div class="card-content">
                                <small class="card-desc">Cancel tour</small>
                                <h2 class="card-title">Yes/Free</h2>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- /Featured -->

        <!-- Tour details -->
        <section class="p-top-90 p-bottom-90 bg-gray-gradient">
            <div class="container">
                <!-- About -->
                <div class="card border-0 shadow-sm p-xl-2 mb-4 aos-init aos-animate" data-aos="fade">
                    <div class="card-body">
                        <div class="border-bottom mb-4 pb-4">
                            <h2 class="text-body-emphasis mb-0">About</h2>
                        </div>
                        <div class="d-lg-flex border-bottom pb-3 mb-4">
                            <div class="mnw-200">
                                <h3 class="h5">Highlights</h3>
                            </div>
                            <ul class="highlight-list checked">
                                <li>
                                    <span><strong>Stunning Mountain Views:</strong> Breathtaking vistas from Noriva’s
                                        peaks.</span>
                                </li>
                                <li>
                                    <span><strong>Serene Lakeside Parks:</strong> Relax and enjoy the peaceful lake
                                        scenery.</span>
                                </li>
                                <li>
                                    <span><strong>Vibrant Cultural Festivals:</strong> Experience colorful local
                                        celebrations.</span>
                                </li>
                                <li>
                                    <span><strong>Historic Landmarks:</strong> Explore the rich history of Noriva’s
                                        sites.</span>
                                </li>
                                <li>
                                    <span><strong>Adventure Activities:</strong> Thrilling outdoor fun in beautiful
                                        surroundings.</span>
                                </li>
                            </ul>
                        </div>
                        <div class="d-lg-flex">
                            <div class="mnw-200">
                                <h3 class="h5">Description</h3>
                            </div>
                            <p>
                                A trip to Noriva, the capital of Moliva, promises an unforgettable experience filled
                                with stunning natural beauty and vibrant culture. Begin your journey by exploring the
                                breathtaking mountain views, where panoramic vistas captivate your senses and offer
                                perfect photo opportunities. Stroll through serene lakeside parks, where the tranquil
                                waters and lush greenery provide a peaceful escape from the hustle and bustle.
                                Immerse yourself in the local culture by attending vibrant festivals, where colorful
                                celebrations showcase the rich traditions and artistic flair of Noriva. Discover
                                historic landmarks that narrate the city’s fascinating past and add depth to your
                                travel experience. For those seeking excitement, the adventure activities available
                                will provide thrilling moments amid some of the most picturesque landscapes you’ll ever see.
                                Noriva offers a rich blend of natural wonders, cultural highlights, and engaging activities,
                                making it an essential destination on your journey through Moliva.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /About -->
                <!-- Photos -->
                <div class="card border-0 shadow-sm p-xl-2 mb-4 aos-init aos-animate" data-aos="fade">
                    <div class="card-body">
                        <div class="border-bottom mb-4 pb-4">
                            <h2 class="text-body-emphasis mb-0">
                                Photos
                            </h2>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-12 col-xl-6">
                                <a href="./assets/img/tours/t7z.jpg" class="glightbox"
                                    data-glightbox="title:Explore Noriva Bay" data-gallery="tour-photos">
                                    <figure class="image-hover image-hover-scale image-hover-overlay rounded mb-0">
                                        <img src="{{ asset('assets') }}/img/tours/t7.jpg" alt="">
                                        <i class="hicon hicon-zoom-bold image-hover-icon fs-5"></i>
                                    </figure>
                                </a>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="row g-3 align-items-center">
                                    <div class="col-6">
                                        <a href="./assets/img/tours/t8z.jpg" class="glightbox"
                                            data-glightbox="title:Explore Noriva Bay" data-gallery="tour-photos">
                                            <figure class="image-hover image-hover-scale image-hover-overlay rounded mb-0">
                                                <img src="{{ asset('assets') }}/img/tours/t8.jpg" alt="">
                                                <i class="hicon hicon-zoom-bold image-hover-icon fs-5"></i>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="./assets/img/tours/t9z.jpg" class="glightbox"
                                            data-glightbox="title:Explore Noriva Bay" data-gallery="tour-photos">
                                            <figure class="image-hover image-hover-scale image-hover-overlay rounded mb-0">
                                                <img src="{{ asset('assets') }}/img/tours/t9.jpg" alt="">
                                                <i class="hicon hicon-zoom-bold image-hover-icon fs-5"></i>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="./assets/img/tours/t10z.jpg" class="glightbox"
                                            data-glightbox="title:Explore Noriva Bay" data-gallery="tour-photos">
                                            <figure class="image-hover image-hover-scale image-hover-overlay rounded mb-0">
                                                <img src="{{ asset('assets') }}/img/tours/t10.jpg" alt="">
                                                <i class="hicon hicon-zoom-bold image-hover-icon fs-5"></i>
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="./assets/img/tours/t11z.jpg" class="glightbox"
                                            data-glightbox="title:Explore Noriva Bay" data-gallery="tour-photos">
                                            <figure class="image-hover image-hover-scale image-hover-overlay rounded mb-0">
                                                <img src="{{ asset('assets') }}/img/tours/t11.jpg" alt="">
                                                <i class="hicon hicon-zoom-bold image-hover-icon fs-5"></i>
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xl-3">
                                <a href="./assets/img/tours/t12z.jpg" class="glightbox"
                                    data-glightbox="title:Explore Noriva Bay" data-gallery="tour-photos">
                                    <figure class="image-hover image-hover-scale image-hover-overlay rounded mb-0">
                                        <img src="{{ asset('assets') }}/img/tours/t12.jpg" alt="">
                                        <i class="hicon hicon-zoom-bold image-hover-icon fs-5"></i>
                                    </figure>
                                </a>
                            </div>
                            <div class="col-6 col-xl-3">
                                <a href="./assets/img/tours/t13z.jpg" class="glightbox"
                                    data-glightbox="title:Explore Noriva Bay" data-gallery="tour-photos">
                                    <figure class="image-hover image-hover-scale image-hover-overlay rounded mb-0">
                                        <img src="{{ asset('assets') }}/img/tours/t13.jpg" alt="">
                                        <i class="hicon hicon-zoom-bold image-hover-icon fs-5"></i>
                                    </figure>
                                </a>
                            </div>
                            <div class="col-12 col-xl-6">
                                <a href="./assets/img/tours/t14z.jpg" class="glightbox"
                                    data-glightbox="title:Explore Noriva Bay" data-gallery="tour-photos">
                                    <figure class="image-hover image-hover-scale image-hover-overlay rounded mb-0">
                                        <img src="{{ asset('assets') }}/img/tours/t14.jpg" alt="">
                                        <i class="hicon hicon-zoom-bold image-hover-icon fs-5"></i>
                                    </figure>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Photos -->
            </div>
        </section>
        <!-- /Tour details -->

        <!-- Customer Reviews -->
        <section id="reviews" class="p-top-90 p-bottom-90 bg-gray-gradient">
            <div class="container">
                <!-- Title -->
                <div class="block-title me-auto pb-3 aos-init" data-aos="fade">
                    <small class="sub-title">Genuine Reviews</small>
                    <h2 class="h1 title">Customer reviews</h2>
                </div>
                <!-- Title -->
                <!-- Review list -->
                <div class="row g-0">
                    <div class="col-12 col-xl-4">
                        <div class="pe-xl-4 me-xl-2">
                            <div class="row">
                                <div class="col-12 col-xl-12 col-lg-6">
                                    <!-- Overall rating -->
                                    <div class="horizontal-review rounded shadow-sm mb-4 aos-init" data-aos="fade">
                                        <h2 class="h4 review-title pb-4 mb-4 lh-base">Overall rating</h2>
                                        <div class="review-content">
                                            <h3 class="review-score">4.9</h3>
                                            <div class="review-total">
                                                <span class="star-rate-view"><span
                                                        class="star-value rate-50"></span></span>
                                                <span><strong class="text-body">2,394</strong> reviews</span>
                                            </div>
                                        </div>
                                        <div class="review-label">
                                            <small>Excellent</small>
                                        </div>
                                    </div>
                                    <!-- /Overall rating -->
                                </div>
                                <div class="col-12 col-xl-12 col-lg-6">
                                    <!-- Review summary -->
                                    <div class="review-summary rounded shadow-sm mb-4 aos-init" data-aos="fade">
                                        <h3 class="h4 review-title">Review summary</h3>
                                        <ul class="review-content">
                                            <li>
                                                <span class="review-lable">Transportation:</span>
                                                <div class="review-score">
                                                    <strong>4.5</strong>
                                                    <span class="star-rate-view star-rate-size-sm"><span
                                                            class="star-value rate-45"></span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="review-lable">Value for money:</span>
                                                <div class="review-score">
                                                    <strong>4.5</strong>
                                                    <span class="star-rate-view star-rate-size-sm"><span
                                                            class="star-value rate-45"></span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="review-lable">Support services:</span>
                                                <div class="review-score">
                                                    <strong>4.5</strong>
                                                    <span class="star-rate-view star-rate-size-sm"><span
                                                            class="star-value rate-45"></span></span>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="review-lable">Organization:</span>
                                                <div class="review-score">
                                                    <strong>4.0</strong>
                                                    <span class="star-rate-view star-rate-size-sm"><span
                                                            class="star-value rate-40"></span></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /Review summary -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-8">
                        <!-- Review list -->
                        <div class="card border-0 rounded shadow-sm mb-4 aos-init" data-aos="fade">
                            <div class="card-body">
                                <div class="border-bottom d-flex align-items-center pb-4 mb-4">
                                    <h3 class="h4 me-auto mb-0">Recent reviews</h3>
                                    <strong>2,394 reviews</strong>
                                </div>
                                <div class="review-list">
                                    <div class="review-item">
                                        <div class="review-client">
                                            <figure class="review-avatar">
                                                <img src="{{ asset('assets') }}/img/avatars/a1.jpg" alt=""
                                                    class="rounded-circle">
                                            </figure>
                                            <div class="review-name">
                                                <strong>John Doe <small>(Italy)</small></strong>
                                                <span class="star-rate-view star-rate-size-sm"><span
                                                        class="star-value rate-45"></span></span>
                                            </div>
                                        </div>
                                        <p>
                                            "The 5-day tour of Noriva was fantastic! Stunning landscapes, well-organized
                                            activities,
                                            and friendly guides made the trip unforgettable. Highly recommend!"
                                        </p>
                                        <div class="review-date">
                                            <small>February 9, 2023</small> - <span class="review-verify">Verified
                                                booking</span>
                                        </div>
                                    </div>
                                    <div class="review-item">
                                        <div class="review-client">
                                            <figure class="review-avatar">
                                                <img src="{{ asset('assets') }}/img/avatars/a2.jpg" alt=""
                                                    class="rounded-circle">
                                            </figure>
                                            <div class="review-name">
                                                <strong>Emily Smith <small>(USA)</small></strong>
                                                <span class="star-rate-view star-rate-size-sm"><span
                                                        class="star-value rate-45"></span></span>
                                            </div>
                                        </div>
                                        <p>
                                            "An incredible journey through Noriva! From breathtaking mountain views to
                                            exciting water sports,
                                            every day was packed with adventure and beauty. A must-visit!"
                                        </p>
                                        <div class="review-date">
                                            <small>February 9, 2023</small> - <span class="review-verify">Verified
                                                booking</span>
                                        </div>
                                    </div>
                                    <div class="review-item">
                                        <div class="review-client">
                                            <figure class="review-avatar">
                                                <img src="{{ asset('assets') }}/img/avatars/a3.jpg" alt=""
                                                    class="rounded-circle">
                                            </figure>
                                            <div class="review-name">
                                                <strong>Ariol Deep <small>(France)</small></strong>
                                                <span class="star-rate-view star-rate-size-sm"><span
                                                        class="star-value rate-45"></span></span>
                                            </div>
                                        </div>
                                        <p>
                                            "Our trip to Noriva exceeded expectations. The mix of scenic hikes, relaxing
                                            lakeside days,
                                            and cultural experiences made for a perfect vacation. Will definitely return!"
                                        </p>
                                        <div class="review-date">
                                            <small>February 9, 2023</small> - <span class="review-verify">Verified
                                                booking</span>
                                        </div>
                                    </div>
                                    <div class="review-item">
                                        <div class="review-client">
                                            <figure class="review-avatar">
                                                <img src="{{ asset('assets') }}/img/avatars/a5.jpg" alt=""
                                                    class="rounded-circle">
                                            </figure>
                                            <div class="review-name">
                                                <strong>Emma Ross <small>(UK)</small></strong>
                                                <span class="star-rate-view star-rate-size-sm"><span
                                                        class="star-value rate-45"></span></span>
                                            </div>
                                        </div>
                                        <p>
                                            "I loved every moment of this Noriva tour. The guided hikes, serene lakes,
                                            and exploration of tropical forests were highlights. Excellent value and great
                                            memories!"
                                        </p>
                                        <div class="review-date">
                                            <small>February 9, 2023</small> - <span class="review-verify">Verified
                                                booking</span>
                                        </div>
                                    </div>
                                    <div class="review-item">
                                        <div class="review-client">
                                            <figure class="review-avatar">
                                                <img src="{{ asset('assets') }}/img/avatars/a4.jpg" alt=""
                                                    class="rounded-circle">
                                            </figure>
                                            <div class="review-name">
                                                <strong>David Kane <small>(Germany)</small></strong>
                                                <span class="star-rate-view star-rate-size-sm"><span
                                                        class="star-value rate-45"></span></span>
                                            </div>
                                        </div>
                                        <p>
                                            "Fantastic 5-day itinerary in Noriva! Enjoyed everything from mountain climbs to
                                            cultural experiences.
                                            Well-organized, beautiful scenery, and a truly memorable trip."
                                        </p>
                                        <div class="review-date">
                                            <small>February 9, 2023</small> - <span class="review-verify">Verified
                                                booking</span>
                                        </div>
                                    </div>
                                </div>
                                <nav aria-label="Page navigation" class="text-center">
                                    <ul class="pagination pagination-circle d-inline-flex mb-0">
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i class="hicon hicon-edge-arrow-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i class="hicon hicon-edge-arrow-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Review list -->
                    </div>

                    <div class="col-12 col-xl-12">
                        <div class="card border-0 rounded shadow-sm mb-4 aos-init " data-aos="fade">
                            <div class="card-body">
                                <div class="border-bottom pb-4 mb-4">
                                    <h3 class="h4 me-auto mb-0">Leave a review</h3>
                                </div>
                                <form method="post">
                                    <div class="row g-4">
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating mb-4">
                                                <input class="form-control shadow-sm" id="txtFullname20"
                                                    placeholder="name@example.com" required="">
                                                <label for="txtFullname20">Full Name</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating mb-4">
                                                <input type="email" class="form-control shadow-sm" id="txtEmail20"
                                                    placeholder="name@example.com" required="">
                                                <label for="txtEmail20">Your Email</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <textarea class="form-control shadow-sm" placeholder="Enter message..." id="txtMessage20" style="height:180px"
                                            required=""></textarea>
                                        <label for="txtMessage20">Comment</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary" id="btnSubmit20">
                                        <span>Submit</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Review list -->
            </div>
        </section>
        <!-- /Customer Reviews -->
    </main>
@endsection
