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
                    <div class="category-slider splide mb-5 ps-5 pe-5 is-overflow is-initialized splide--loop splide--ltr splide--draggable is-active"
                        id="splide01" role="region" aria-roledescription="carousel">
                        <div class="splide__arrows mb-3 splide__arrows--ltr">
                            <button class="splide__arrow splide__arrow__small splide__arrow--prev start-0"
                                aria-label="Go to last slide" aria-controls="splide01-track">
                                <i class="hicon hicon-edge-arrow-left"></i>
                            </button>
                            <button class="splide__arrow splide__arrow__small splide__arrow--next end-0"
                                aria-label="Next slide" aria-controls="splide01-track">
                                <i class="hicon hicon-edge-arrow-right"></i>
                            </button>
                        </div>
                        <div class="splide__track pt-2 pb-2 splide__track--loop splide__track--ltr splide__track--draggable"
                            id="splide01-track" style="padding-left: 0px; padding-right: 0px;" aria-live="polite"
                            aria-atomic="true">
                            <ul class="splide__list cat-list" id="splide01-list" role="presentation">
                                <li class="splide__slide cat-item {{ request('slug') === 'all' || !request('slug') ? 'is-active' : '' }}" role="group" aria-roledescription="slide"
                                    aria-label="1 of {{ $kategori->count() + 1 }}"
                                    style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="false">
                                    <a href="{{ route('destination', ['slug' => 'all']) }}" class="shadow-sm hover-effect rounded {{ request('slug') === 'all' || !request('slug')  ? 'active' : '' }}">
                                        <h2 class="title h6 mb-0 lh-1">All Category</h2>
                                    </a>
                                </li>
                                @foreach ($kategori as $index => $single)
                                    <li class="splide__slide cat-item {{ request('slug') === $single->slug ? 'active' : '' }}" role="group" aria-roledescription="slide"
                                        aria-label="{{ $index + 2 }} of {{ $kategori->count() + 1 }}"
                                        style="margin-right: 1rem; width: calc(20% - 0.8rem);" aria-hidden="true">
                                        <a href="{{ route('destination', ['slug' => $single->slug]) }}"
                                            class="shadow-sm hover-effect rounded {{ request('slug') === $single->slug ? 'active' : '' }}">
                                            <h2 class="title h6 mb-0 lh-1">{{ $single->nama_kategori }}</h2>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
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
                        @foreach ($destinasi as $single)
                            <div class="col-12 col-xxl-3 col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade">
                                <!-- Post -->
                                <div class="post shadow-sm rounded hover-effect mb-4">
                                    <div class="post-img">
                                        <a href="{{ route('destination', ['slug' => $single->kategori->slug]) }}" class="float-text float-absolute">{{ $single->kategori->nama_kategori }}</a>
                                        <a href="{{ route('detail-destination', ['slug' => $single->slug]) }}">
                                            <figure class="image-hover image-hover-overlay rounded">
                                                <img src="{{ asset('storage/' . $single->highlight_photo) }}" alt="{{ $single->nama_destinasi }}"
                                                    class="img-fluid rounded" onerror="this.onerror=null; this.src='{{ asset('assets/img/destinations/placeholder.webp') }}';">
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
                                        <div class="post-link">
                                            <div class="post-ext">
                                                <div class="post-date">
                                                    <i class="hicon hicon-menu-calendar"></i>
                                                    <span>{{ $single->created_at->format('d-M-Y') }}</span>
                                                </div>
                                                <div class="post-comment">
                                                    <i class="hicon hicon-chat"></i>
                                                    <span>36</span>
                                                </div>
                                            </div>
                                            <a href="{{ route('detail-destination', ['slug' => $single->slug]) }}"
                                                class="circle-icon circle-icon-link">
                                                <i class="hicon hicon-flights-one-ways fs-4"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post -->
                            </div>
                        @endforeach
                    </div>
                    <!-- /pagination -->
                    {{ $destinasi->links('vendor.pagination.bootstrap-5') }}
                </div>
            </section>
            <!-- /Posts -->

        </div>

    </main>
@endsection
