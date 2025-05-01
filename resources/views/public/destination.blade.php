@extends('layout.app')

@section('title', 'Destination')

@section('content')
<main>

    <div class="p-top-90 p-bottom-90 bg-gray-gradient">

        <!-- Title -->
        <section data-aos="fade" class="aos-init aos-animate">
            <div class="container">
                <!-- Title -->
                <div class="d-lg-flex align-items-lg-end pb-3">
                    <div class="block-title me-auto">
                        <small class="sub-title">Sumenep Destination</small>
                        <h1 class="display-5 title">Explore Sumenep</h1>
                    </div>
                </div>
                <!-- /Title -->
                <!-- /Categories -->
                <div class="category-slider splide mb-5 ps-5 pe-5 is-overflow is-initialized splide--loop splide--ltr splide--draggable is-active" id="splide01" role="region" aria-roledescription="carousel">
                    <div class="splide__arrows mb-3 splide__arrows--ltr">
                        <button class="splide__arrow splide__arrow__small splide__arrow--prev start-0" aria-label="Go to last slide" aria-controls="splide01-track">
                            <i class="hicon hicon-edge-arrow-left"></i>
                        </button>
                        <button class="splide__arrow splide__arrow__small splide__arrow--next end-0" aria-label="Next slide" aria-controls="splide01-track">
                            <i class="hicon hicon-edge-arrow-right"></i>
                        </button>
                    </div>
                    <div class="splide__track pt-2 pb-2 splide__track--loop splide__track--ltr splide__track--draggable" id="splide01-track" style="padding-left: 0px; padding-right: 0px;" aria-live="polite" aria-atomic="true">
                        <ul class="splide__list cat-list" id="splide01-list" role="presentation" style="transform: translateX(-2511.98px);">
                            <li class="splide__slide cat-item splide__slide--clone is-active" id="splide01-clone01" role="group" aria-roledescription="slide" aria-label="1 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded active" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">All Posts</h2>
                                </a>
                            </li><li class="splide__slide cat-item splide__slide--clone" id="splide01-clone02" role="group" aria-roledescription="slide" aria-label="2 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Destinations</h2>
                                </a>
                            </li><li class="splide__slide cat-item splide__slide--clone" id="splide01-clone03" role="group" aria-roledescription="slide" aria-label="3 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Hotel &amp; Resort</h2>
                                </a>
                            </li><li class="splide__slide cat-item splide__slide--clone" id="splide01-clone04" role="group" aria-roledescription="slide" aria-label="4 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Food &amp; Dining</h2>
                                </a>
                            </li><li class="splide__slide cat-item splide__slide--clone" id="splide01-clone05" role="group" aria-roledescription="slide" aria-label="5 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Travel Tips</h2>
                                </a>
                            </li><li class="splide__slide cat-item splide__slide--clone" id="splide01-clone06" role="group" aria-roledescription="slide" aria-label="6 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Travel Guide</h2>
                                </a>
                            </li><li class="splide__slide cat-item splide__slide--clone" id="splide01-clone07" role="group" aria-roledescription="slide" aria-label="7 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Activities </h2>
                                </a>
                            </li><li class="splide__slide cat-item splide__slide--clone" id="splide01-clone08" role="group" aria-roledescription="slide" aria-label="8 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Ships &amp; boats</h2>
                                </a>
                            </li><li class="splide__slide cat-item splide__slide--clone" id="splide01-clone09" role="group" aria-roledescription="slide" aria-label="9 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Family Activities</h2>
                                </a>
                            </li><li class="splide__slide cat-item splide__slide--clone is-prev" id="splide01-clone10" role="group" aria-roledescription="slide" aria-label="10 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Transportation</h2>
                                </a>
                            </li><li class="splide__slide cat-item is-active is-visible" id="splide01-slide01" role="group" aria-roledescription="slide" aria-label="1 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded active">
                                    <h2 class="title h6 mb-0 lh-1">All Posts</h2>
                                </a>
                            </li>
                            <li class="splide__slide cat-item is-visible is-next" id="splide01-slide02" role="group" aria-roledescription="slide" aria-label="2 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded">
                                    <h2 class="title h6 mb-0 lh-1">Destinations</h2>
                                </a>
                            </li>
                            <li class="splide__slide cat-item is-visible" id="splide01-slide03" role="group" aria-roledescription="slide" aria-label="3 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded">
                                    <h2 class="title h6 mb-0 lh-1">Hotel &amp; Resort</h2>
                                </a>
                            </li>
                            <li class="splide__slide cat-item is-visible" id="splide01-slide04" role="group" aria-roledescription="slide" aria-label="4 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded">
                                    <h2 class="title h6 mb-0 lh-1">Food &amp; Dining</h2>
                                </a>
                            </li>
                            <li class="splide__slide cat-item is-visible" id="splide01-slide05" role="group" aria-roledescription="slide" aria-label="5 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded">
                                    <h2 class="title h6 mb-0 lh-1">Travel Tips</h2>
                                </a>
                            </li>
                            <li class="splide__slide cat-item" id="splide01-slide06" role="group" aria-roledescription="slide" aria-label="6 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Travel Guide</h2>
                                </a>
                            </li>
                            <li class="splide__slide cat-item" id="splide01-slide07" role="group" aria-roledescription="slide" aria-label="7 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Activities </h2>
                                </a>
                            </li>
                            <li class="splide__slide cat-item" id="splide01-slide08" role="group" aria-roledescription="slide" aria-label="8 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Ships &amp; boats</h2>
                                </a>
                            </li>
                            <li class="splide__slide cat-item" id="splide01-slide09" role="group" aria-roledescription="slide" aria-label="9 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Family Activities</h2>
                                </a>
                            </li>
                            <li class="splide__slide cat-item" id="splide01-slide10" role="group" aria-roledescription="slide" aria-label="10 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Transportation</h2>
                                </a>
                            </li>
                        <li class="splide__slide cat-item splide__slide--clone is-active" id="splide01-clone11" role="group" aria-roledescription="slide" aria-label="1 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded active" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">All Posts</h2>
                                </a>
                            </li><li class="splide__slide cat-item splide__slide--clone" id="splide01-clone12" role="group" aria-roledescription="slide" aria-label="2 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Destinations</h2>
                                </a>
                            </li><li class="splide__slide cat-item splide__slide--clone" id="splide01-clone13" role="group" aria-roledescription="slide" aria-label="3 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Hotel &amp; Resort</h2>
                                </a>
                            </li><li class="splide__slide cat-item splide__slide--clone" id="splide01-clone14" role="group" aria-roledescription="slide" aria-label="4 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Food &amp; Dining</h2>
                                </a>
                            </li><li class="splide__slide cat-item splide__slide--clone" id="splide01-clone15" role="group" aria-roledescription="slide" aria-label="5 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Travel Tips</h2>
                                </a>
                            </li><li class="splide__slide cat-item splide__slide--clone" id="splide01-clone16" role="group" aria-roledescription="slide" aria-label="6 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Travel Guide</h2>
                                </a>
                            </li><li class="splide__slide cat-item splide__slide--clone" id="splide01-clone17" role="group" aria-roledescription="slide" aria-label="7 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Activities </h2>
                                </a>
                            </li><li class="splide__slide cat-item splide__slide--clone" id="splide01-clone18" role="group" aria-roledescription="slide" aria-label="8 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Ships &amp; boats</h2>
                                </a>
                            </li><li class="splide__slide cat-item splide__slide--clone" id="splide01-clone19" role="group" aria-roledescription="slide" aria-label="9 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Family Activities</h2>
                                </a>
                            </li><li class="splide__slide cat-item splide__slide--clone" id="splide01-clone20" role="group" aria-roledescription="slide" aria-label="10 of 10" style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                <a href="./post-list.html" class="shadow-sm hover-effect rounded" tabindex="-1">
                                    <h2 class="title h6 mb-0 lh-1">Transportation</h2>
                                </a>
                            </li></ul>
                    </div>
                </div>
                <!-- /Categories -->
            </div>
        </section>
        <!-- Title -->

        <!-- Posts -->
        <section>
            <div class="container">
                <!-- Post list -->
                <div class="row">
                    <div class="col-12 col-xxl-3 col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade">
                        <!-- Post -->
                        <div class="post shadow-sm rounded hover-effect mb-4">
                            <div class="post-img">
                                <a href="./post-list.html" class="float-text float-absolute">Travel tips</a>
                                <a href="{{ route('detail-destination') }}">
                                    <figure class="image-hover image-hover-overlay rounded">
                                        <img src="{{ asset('assets') }}/img/blog/b1.jpg"  alt="">
                                        <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                    </figure>
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="{{ route('detail-destination') }}">
                                        Top 10 Must-Visit Tourist Spots in Moliva
                                    </a>
                                </h3>
                                <div class="post-link">
                                    <div class="post-ext">
                                        <div class="post-date">
                                            <i class="hicon hicon-menu-calendar"></i>
                                            <span>Jun 30 2024</span>
                                        </div>
                                        <div class="post-comment">
                                            <i class="hicon hicon-chat"></i>
                                            <span>36</span>
                                        </div>
                                        <div class="post-view">
                                            <i class="hicon hicon-installment-graph"></i>
                                            <span>754</span>
                                        </div>
                                    </div>
                                    <a href="{{ route('detail-destination') }}" class="circle-icon circle-icon-link">
                                        <i class="hicon hicon-flights-one-ways fs-4"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Post -->
                    </div>
                    <div class="col-12 col-xxl-3 col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade">
                        <!-- Post -->
                        <div class="post shadow-sm rounded hover-effect mb-4">
                            <div class="post-img">
                                <a href="./post-list.html" class="float-text float-absolute"><span>Hotel &amp; Resort</span></a>
                                <a href="{{ route('detail-destination') }}">
                                    <figure class="image-hover image-hover-overlay rounded">
                                        <img src="{{ asset('assets') }}/img/blog/b2.jpg" alt="">
                                        <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                    </figure>
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="{{ route('detail-destination') }}">
                                        5 Best Tips for an Amazing Moliva Trip
                                    </a>
                                </h3>
                                <div class="post-link">
                                    <div class="post-ext">
                                        <div class="post-date">
                                            <i class="hicon hicon-menu-calendar"></i>
                                            <span>Jun 30 2024</span>
                                        </div>
                                        <div class="post-comment">
                                            <i class="hicon hicon-chat"></i>
                                            <span>36</span>
                                        </div>
                                        <div class="post-view">
                                            <i class="hicon hicon-installment-graph"></i>
                                            <span>754</span>
                                        </div>
                                    </div>
                                    <a href="{{ route('detail-destination') }}" class="circle-icon circle-icon-link">
                                        <i class="hicon hicon-flights-one-ways fs-4"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Post -->
                    </div>
                    <div class="col-12 col-xxl-3 col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade">
                        <!-- Post -->
                        <div class="post shadow-sm rounded hover-effect mb-4">
                            <div class="post-img">
                                <a href="./post-list.html" class="float-text float-absolute"><span>Travel Guide</span></a>
                                <a href="{{ route('detail-destination') }}">
                                    <figure class="image-hover image-hover-overlay rounded">
                                        <img src="{{ asset('assets') }}/img/blog/b3.jpg"  alt="">
                                        <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                    </figure>
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="{{ route('detail-destination') }}">
                                        8 Key Essentials for Traveling to Moliva
                                    </a>
                                </h3>
                                <div class="post-link">
                                    <div class="post-ext">
                                        <div class="post-date">
                                            <i class="hicon hicon-menu-calendar"></i>
                                            <span>Jun 30 2024</span>
                                        </div>
                                        <div class="post-comment">
                                            <i class="hicon hicon-chat"></i>
                                            <span>36</span>
                                        </div>
                                        <div class="post-view">
                                            <i class="hicon hicon-installment-graph"></i>
                                            <span>754</span>
                                        </div>
                                    </div>
                                    <a href="{{ route('detail-destination') }}" class="circle-icon circle-icon-link">
                                        <i class="hicon hicon-flights-one-ways fs-4"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Post -->
                    </div>
                    <div class="col-12 col-xxl-3 col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade">
                        <!-- Post -->
                        <div class="post shadow-sm rounded hover-effect mb-4">
                            <div class="post-img">
                                <a href="./post-list.html" class="float-text float-absolute"><span>Destinations</span></a>
                                <a href="{{ route('detail-destination') }}">
                                    <figure class="image-hover image-hover-overlay rounded">
                                        <img src="{{ asset('assets') }}/img/blog/b6.jpg" alt="">
                                        <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                    </figure>
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="{{ route('detail-destination') }}">
                                        Best Time Ever to Explore Moliva's Nature
                                    </a>
                                </h3>
                                <div class="post-link">
                                    <div class="post-ext">
                                        <div class="post-date">
                                            <i class="hicon hicon-menu-calendar"></i>
                                            <span>Jun 30 2024</span>
                                        </div>
                                        <div class="post-comment">
                                            <i class="hicon hicon-chat"></i>
                                            <span>36</span>
                                        </div>
                                        <div class="post-view">
                                            <i class="hicon hicon-installment-graph"></i>
                                            <span>754</span>
                                        </div>
                                    </div>
                                    <a href="{{ route('detail-destination') }}" class="circle-icon circle-icon-link">
                                        <i class="hicon hicon-flights-one-ways fs-4"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Post -->
                    </div>
                    <div class="col-12 col-xxl-3 col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade">
                        <!-- Post -->
                        <div class="post shadow-sm rounded hover-effect mb-4">
                            <div class="post-img">
                                <a href="./post-list.html" class="float-text float-absolute"><span>Travel tips</span></a>
                                <a href="{{ route('detail-destination') }}">
                                    <figure class="image-hover image-hover-overlay rounded">
                                        <img src="{{ asset('assets') }}/img/blog/b5.jpg" alt="">
                                        <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                    </figure>
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="{{ route('detail-destination') }}">
                                        10 Awesome Can't-Miss Check-in Spots in Moliva
                                    </a>
                                </h3>
                                <div class="post-link">
                                    <div class="post-ext">
                                        <div class="post-date">
                                            <i class="hicon hicon-menu-calendar"></i>
                                            <span>Jun 30 2024</span>
                                        </div>
                                        <div class="post-comment">
                                            <i class="hicon hicon-chat"></i>
                                            <span>36</span>
                                        </div>
                                        <div class="post-view">
                                            <i class="hicon hicon-installment-graph"></i>
                                            <span>754</span>
                                        </div>
                                    </div>
                                    <a href="{{ route('detail-destination') }}" class="circle-icon circle-icon-link">
                                        <i class="hicon hicon-flights-one-ways fs-4"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Post -->
                    </div>
                    <div class="col-12 col-xxl-3 col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade">
                        <!-- Post -->
                        <div class="post shadow-sm rounded hover-effect mb-4">
                            <div class="post-img">
                                <a href="./post-list.html" class="float-text float-absolute"><span>Destinations</span></a>
                                <a href="{{ route('detail-destination') }}">
                                    <figure class="image-hover image-hover-overlay rounded">
                                        <img src="{{ asset('assets') }}/img/blog/b6.jpg" alt="">
                                        <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                    </figure>
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="{{ route('detail-destination') }}">
                                        Best Time Ever to Explore Moliva's Nature
                                    </a>
                                </h3>
                                <div class="post-link">
                                    <div class="post-ext">
                                        <div class="post-date">
                                            <i class="hicon hicon-menu-calendar"></i>
                                            <span>Jun 30 2024</span>
                                        </div>
                                        <div class="post-comment">
                                            <i class="hicon hicon-chat"></i>
                                            <span>36</span>
                                        </div>
                                        <div class="post-view">
                                            <i class="hicon hicon-installment-graph"></i>
                                            <span>754</span>
                                        </div>
                                    </div>
                                    <a href="{{ route('detail-destination') }}" class="circle-icon circle-icon-link">
                                        <i class="hicon hicon-flights-one-ways fs-4"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Post -->
                    </div>
                    <div class="col-12 col-xxl-3 col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade">
                        <!-- Post -->
                        <div class="post shadow-sm rounded hover-effect mb-4">
                            <div class="post-img">
                                <a href="./post-list.html" class="float-text float-absolute"><span>Travel tips</span></a>
                                <a href="{{ route('detail-destination') }}">
                                    <figure class="image-hover image-hover-overlay rounded">
                                        <img src="{{ asset('assets') }}/img/blog/b7.jpg"  alt="">
                                        <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                    </figure>
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="{{ route('detail-destination') }}">
                                        Explore paradise island in Leront Bay
                                    </a>
                                </h3>
                                <div class="post-link">
                                    <div class="post-ext">
                                        <div class="post-date">
                                            <i class="hicon hicon-menu-calendar"></i>
                                            <span>Jun 30 2024</span>
                                        </div>
                                        <div class="post-comment">
                                            <i class="hicon hicon-chat"></i>
                                            <span>36</span>
                                        </div>
                                        <div class="post-view">
                                            <i class="hicon hicon-installment-graph"></i>
                                            <span>754</span>
                                        </div>
                                    </div>
                                    <a href="{{ route('detail-destination') }}" class="circle-icon circle-icon-link">
                                        <i class="hicon hicon-flights-one-ways fs-4"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Post -->
                    </div>
                    <div class="col-12 col-xxl-3 col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade">
                        <!-- Post -->
                        <div class="post shadow-sm rounded hover-effect mb-4">
                            <div class="post-img">
                                <a href="./post-list.html" class="float-text float-absolute"><span>Destinations</span></a>
                                <a href="{{ route('detail-destination') }}">
                                    <figure class="image-hover image-hover-overlay rounded">
                                        <img src="{{ asset('assets') }}/img/blog/b8.jpg" alt="">
                                        <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                    </figure>
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="{{ route('detail-destination') }}">
                                        5 Ancient castles you should visit in Moliva
                                    </a>
                                </h3>
                                <div class="post-link">
                                    <div class="post-ext">
                                        <div class="post-date">
                                            <i class="hicon hicon-menu-calendar"></i>
                                            <span>Jun 30 2024</span>
                                        </div>
                                        <div class="post-comment">
                                            <i class="hicon hicon-chat"></i>
                                            <span>36</span>
                                        </div>
                                        <div class="post-view">
                                            <i class="hicon hicon-installment-graph"></i>
                                            <span>754</span>
                                        </div>
                                    </div>
                                    <a href="{{ route('detail-destination') }}" class="circle-icon circle-icon-link">
                                        <i class="hicon hicon-flights-one-ways fs-4"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Post -->
                    </div>
                </div>
                <!-- /Post list -->
                <nav aria-label="Page navigation" class="pt-3 text-center aos-init" data-aos="fade">
                    <ul class="pagination pagination-circle d-inline-flex pt-4 mb-0">
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
        </section>
        <!-- /Posts -->

    </div>

</main>
@endsection
