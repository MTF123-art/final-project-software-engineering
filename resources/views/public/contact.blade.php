@extends('layout.app')

@section('title', 'Contact Us')

@section('content')
    <main>

        <!-- Title -->
        <section class="hero aos-init aos-animate" data-aos="fade">
            <div class="hero-bg">
                <img src="./assets/img/about/a7.jpg" alt="">
            </div>
            <div class="bg-content container">
                <div class="hero-page-title">
                    <span class="hero-sub-title">Connect with us</span>
                    <h1 class="display-4 hero-title">
                        Contact Us
                    </h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
                                <h2 class="me-auto mb-0">Ready to help you!</h2>
                            </div>
                            <p class="mb-4">We're here to help and answer any question you might have.</p>
                            <div class="row">
                                <div class="col-12">
                                    <div class="fw-medium mb-3">
                                        <i class="hicon hicon-flights-pin text-primary me-2"></i>
                                        <span>No 234, Placer Loquen Marsei Niriva, Moliva.</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="fw-medium mb-3">
                                        <i class="hicon hicon-telephone text-primary me-2"></i>
                                        <span>+33 321-654-987 (Ext: 123)</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="fw-medium mb-3">
                                        <i class="hicon hicon-email-envelope text-primary me-2"></i>
                                        <span>Booking@example.com</span>
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
                                    <h2 class="text-white mb-0">Looking for any help?</h2>
                                </div>
                                <div class="alert d-none" role="alert" id="msg_alert"></div>
                                <div class="form-floating mb-4">
                                    <input id="txtYourName" type="text" name="name" class="form-control shadow-sm"
                                        placeholder="Your Name" required="">
                                    <label for="txtYourName">Your Name *</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input id="txtEmail" type="email" name="email" class="form-control shadow-sm"
                                        placeholder="Email" required="">
                                    <label for="txtEmail">Your Email *</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input id="txtSubject" type="text" name="subject" class="form-control shadow-sm"
                                        placeholder="Subject" required="">
                                    <label for="txtSubject">Subject *</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <textarea id="txtMessage" name="message" class="form-control shadow-sm" placeholder="Message" style="height: 150px"
                                        required=""></textarea>
                                    <label for="txtMessage">Message *</label>
                                </div>
                                <button type="submit" class="btn btn-light mnw-180">
                                    <i class="hicon hicon-email-envelope"></i>
                                    <span> Send message</span>
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
