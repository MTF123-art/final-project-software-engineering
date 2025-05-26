@extends('layout.app')

@section('title', $title)

@section('content')
    <main>

        <div class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">

            <!-- Title -->
            <section class="container">
                <div class="d-lg-flex align-items-lg-end pb-4">
                    <div class="block-title me-auto">
                        <small class="sub-title">My</small>
                        <h1 class="display-5 title">Bookmarks</h1>
                    </div>
                </div>
            </section>
            <!-- /Title -->

            <!-- Dashboard -->
            <section class="container">
                <div class="row g-0 g-xl-8">
                    <div class="col-12 col-xl-9">
                        <!-- Tour list -->
                        <div class="tour-grid pe-xl-4 me-xl-2">
                            <div class="row">
                                @foreach ($bookmarks as $bookmark)
                                    <div class="col-12 col-xxl-4 col-md-6 aos-init aos-animate" data-aos="fade">
                                        <!-- Tour -->
                                        <div class="tour-item rounded shadow-sm hover-effect mb-4">
                                            <div class="tour-img">
                                                <a href="{{ route('detail-destination', $bookmark->destinasi->slug) }}">
                                                    <figure class="image-hover image-hover-overlay ">
                                                        <img src="{{ asset('storage/' . $bookmark->destinasi->highlight_photo) }}"
                                                            alt=""
                                                            onerror="this.onerror=null; this.src='{{ asset('assets/img/destinations/placeholder.webp') }}';">
                                                    </figure>
                                                </a>
                                                <div class="tour-like">
                                                    <button class="circle-icon delete-icon btn-delete" type="button"
                                                        data-id="{{ $bookmark->id }}" data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal">
                                                        <i class="hicon hicon-x-icon hicon-70"></i>
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="tour-title">
                                                    <a
                                                        href="{{ route('detail-destination', $bookmark->destinasi->slug) }}">{{ $bookmark->destinasi->nama_destinasi }}</a>
                                                </h3>
                                                <div class="tour-itinerary">
                                                    <span><i
                                                            class="hicon hicon-flights-pin"></i>{{ $bookmark->destinasi->lokasi }}</span>
                                                </div>
                                                <div class="tour-booking justify-content-between">
                                                    <div>
                                                        @php
                                                            $avg = $bookmark->destinasi->reviews->avg('rating') ?? 0;
                                                            $rounded = round($avg / 5) * 5;
                                                            $class = max(5, min(50, $rounded));
                                                        @endphp
                                                        <span class="review-score">{{ $bookmark->destinasi->reviews->avg('rating') / 10 }}</span>
                                                        <span class="star-rate-view star-rate-size-sm me-2"><span
                                                                class="star-value rate-{{ $class }}"></span></span>
                                                        <small class="review-total"><span>({{ $bookmark->destinasi->reviews->count() }} reviews)</span></small>
                                                    </div>
                                                    <a href="{{ route('detail-destination', $bookmark->destinasi->slug) }}"
                                                        class="circle-icon circle-icon-link">
                                                        <i class="hicon hicon-flights-one-ways"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Tour -->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Tour list -->
                    </div>

                    @include('user.account-menu')
                </div>
            </section>
            <!-- /Dashboard -->
        </div>

    </main>

    @if (session('success'))
        <x-toast type="success" />
    @endif

    {{-- delete bookmark modal --}}
    <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Remove Bookmark</h1>
                </div>
                <div class="modal-content">
                    <form action="" method="POST" id="deleteForm">
                        @csrf
                        <div class="modal-body text-center">
                            <p class="mb-0">Are you sure you want to remove this bookmark?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- end delete bookmark modal --}}

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const deleteButtons = document.querySelectorAll('.btn-delete');
                const deleteForm = document.getElementById('deleteForm');

                deleteButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const id = this.dataset.id;
                        deleteForm.action = `/user/bookmark/delete/${id}`;
                    });
                });
            });
        </script>
    </div>
@endsection
