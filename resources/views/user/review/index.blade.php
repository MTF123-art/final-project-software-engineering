@extends('layout.app')

@section('title', $title)

@section('mini-account-menu')
@include('user.mini-account-menu')
@endsection

@section('content')
    <main>

        <div class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">

            <!-- Title -->
            <section class="container">
                <div class="d-lg-flex align-items-lg-end pb-4">
                    <div class="block-title me-auto">
                        <small class="sub-title">My</small>
                        <h1 class="display-5 title">Reviews</h1>
                    </div>
                </div>
            </section>
            <!-- /Title -->

            <!-- Dashboard -->
            <section class="container">
                <div class="row g-0 g-xl-8">
                    <div class="col-12 col-xl-9">
                        <!-- Tours -->
                        <div class="pe-xl-4 me-xl-2">

                            @forelse ($reviews as $review)
                                <div class="card border-0 shadow-sm mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-xl-3 col-md-4">
                                                <a href="{{ route('detail-destination', $review->destinasi->slug) }}">
                                                    <figure class="image-hover image-hover-overlay rounded">
                                                        <img src="{{ asset('storage/' . $review->destinasi->highlight_photo) }}"
                                                            alt="">
                                                        <i class="hicon hicon-plus-thin image-hover-icon"></i>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="col-12 col-xl-9 col-md-8">
                                                <div class="d-md-flex pt-4 pt-md-0">
                                                    <div class="pe-4 flex-grow-1">
                                                        <h2 class="h5 mb-2">
                                                            <a href="{{ route('detail-destination', $review->destinasi->slug) }}"
                                                                class="link-dark link-hover">
                                                                {{ $review->destinasi->nama_destinasi }}
                                                            </a>
                                                        </h2>
                                                        <div class="mb-2">
                                                            <small class="me-2"><i class="hicon hicon-star"></i> Rating:
                                                                {{ $review->rating / 10 }} - ★</small>
                                                            <small class="me-2"><i
                                                                    class="hicon hicon-calendar"></i>{{ $review->created_at->format('d-M-Y') }}</small>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <small class="mb-2">Komentar:
                                                                <strong>{{ $review->komentar }}</strong></small>
                                                        </div>
                                                    </div>
                                                    <div class="text-md-end">
                                                        <div class="d-flex flex-md-column align-items-end mb-2">
                                                            <button type="button"
                                                                class="btn btn-sm btn-link link-danger p-0 btn-update"
                                                                data-id="{{ $review->id }}"
                                                                data-rating="{{ $review->rating }}"
                                                                data-komentar="{{ $review->komentar }}"
                                                                data-destinasi="{{ $review->destinasi->nama_destinasi }}"
                                                                data-bs-toggle="modal" data-bs-target="#reviewModal">
                                                                <i class="hicon hicon-edit hicon-80"></i> Edit
                                                            </button>
                                                            <button type="button"
                                                                class="btn btn-sm btn-link link-danger p-0 btn-delete"
                                                                data-id="{{ $review->id }}" data-bs-toggle="modal"
                                                                data-bs-target="#deleteModal">
                                                                <i class="hicon hicon-x-icon hicon-70"></i> Hapus
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @empty
                                <div class="col-12 text-center my-5">
                                    <h4 class="text-muted">Belum ada ulasan yang ditulis</h4>
                                    <p class="text-muted">Kunjungi destinasi dan bagikan pengalamanmu.</p>
                                    <a href="{{ route('destination') }}" class="btn btn-primary mt-3">
                                        Jelajahi Destinasi
                                    </a>
                                </div>
                            @endforelse
                        </div>
                        <!-- /Tours -->
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

    {{-- delete review modal --}}
    <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel">Remove Review</h1>
                </div>
                <form action="" method="POST" id="deleteForm">
                    @csrf
                    <div class="modal-body text-center">
                        <p class="mb-0">Are you sure you want to remove this review?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Remove</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end delete review modal --}}

    {{-- update review modal --}}
    <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="alertModalLabel">nama destinasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="" id="updateForm">
                        @csrf
                        <div class="row g-4">
                            <div class="col-12">
                                <select class="form-select shadow-sm " name="rating" id="ratingSelect">
                                    <option class="dropdown-item" value="50">5 ★ - Sangat Bagus</option>
                                    <option class="dropdown-item" value="40">4 ★ - Bagus</option>
                                    <option class="dropdown-item" value="30">3 ★ - Cukup</option>
                                    <option class="dropdown-item" value="20">2 ★ - Kurang</option>
                                    <option class="dropdown-item" value="10">1 ★ - Buruk</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="form-floating mb-4">
                                    <textarea class="form-control shadow-sm" placeholder="Enter message..." id="txtMessage20" style="height:180px"
                                        required name="komentar"></textarea>
                                    <label for="txtMessage20">Comment</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <span>Submit</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end update review modal --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.btn-delete');
            const deleteForm = document.getElementById('deleteForm');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.dataset.id;
                    deleteForm.action = `/user/review/delete/${id}`;
                });
            });


        });
    </script>

    <script>
        // Ambil elemen-elemen modal dan form
        const reviewModal = document.getElementById('reviewModal');
        const updateForm = document.getElementById('updateForm');
        const ratingSelect = document.getElementById('ratingSelect');
        const komentarTextarea = document.getElementById('txtMessage20');
        const alertModalLabel = document.getElementById('alertModalLabel');

        reviewModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const id = button.dataset.id;
            const rating = String(button.dataset.rating);
            const komentar = button.dataset.komentar;
            const destinasi = button.dataset.destinasi;

            updateForm.action = `/user/review/update/${id}`;

            for (let option of ratingSelect.options) {
                option.selected = (option.value === rating);
            }

            komentarTextarea.value = komentar;
            alertModalLabel.textContent = destinasi;
        });
    </script>



@endsection
