@extends('layout.app')

@section('title', 'Destination')

@section('content')
    <main>

        <!-- Title -->
        <section class="hero aos-init aos-animate" data-aos="fade">
            <div class="hero-bg">
                <img src="./assets/img/tours/t15.jpg" alt="">
            </div>
            <div class="bg-content container">
                <div class="hero-page-title">
                    <span class="hero-sub-title">Hidden Charm</span>
                    <h1 class="display-3 hero-title">
                        Explore Noriva
                    </h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="./index.html">Moliva Tours</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tour packages 1</li>
                    </ol>
                </nav>
                <div class="title-info">
                    <div class="title-info-body">
                        <div class="row justify-content-end">
                            <div class="col-12 col-xl-3 col-md-6">
                                <div class="horizontal-review rounded-top">
                                    <h2 class="h6 mb-2 ms-1"><i class="hicon hicon-bold hicon-flights-pin"></i> Attractive
                                        destination</h2>
                                    <div class="review-content">
                                        <h3 class="review-score">4.9</h3>
                                        <div class="review-total">
                                            <span class="star-rate-view"><span class="star-value rate-50"></span></span>
                                            <span><strong class="text-body">2,394</strong> reviews</span>
                                        </div>
                                    </div>
                                    <div class="review-label">
                                        <small>Excellent</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Title -->

        <!-- Tours -->
        <section class="p-top-90 p-bottom-90 bg-gray-gradient">
            <div class="container">
                <!-- Title -->
                <div class="mb-4 aos-init aos-animate" data-aos="fade">
                    <div class="row g-0 g-md-2 align-items-end">
                        <div class="col-12 col-xl-7">
                            <div class="block-title me-auto">
                                <small class="sub-title">Explore Noriva</small>
                                <h2 class="h1 title">Tours in Noriva</h2>
                            </div>
                        </div>
                        <div class="col-12 col-xl-2 col-md-6">
                            <select class="form-select shadow-sm dropdown-select me-3 mb-3 use-bootstrap-select-target"
                                aria-label="Booking status" tabindex="-1">
                                <option selected="">All destinations</option>
                                <option value="2">Noriva (75)</option>
                                <option value="3">Kardal (82)</option>
                                <option value="4">Fruska (91)</option>
                                <option value="5">Leront (59)</option>
                                <option value="6">Zolmir (72)</option>
                                <option value="7">Sitafo (91)</option>
                                <option value="8">Varila (23)</option>
                                <option value="9">Opezo (67)</option>
                            </select>
                            <div class="use-bootstrap-select-wrapper w-100">
                                <div class="dropdown use-bootstrap-select">
                                    <div
                                        class="d-flex align-items-center gap-1 form-select shadow-sm dropdown-select me-3 mb-3 ">
                                        <div
                                            class="d-flex align-items-center gap-1 flex-wrap flex-grow-1 w-100 overflow-hidden">
                                            All destinations<div class="input-wrapper"><span>i</span><input type="text"
                                                    placeholder="" readonly=""></div>
                                        </div>
                                    </div>
                                    <div data-bs-popper="" class="dropdown-menu slideIn w-100"
                                        style="max-height: 15.35rem;">
                                        <div>
                                            <div class="dropdown-item selected active" data-value="All destinations">All
                                                destinations</div>
                                            <div class="dropdown-item" data-value="2">Noriva (75)</div>
                                            <div class="dropdown-item" data-value="3">Kardal (82)</div>
                                            <div class="dropdown-item" data-value="4">Fruska (91)</div>
                                            <div class="dropdown-item" data-value="5">Leront (59)</div>
                                            <div class="dropdown-item" data-value="6">Zolmir (72)</div>
                                            <div class="dropdown-item" data-value="7">Sitafo (91)</div>
                                            <div class="dropdown-item" data-value="8">Varila (23)</div>
                                            <div class="dropdown-item" data-value="9">Opezo (67)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-3 col-md-6">
                            <select class="form-select shadow-sm dropdown-select me-3 mb-3 use-bootstrap-select-target"
                                aria-label="Booking status" tabindex="-1">
                                <option selected="">All categories</option>
                                <option value="1">Ecotourism &amp; Resort (56)</option>
                                <option value="2">Cultural &amp; Foods (75)</option>
                                <option value="3">Explorer &amp; Adventure (82)</option>
                                <option value="4">Festival &amp; Events (91)</option>
                                <option value="5">Museums &amp; Exhibitions (59)</option>
                                <option value="6">Hiking &amp; Trekking (72)</option>
                                <option value="7">Motor &amp; Bicycles (91)</option>
                                <option value="8">Ships &amp; boats (23)</option>
                                <option value="9">Family Activities (67)</option>
                            </select>
                            <div class="use-bootstrap-select-wrapper w-100">
                                <div class="dropdown use-bootstrap-select">
                                    <div
                                        class="d-flex align-items-center gap-1 form-select shadow-sm dropdown-select me-3 mb-3 ">
                                        <div
                                            class="d-flex align-items-center gap-1 flex-wrap flex-grow-1 w-100 overflow-hidden">
                                            All categories<div class="input-wrapper"><span>i</span><input type="text"
                                                    placeholder="" readonly=""></div>
                                        </div>
                                    </div>
                                    <div data-bs-popper="" class="dropdown-menu slideIn w-100"
                                        style="max-height: 15.35rem;">
                                        <div>
                                            <div class="dropdown-item selected active" data-value="All categories">All
                                                categories</div>
                                            <div class="dropdown-item" data-value="1">Ecotourism &amp; Resort (56)</div>
                                            <div class="dropdown-item" data-value="2">Cultural &amp; Foods (75)</div>
                                            <div class="dropdown-item" data-value="3">Explorer &amp; Adventure (82)</div>
                                            <div class="dropdown-item" data-value="4">Festival &amp; Events (91)</div>
                                            <div class="dropdown-item" data-value="5">Museums &amp; Exhibitions (59)</div>
                                            <div class="dropdown-item" data-value="6">Hiking &amp; Trekking (72)</div>
                                            <div class="dropdown-item" data-value="7">Motor &amp; Bicycles (91)</div>
                                            <div class="dropdown-item" data-value="8">Ships &amp; boats (23)</div>
                                            <div class="dropdown-item" data-value="9">Family Activities (67)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Title -->
                <!-- Tour grid -->
                <div class="tour-grid">
                    <div class="row">
                        <div class="col-12 col-xxl-3 col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade">
                            <!-- Tour -->
                            <div class="tour-item rounded shadow-sm hover-effect mb-4">
                                <div class="tour-img">
                                    <a href="./single-tour-1.html">
                                        <figure class="image-hover image-hover-overlay ">
                                            <img src="./assets/img/tours/t1.jpg" alt="">
                                            <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                        </figure>
                                    </a>
                                    <div class="tour-like">
                                        <button type="button" class="circle-icon like-icon liked">
                                            <i class="hicon hicon-favorite-filled"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="tour-content">
                                    <h3 class="tour-title">
                                        <a href="./single-tour-1.html" class="link-dark link-hover">Explore the castle and
                                            ancient village in Karda</a>
                                    </h3>
                                    <div class="tour-itinerary">
                                        <span><i class="hicon hicon-menu-calendar"></i> 3 days</span>
                                        <span><i class="hicon hicon-flights-pin"></i> 3 Destinations</span>
                                    </div>
                                    <div class="inline-review">
                                        <span class="review-score">4.9</span>
                                        <span class="star-rate-view star-rate-size-sm me-2"><span
                                                class="star-value rate-50"></span></span>
                                        <small class="review-total"><span>(231 reviews)</span></small>
                                    </div>
                                    <div class="tour-booking">
                                        <div class="tour-price">
                                            <strong><sup>$</sup>195.80</strong>
                                            <span><sup>$</sup><del class="">230.00</del></span>
                                        </div>
                                        <a href="./single-tour-1.html" class="circle-icon circle-icon-link">
                                            <i class="hicon hicon-flights-one-ways"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Tour -->
                        </div>
                        <div class="col-12 col-xxl-3 col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade">
                            <!-- Tour -->
                            <div class="tour-item rounded shadow-sm hover-effect mb-4">
                                <div class="tour-img">
                                    <a href="./single-tour-1.html">
                                        <figure class="image-hover image-hover-overlay ">
                                            <img src="./assets/img/tours/t2.jpg" alt="">
                                            <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                        </figure>
                                    </a>
                                    <div class="tour-like">
                                        <button type="button" class="circle-icon like-icon">
                                            <i class="hicon hicon-favorite-filled"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="tour-content">
                                    <h3 class="tour-title">
                                        <a href="./single-tour-1.html" class="link-dark link-hover">Explore the valley and
                                            large lake in Kardal</a>
                                    </h3>
                                    <div class="tour-itinerary">
                                        <span><i class="hicon hicon-menu-calendar"></i> 3 days</span>
                                        <span><i class="hicon hicon-flights-pin"></i> 3 Destinations</span>
                                    </div>
                                    <div class="inline-review">
                                        <span class="review-score">4.9</span>
                                        <span class="star-rate-view star-rate-size-sm me-2"><span
                                                class="star-value rate-50"></span></span>
                                        <small class="review-total"><span>(231 reviews)</span></small>
                                    </div>
                                    <div class="tour-booking">
                                        <div class="tour-price">
                                            <strong><sup>$</sup>195.80</strong>
                                            <span><sup>$</sup><del class="">230.00</del></span>
                                        </div>
                                        <a href="./single-tour-1.html" class="circle-icon circle-icon-link">
                                            <i class="hicon hicon-flights-one-ways"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Tour -->
                        </div>
                        <div class="col-12 col-xxl-3 col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade">
                            <!-- Tour -->
                            <div class="tour-item rounded shadow-sm hover-effect mb-4">
                                <div class="tour-img">
                                    <a href="./single-tour-1.html">
                                        <figure class="image-hover image-hover-overlay ">
                                            <img src="./assets/img/tours/t3.jpg" alt="">
                                            <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                        </figure>
                                    </a>
                                    <div class="tour-like">
                                        <button type="button" class="circle-icon like-icon">
                                            <i class="hicon hicon-favorite-filled"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="tour-content">
                                    <h3 class="tour-title">
                                        <a href="./single-tour-1.html" class="link-dark link-hover">Bathing and Kayaking
                                            at Noriva Beach</a>
                                    </h3>
                                    <div class="tour-itinerary">
                                        <span><i class="hicon hicon-menu-calendar"></i> 3 days</span>
                                        <span><i class="hicon hicon-flights-pin"></i> 3 Destinations</span>
                                    </div>
                                    <div class="inline-review">
                                        <span class="review-score">4.9</span>
                                        <span class="star-rate-view star-rate-size-sm me-2"><span
                                                class="star-value rate-50"></span></span>
                                        <small class="review-total"><span>(231 reviews)</span></small>
                                    </div>
                                    <div class="tour-booking">
                                        <div class="tour-price">
                                            <strong><sup>$</sup>195.80</strong>
                                            <span><sup>$</sup><del class="">230.00</del></span>
                                        </div>
                                        <a href="./single-tour-1.html" class="circle-icon circle-icon-link">
                                            <i class="hicon hicon-flights-one-ways"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Tour -->
                        </div>
                        <div class="col-12 col-xxl-3 col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade">
                            <!-- Tour -->
                            <div class="tour-item rounded shadow-sm hover-effect mb-4">
                                <div class="tour-img">
                                    <a href="./single-tour-1.html">
                                        <figure class="image-hover image-hover-overlay ">
                                            <img src="./assets/img/tours/t4.jpg" alt="">
                                            <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                        </figure>
                                    </a>
                                    <div class="tour-like">
                                        <button type="button" class="circle-icon like-icon">
                                            <i class="hicon hicon-favorite-filled"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="tour-content">
                                    <h3 class="tour-title">
                                        <a href="./single-tour-1.html" class="link-dark link-hover">Visit Valiba swamp and
                                            primeval forest</a>
                                    </h3>
                                    <div class="tour-itinerary">
                                        <span><i class="hicon hicon-menu-calendar"></i> 3 days</span>
                                        <span><i class="hicon hicon-flights-pin"></i> 3 Destinations</span>
                                    </div>
                                    <div class="inline-review">
                                        <span class="review-score">4.9</span>
                                        <span class="star-rate-view star-rate-size-sm me-2"><span
                                                class="star-value rate-50"></span></span>
                                        <small class="review-total"><span>(231 reviews)</span></small>
                                    </div>
                                    <div class="tour-booking">
                                        <div class="tour-price">
                                            <strong><sup>$</sup>195.80</strong>
                                            <span><sup>$</sup><del class="">230.00</del></span>
                                        </div>
                                        <a href="./single-tour-1.html" class="circle-icon circle-icon-link">
                                            <i class="hicon hicon-flights-one-ways"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Tour -->
                        </div>
                        <div class="col-12 col-xxl-3 col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade">
                            <!-- Tour -->
                            <div class="tour-item rounded shadow-sm hover-effect mb-4">
                                <div class="tour-img">
                                    <a href="./single-tour-1.html">
                                        <figure class="image-hover image-hover-overlay ">
                                            <img src="./assets/img/tours/t5.jpg" alt="">
                                            <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                        </figure>
                                    </a>
                                    <div class="tour-like">
                                        <button type="button" class="circle-icon like-icon">
                                            <i class="hicon hicon-favorite-filled"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="tour-content">
                                    <h3 class="tour-title">
                                        <a href="./single-tour-1.html">Visit and boat ride on the beach in Satifo</a>
                                    </h3>
                                    <div class="tour-itinerary">
                                        <span><i class="hicon hicon-menu-calendar"></i> 3 days</span>
                                        <span><i class="hicon hicon-flights-pin"></i> 3 Destinations</span>
                                    </div>
                                    <div class="inline-review">
                                        <span class="review-score">4.9</span>
                                        <span class="star-rate-view star-rate-size-sm me-2"><span
                                                class="star-value rate-50"></span></span>
                                        <small class="review-total"><span>(231 reviews)</span></small>
                                    </div>
                                    <div class="tour-booking">
                                        <div class="tour-price">
                                            <strong><sup>$</sup>195.80</strong>
                                            <span><sup>$</sup><del class="">230.00</del></span>
                                        </div>
                                        <a href="./single-tour-1.html" class="circle-icon circle-icon-link">
                                            <i class="hicon hicon-flights-one-ways"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Tour -->
                        </div>
                        <div class="col-12 col-xxl-3 col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade">
                            <!-- Tour -->
                            <div class="tour-item rounded shadow-sm hover-effect mb-4">
                                <div class="tour-img">
                                    <a href="./single-tour-1.html">
                                        <figure class="image-hover image-hover-overlay ">
                                            <img src="./assets/img/tours/t6.jpg" alt="">
                                            <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                        </figure>
                                    </a>
                                    <div class="tour-like">
                                        <button type="button" class="circle-icon like-icon liked">
                                            <i class="hicon hicon-favorite-filled"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="tour-content">
                                    <h3 class="tour-title">
                                        <a href="./single-tour-1.html">Climbing and experiencing life in Fruska</a>
                                    </h3>
                                    <div class="tour-itinerary">
                                        <span><i class="hicon hicon-menu-calendar"></i> 3 days</span>
                                        <span><i class="hicon hicon-flights-pin"></i> 3 Destinations</span>
                                    </div>
                                    <div class="inline-review">
                                        <span class="review-score">4.9</span>
                                        <span class="star-rate-view star-rate-size-sm me-2"><span
                                                class="star-value rate-50"></span></span>
                                        <small class="review-total"><span>(231 reviews)</span></small>
                                    </div>
                                    <div class="tour-booking">
                                        <div class="tour-price">
                                            <strong><sup>$</sup>195.80</strong>
                                            <span><sup>$</sup><del class="">230.00</del></span>
                                        </div>
                                        <a href="./single-tour-1.html" class="circle-icon circle-icon-link">
                                            <i class="hicon hicon-flights-one-ways"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Tour -->
                        </div>
                        <div class="col-12 col-xxl-3 col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade">
                            <!-- Tour -->
                            <div class="tour-item rounded shadow-sm hover-effect mb-4">
                                <div class="tour-img">
                                    <a href="./single-tour-1.html">
                                        <figure class="image-hover image-hover-overlay ">
                                            <img src="./assets/img/tours/t19.jpg" alt="">
                                            <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                        </figure>
                                    </a>
                                    <div class="tour-like">
                                        <button type="button" class="circle-icon like-icon">
                                            <i class="hicon hicon-favorite-filled"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="tour-content">
                                    <h3 class="tour-title">
                                        <a href="./single-tour-1.html">Experience the life of people in Sitafo Bay</a>
                                    </h3>
                                    <div class="tour-itinerary">
                                        <span><i class="hicon hicon-menu-calendar"></i> 3 days</span>
                                        <span><i class="hicon hicon-flights-pin"></i> 3 Destinations</span>
                                    </div>
                                    <div class="inline-review">
                                        <span class="review-score">4.9</span>
                                        <span class="star-rate-view star-rate-size-sm me-2"><span
                                                class="star-value rate-50"></span></span>
                                        <small class="review-total"><span>(231 reviews)</span></small>
                                    </div>
                                    <div class="tour-booking">
                                        <div class="tour-price">
                                            <strong><sup>$</sup>195.80</strong>
                                            <span><sup>$</sup><del class="">230.00</del></span>
                                        </div>
                                        <a href="./single-tour-1.html" class="circle-icon circle-icon-link">
                                            <i class="hicon hicon-flights-one-ways"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Tour -->
                        </div>
                        <div class="col-12 col-xxl-3 col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade">
                            <!-- Tour -->
                            <div class="tour-item rounded shadow-sm hover-effect mb-4">
                                <div class="tour-img">
                                    <a href="./single-tour-1.html">
                                        <figure class="image-hover image-hover-overlay ">
                                            <img src="./assets/img/tours/t18.jpg" alt="">
                                            <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                        </figure>
                                    </a>
                                    <div class="tour-like">
                                        <button type="button" class="circle-icon like-icon">
                                            <i class="hicon hicon-favorite-filled"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="tour-content">
                                    <h3 class="tour-title">
                                        <a href="./single-tour-1.html">Visit and admire Paradise Island in Marota Bay</a>
                                    </h3>
                                    <div class="tour-itinerary">
                                        <span><i class="hicon hicon-menu-calendar"></i> 3 days</span>
                                        <span><i class="hicon hicon-flights-pin"></i> 3 Destinations</span>
                                    </div>
                                    <div class="inline-review">
                                        <span class="review-score">4.9</span>
                                        <span class="star-rate-view star-rate-size-sm me-2"><span
                                                class="star-value rate-50"></span></span>
                                        <small class="review-total"><span>(231 reviews)</span></small>
                                    </div>
                                    <div class="tour-booking">
                                        <div class="tour-price">
                                            <strong><sup>$</sup>195.80</strong>
                                            <span><sup>$</sup><del class="">230.00</del></span>
                                        </div>
                                        <a href="./single-tour-1.html" class="circle-icon circle-icon-link">
                                            <i class="hicon hicon-flights-one-ways"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Tour -->
                        </div>
                    </div>
                    <nav aria-label="Page navigation" class="pt-3 text-center aos-init aos-animate" data-aos="fade">
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
                <!-- /Tour grid -->
            </div>
        </section>
        <!-- /Tour -->

        <!-- Travel Insight -->
        <section class="p-top-90 p-bottom-60 bg-gray-gradient aos-init aos-animate" data-aos="fade">
            <div class="container">
                <!-- Title -->
                <div class="d-xl-flex align-items-xl-center mb-4">
                    <div class="block-title me-auto">
                        <small class="sub-title">Useful information</small>
                        <h2 class="h1 title">Noriva Travel Insight</h2>
                    </div>
                    <div class="extra-info mt-3">
                        <strong>+500</strong>
                        <span>Useful articles about Noriva</span>
                    </div>
                </div>
                <!-- /Title -->
                <!-- Post list -->
                <div class="row">
                    <div class="col-12 col-xl-4">
                        <!-- Post -->
                        <div class="post-mini mb-4 pb-lg-2">
                            <a href="./single-post.html" class="post-img rounded">
                                <figure class="image-hover image-hover-overlay image-hover-scale">
                                    <img src="./assets/img/blog/b1.jpg" alt="">
                                </figure>
                            </a>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="./single-post.html">Top 10 Must-Visit Tourist Spots in Moliva</a>
                                </h3>
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
                            </div>
                        </div>
                        <!-- /Post -->
                    </div>
                    <div class="col-12 col-xl-4">
                        <!-- Post -->
                        <div class="post-mini mb-4 pb-lg-2">
                            <a href="./single-post.html" class="post-img rounded">
                                <figure class="image-hover image-hover-overlay image-hover-scale">
                                    <img src="./assets/img/blog/b2.jpg" alt="">
                                </figure>
                            </a>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="./single-post.html"> 5 Best Tips for an Amazing Moliva Trip</a>
                                </h3>
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
                            </div>
                        </div>
                        <!-- /Post -->
                    </div>
                    <div class="col-12 col-xl-4">
                        <!-- Post -->
                        <div class="post-mini mb-4 pb-lg-2">
                            <a href="./single-post.html" class="post-img rounded">
                                <figure class="image-hover image-hover-overlay image-hover-scale">
                                    <img src="./assets/img/blog/b3.jpg" alt="">
                                </figure>
                            </a>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="./single-post.html">8 Key Essentials for Traveling to Moliva</a>
                                </h3>
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
                            </div>
                        </div>
                        <!-- /Post -->
                    </div>
                    <div class="col-12 col-xl-4">
                        <!-- Post -->
                        <div class="post-mini mb-4 pb-lg-2">
                            <a href="./single-post.html" class="post-img rounded">
                                <figure class="image-hover image-hover-overlay image-hover-scale">
                                    <img src="./assets/img/blog/b4.jpg" alt="">
                                </figure>
                            </a>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="./single-post.html">Discover Beautiful Moliva: Nature's Paradise</a>
                                </h3>
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
                            </div>
                        </div>
                        <!-- /Post -->
                    </div>
                    <div class="col-12 col-xl-4">
                        <!-- Post -->
                        <div class="post-mini mb-4 pb-lg-2">
                            <a href="./single-post.html" class="post-img rounded">
                                <figure class="image-hover image-hover-overlay image-hover-scale">
                                    <img src="./assets/img/blog/b6.jpg" alt="">
                                </figure>
                            </a>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="./single-post.html">Best Time Ever to Explore Moliva's Nature</a>
                                </h3>
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
                            </div>
                        </div>
                        <!-- /Post -->
                    </div>
                    <div class="col-12 col-xl-4">
                        <!-- Post -->
                        <div class="post-mini mb-4 pb-lg-2">
                            <a href="./single-post.html" class="post-img rounded">
                                <figure class="image-hover image-hover-overlay image-hover-scale">
                                    <img src="./assets/img/blog/b5.jpg" alt="">
                                </figure>
                            </a>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="./single-post.html">10 Awesome Can't-Miss Check-in Spots in Moliva</a>
                                </h3>
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
                            </div>
                        </div>
                        <!-- /Post -->
                    </div>
                    <div class="col-12 col-xl-4">
                        <!-- Post -->
                        <div class="post-mini mb-4 pb-lg-2">
                            <a href="./single-post.html" class="post-img rounded">
                                <figure class="image-hover image-hover-overlay image-hover-scale">
                                    <img src="./assets/img/blog/b10.jpg" alt="">
                                </figure>
                            </a>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="./single-post.html">6 Tips for Booking a Beach Resort in Moliva</a>
                                </h3>
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
                            </div>
                        </div>
                        <!-- /Post -->
                    </div>
                    <div class="col-12 col-xl-4">
                        <!-- Post -->
                        <div class="post-mini mb-4 pb-lg-2">
                            <a href="./single-post.html" class="post-img rounded">
                                <figure class="image-hover image-hover-overlay image-hover-scale">
                                    <img src="./assets/img/blog/b11.jpg" alt="">
                                </figure>
                            </a>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="./single-post.html">5 reasons you should visit Fruska Swamp</a>
                                </h3>
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
                            </div>
                        </div>
                        <!-- /Post -->
                    </div>
                    <div class="col-12 col-xl-4">
                        <!-- Post -->
                        <div class="post-mini mb-4 pb-lg-2">
                            <a href="./single-post.html" class="post-img rounded">
                                <figure class="image-hover image-hover-overlay image-hover-scale">
                                    <img src="./assets/img/blog/b12.jpg" alt="">
                                </figure>
                            </a>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="./single-post.html">4 ancient castles you should visit in Moliva</a>
                                </h3>
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
                            </div>
                        </div>
                        <!-- /Post -->
                    </div>
                </div>
                <!-- /Post list -->
            </div>
        </section>
        <!-- /Travel Insigh -->

    </main>
@endsection
