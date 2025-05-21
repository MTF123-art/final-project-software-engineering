@extends('layout.app')

@section('title', $title)

@section('content')
    <main>
        <div class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">
            <!-- Title -->
            <section class="container">
                <div class="d-lg-flex align-items-lg-end pb-4">
                    <div class="block-title me-auto">
                        <small class="sub-title">Destination</small>
                        <h1 class="display-5 title">Management</h1>
                    </div>
                </div>
            </section>
            <!-- Title -->

            <section class="container">
                <div class="row g-0 g-xl-8">
                    {{-- destination form --}}
                    <div class="col-12 col-xl-9">
                        <div class="pe-xl-4 me-xl-2 mb-4">
                            {{-- Success message --}}
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            <!-- Highlight Photos -->
                            <div class="card border-0 shadow-sm p-xl-2 mb-4 aos-init aos-animate" data-aos="fade">
                                <div class="card-body">
                                    <div class="border-bottom mb-4 pb-4  d-flex justify-content-between">
                                        <h2 class="text-body-emphasis mb-0">
                                            Highlight Photos
                                        </h2>
                                        <btn class="btn btn-primary btn-uppercase mnw-180" data-bs-toggle="modal"
                                            data-bs-target="#highlightPhotoModal">
                                            <i class="hicon hicon hicon-bold hicon-mmb-reviews-b"></i>
                                            <span>Edit</span>
                                        </btn>
                                    </div>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-12">
                                            <a href="{{ asset('storage/' . $detail->highlight_photo) }}" class="glightbox"
                                                data-glightbox="title:{{ $detail->nama_destinasi }}"
                                                data-gallery="tour-photos">
                                                <figure
                                                    class="image-hover image-hover-scale image-hover-overlay rounded mb-0">
                                                    <img src="{{ asset('storage/' . $detail->highlight_photo) }}"
                                                        alt="Foto">
                                                    <i class="hicon hicon-zoom-bold image-hover-icon fs-5"></i>
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Highlight Photos -->
                            <!-- Highlight Photos modal-->
                            <div class="modal fade" id="highlightPhotoModal" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form action="{{ route('admin.destination.update', ['id' => $detail->id]) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">New Highlight Photo
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-4">
                                                    <label class="form-label" for="highlight_photo">Highlight Photo <span
                                                            class="text-danger">*</span></label>
                                                    <input class="form-control shadow-sm" type="file"
                                                        id="highlight_photo" name="highlight_photo" accept="image/*"
                                                        required onchange="previewHighlightPhoto()">
                                                    <small class="text-muted">This will be the main photo for the
                                                        destination
                                                        (max 2MB).</small>
                                                    <small id="highlight-photo-warning"
                                                        class="text-danger d-block mt-2"></small>
                                                    <div id="highlight-photo-preview" class="d-flex flex-wrap mt-2"></div>
                                                    @error('highlight_photo')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /Highlight Photos modal-->
                            <!-- About -->
                            <div class="card border-0 shadow-sm p-xl-2 mb-4 aos-init aos-animate" data-aos="fade">
                                <div class="card-body">
                                    <div class="border-bottom mb-4 pb-4 d-flex justify-content-between">
                                        <h2 class="text-body-emphasis mb-0">About</h2>
                                        <btn class="btn btn-primary btn-uppercase mnw-180" data-bs-toggle="modal"
                                            data-bs-target="#aboutModal">
                                            <i class="hicon hicon hicon-bold hicon-mmb-reviews-b"></i>
                                            <span>Edit</span>
                                        </btn>
                                    </div>
                                    <div class="d-lg-flex border-bottom mb-4 pb-3">
                                        <div class="mnw-200">
                                            <h3 class="h5">Pengelola</h3>
                                        </div>
                                        <p>{{ $detail->pengelola->name }}</p>
                                    </div>
                                    <div class="d-lg-flex border-bottom mb-4 pb-3">
                                        <div class="mnw-200">
                                            <h3 class="h5">Nama Destinasi</h3>
                                        </div>
                                        <p>{{ $detail->nama_destinasi }}</p>
                                    </div>
                                    <div class="d-lg-flex border-bottom mb-4 pb-3">
                                        <div class="mnw-200">
                                            <h3 class="h5">Category</h3>
                                        </div>
                                        <p>{{ $detail->kategori->nama_kategori }}</p>
                                    </div>
                                    <div class="d-lg-flex border-bottom mb-4 pb-3">
                                        <div class="mnw-200">
                                            <h3 class="h5">Location</h3>
                                        </div>
                                        <p>{{ $detail->lokasi }}</p>
                                    </div>
                                    <div class="d-lg-flex">
                                        <div class="mnw-200">
                                            <h3 class="h5">Description</h3>
                                        </div>
                                        <p>{{ $detail->deskripsi }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /About -->
                            <!-- About Modal -->
                            <div class="modal fade" id="aboutModal" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form action="{{ route('admin.destination.update', ['id' => $detail->id]) }}"
                                            method="POST">
                                            @csrf
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Update About
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-4">
                                                    <label class="form-label" for="lokasi">Location<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control shadow-sm" id="lokasi"
                                                        name="lokasi" required placeholder="e.g. Batang-batang, Sumenep"
                                                        value="{{ $detail->lokasi }}">
                                                    @error('lokasi')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="mb-4">
                                                    <label class="form-label" for="kategori_id2">Category<span
                                                            class="text-danger">*</span></label>
                                                    <select
                                                        class="form-select shadow-sm dropdown-select me-3 mb-3 use-bootstrap-select-target"
                                                        aria-label="Booking status" tabindex="-1" name="kategori_id"
                                                        required id="kategori_id2">
                                                        <option selected value="{{ $detail->kategori->id }}">
                                                            {{ $detail->kategori->nama_kategori }}</option>
                                                        @foreach ($kategori as $kt)
                                                            @if ($kt->id != $detail->kategori->id)
                                                                <option value="{{ $kt->id }}">
                                                                    {{ $kt->nama_kategori }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="form-label" for="deskripsi">Description<span
                                                            class="text-danger">*</span></label>
                                                    <textarea class="form-control shadow-sm" id="deskripsi" name="deskripsi" rows="5" required
                                                        placeholder="Describe the destination...">{{ $detail->deskripsi }}</textarea>
                                                    @error('deskripsi')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /About Modal -->
                            <!-- Photos -->
                            <div class="card border-0 shadow-sm p-xl-2 mb-4 aos-init aos-animate" data-aos="fade">
                                <div class="card-body">
                                    <div class="border-bottom mb-4 pb-4  d-flex justify-content-between">
                                        <h2 class="text-body-emphasis mb-0">
                                            Photos
                                        </h2>
                                        <btn class="btn btn-primary btn-uppercase mnw-180" data-bs-toggle="modal"
                                            data-bs-target="#galeriModal">
                                            <i class="hicon hicon hicon-bold hicon-mmb-reviews-b"></i>
                                            <span>Edit</span>
                                        </btn>
                                    </div>
                                    <div class="row g-3 align-items-center">
                                        @foreach ($detail->galeri as $photo)
                                            <div class="col-6 col-xl-3">
                                                <a href="{{ asset('storage/' . $photo->url_gambar) }}" class="glightbox"
                                                    data-glightbox="title:{{ $detail->nama_destinasi }}"
                                                    data-gallery="tour-photos">
                                                    <figure
                                                        class="image-hover image-hover-scale image-hover-overlay rounded mb-0">
                                                        <img src="{{ asset('storage/' . $photo->url_gambar) }}"
                                                            alt="Foto">
                                                        <i class="hicon hicon-zoom-bold image-hover-icon fs-5"></i>
                                                    </figure>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- /Photos -->
                            <!-- Photos Modal -->
                            <div class="modal fade" id="galeriModal" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form action="{{ route('admin.destination.update', ['id' => $detail->id]) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Upload New Galery
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-4">
                                                    <label class="form-label" for="gambar">Gallery Images<span
                                                            class="text-danger">*</span></label>
                                                    <input class="form-control shadow-sm" type="file" id="gambar"
                                                        name="gambar[]" multiple required onchange="previewImages()">
                                                    <small class="text-muted">You can upload more than one image (max 2MB
                                                        each).</small>
                                                    <small id="image-warning" class="text-danger d-block mt-2"></small>
                                                    <small id="image-count" class="text-primary d-block mt-2"></small>
                                                    <div id="image-preview" class="d-flex flex-wrap mb-4"></div>
                                                    @error('gambar')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /Photos Modal -->

                        </div>
                    </div>

                    {{-- account menu --}}
                    @include('admin.account-menu')
                </div>
            </section>
        </div>
    </main>
    @push('scripts')
        <script src="{{ asset('assets/js/img-preview.js') }}"></script>
    @endpush
@endsection
