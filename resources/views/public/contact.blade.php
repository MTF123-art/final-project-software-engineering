@extends('layout.app')

@section('title', 'Hubungi Kami - Sumenep Explore')

@auth
    @section('mini-account-menu')
        @include(Auth::user()->role . '.mini-account-menu')
    @endsection
@endauth

@section('content')
    <main>

        <!-- Title -->
        <section class="hero aos-init aos-animate" data-aos="fade">
            <div class="hero-bg">
                <img src="{{ asset('assets') }}/img/destinations/d7.png" alt="">
            </div>
            <div class="bg-content container">
                <div class="hero-page-title">
                    <span class="hero-sub-title">Terhubung dengan kami</span>
                    <h1 class="display-4 hero-title">
                        Hubungi Kami
                    </h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kontak</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- /Title -->

        <!-- About -->
        <section class="bg-gray-gradient p-bottom-90 aos-init aos-animate" data-aos="fade">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-6">
                        <!-- Contac Information -->
                        <div class="p-top-90 mb-4">
                            <div class="border-bottom pb-4 mb-4">
                                <h2 class="me-auto mb-0">Siap membantu Anda!</h2>
                            </div>
                            <p class="mb-4">Kami siap membantu dan menjawab setiap pertanyaan yang Anda miliki tentang wisata Sumenep.</p>
                            <div class="row">
                                <div class="col-12">
                                    <div class="fw-medium mb-3">
                                        <i class="hicon hicon-flights-pin text-primary me-2"></i>
                                        <span>Jl. Trunojoyo No. 15, Kota Sumenep, Madura, Jawa Timur 69413</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="fw-medium mb-3">
                                        <i class="hicon hicon-telephone text-primary me-2"></i>
                                        <span>+62 812-3456-7890 (Admin: 123)</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="fw-medium mb-3">
                                        <i class="hicon hicon-email-envelope text-primary me-2"></i>
                                        <span>info@sumenepexplore.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Contac Information -->
                    </div>
                    <div class="col-12 col-xl-6">
                        <!-- Contact Form -->
                        <div class="form-contact rounded shadow-sm">
                            <form class="needs-validation" method="post" novalidate=""
                                action="{{ route('contact.store') }}" id="formContact">
                                @csrf
                                <div class="border-bottom pb-4 mb-4">
                                    <h2 class="text-white mb-0">Butuh bantuan wisata?</h2>
                                </div>
                                <div class="alert d-none" role="alert" id="msg_alert"></div>
                                <div class="form-floating mb-4">
                                    <input id="txtYourName" type="text" name="name" class="form-control shadow-sm"
                                        placeholder="Nama Anda" required="">
                                    <label for="txtYourName">Nama Anda *</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input id="txtEmail" type="email" name="email" class="form-control shadow-sm"
                                        placeholder="Email" required="">
                                    <label for="txtEmail">Email Anda *</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input id="txtSubject" type="text" name="subject" class="form-control shadow-sm"
                                        placeholder="Subjek" required="">
                                    <label for="txtSubject">Subjek *</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <textarea id="txtMessage" name="message" class="form-control shadow-sm" placeholder="Pesan Anda" style="height: 150px"
                                        required=""></textarea>
                                    <label for="txtMessage">Pesan Anda *</label>
                                </div>
                                <button type="submit" class="btn btn-light mnw-180">
                                    <i class="hicon hicon-email-envelope"></i>
                                    <span> Kirim Pesan</span>
                                </button>
                                <div class="row">
                                    <div class="col-12">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /Contact Form -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /About -->

    </main>
    @if (session('success'))
        <x-toast type="success" />
    @endif
@endsection