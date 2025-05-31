@extends('layout.app')

@section('title', 'Verify Email')

@section('content')
    <main>

        <!-- Email verification -->
        <section class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-5 col-lg-7 col-md-9">
                        <div class="card border-0 shadow-sm p-xl-2">
                            <div class="card-body">
                                <div class="border-bottom mb-4">
                                    <h1 class="h2 text-body-emphasis">Verify your email</h1>
                                </div>

                                <!-- Success message (if verification link was sent) -->
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        A fresh verification link has been sent to your email address.
                                    </div>
                                @endif

                                <div class="border-bottom pb-4">
                                    <div class="mb-4">
                                        <p class="text-muted mb-3">
                                            Before proceeding, please check your email for a verification link.
                                            If you didn't receive the email, we can send you another one.
                                        </p>
                                        <p><strong class="fw-medium">Check your inbox:</strong>
                                            The verification email may take a few minutes to arrive.
                                            Don't forget to check your spam or junk folder.
                                        </p>
                                    </div>

                                    <form method="POST" action="{{ route('verification.send') }}">
                                        @csrf
                                        <button class="btn btn-primary w-100" type="submit" id="btnResend">
                                            <i class="hicon hicon-email-envelope"></i>
                                            <span>Resend verification email</span>
                                        </button>
                                    </form>
                                </div>

                                <div class="mt-4 d-flex justify-content-between align-items-center">
                                    <span>Wrong email address?
                                        <a href="{{ route('user.profile') }}">Update email</a>
                                    </span>
                                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-link text-decoration-none p-0">
                                            Logout
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Email verification -->

    </main>

    @if (session('success'))
        <x-toast type="success" />
    @endif
    @if (session('error'))
        <x-toast type="error" />
    @endif
@endsection
