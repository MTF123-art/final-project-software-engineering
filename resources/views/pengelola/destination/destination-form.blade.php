@extends('layout.app')

@section('title', $title)

@section('content')
    <main>
        <div class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">

            <!-- Title -->
            <section class="container">
                <div class="d-lg-flex align-items-lg-end pb-4">
                    <div class="block-title me-auto">
                        <small class="sub-title">Upgrade your account and start managing</small>
                        <h1 class="display-5 title">Your own travel destinations!</h1>
                    </div>
                </div>
            </section>
            <!-- /Title -->

            <section class="container">
                <div class="row g-0 g-xl-8">
                    {{-- destination form --}}
                    <div class="col-12 col-xl-9">
                        <div class="pe-xl-4 me-xl-2 mb-4">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="border-bottom pb-4 mb-4">
                                        <h2 class="h3 text-body-emphasis mb-0">Destination Submission</h2>
                                        @if (session('success-upgrade'))
                                            <small class="text-success">{{ session('success-upgrade') }}</small>
                                        @endif
                                        @if (session('success-destination') || session('success-upgrade'))
                                            <small class="text-success">{{ session('success-destination')  }}</small>
                                        @endif
                                        <p class="text-muted mt-2">Please provide the information about the destination you
                                            want to manage. This data will be reviewed by the admin as part of your upgrade
                                            request.</p>
                                    </div>

                                    <form action="{{ route('user.destination.submit') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        
                                        <div class="mb-4">
                                            <label class="form-label" for="nama">Destination Name<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control shadow-sm" id="nama"
                                                name="nama" required placeholder="e.g. Pantai Lombang">
                                            @error('nama')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="mb-4">
                                            <label class="form-label" for="highlight_photo">Highlight Photo <span class="text-danger">*</span></label>
                                            <input class="form-control shadow-sm" type="file" id="highlight_photo"
                                                name="highlight_photo" accept="image/*" required onchange="previewHighlightPhoto()">
                                            <small class="text-muted">This will be the main photo for the destination (max 2MB).</small>
                                            <small id="highlight-photo-warning" class="text-danger d-block mt-2"></small>
                                            <div id="highlight-photo-preview" class="d-flex flex-wrap mt-2"></div>
                                            @error('highlight_photo')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="mb-4">
                                            <label class="form-label" for="lokasi">Location<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control shadow-sm" id="lokasi"
                                                name="lokasi" required placeholder="e.g. Batang-batang, Sumenep">
                                            @error('lokasi')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="mb-4">
                                            <label class="form-label" for="deskripsi">Description<span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control shadow-sm" id="deskripsi" name="deskripsi" rows="5" required
                                                placeholder="Describe the destination..."></textarea>
                                            @error('deskripsi')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="mb-4">
                                            <label class="form-label" for="gambar">Gallery Images<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control shadow-sm" type="file" id="gambar"
                                                name="gambar[]" multiple required onchange="previewImages()">
                                            <small class="text-muted">You can upload more than one image (max 2MB
                                                each).</small>
                                            <small id="image-warning" class="text-danger d-block mt-2"></small>
                                            <small id="image-count" class="text-primary d-block mt-2"></small>
                                            @error('gambar')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div id="image-preview" class="d-flex flex-wrap mb-4"></div>
                                        
                                        <div class="border-top pt-4">
                                            <button type="submit" class="btn btn-primary mnw-180">
                                                <i class="hicon hicon-check-valid-state"></i>
                                                Submit Destination
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- destination form --}}
                    {{-- account menu --}}
                    @include('user.account-menu')
                    {{-- account menu --}}
                </div>
            </section>
            {{-- form --}}
        </div>

    </main>

    @push('scripts')
        <script src="{{ asset('assets/js/img-preview.js') }}"></script>
    @endpush

@endsection
