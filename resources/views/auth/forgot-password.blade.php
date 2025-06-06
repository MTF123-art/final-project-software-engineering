@extends('layout.app')

@section('title', 'Forgot Password')

@section('content')

    <main>

        <!-- Forgot password -->
        <section class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-5 col-lg-7 col-md-9">
                        <div class="card border-0 shadow-sm p-xl-2">
                            <div class="card-body">
                                <div class="border-bottom mb-4">
                                    <h1 class="h2 text-body-emphasis">Forgot password</h1>
                                </div>
                                <form method="post" action="{{ route('sendResetLink') }}" method="POST">
                                    @csrf
                                    <div class="border-bottom pb-4">
                                        <div class="mb-4">
                                            <label for="txtEmail" class="form-label">Email<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control shadow-sm" id="txtEmail" name="email"
                                                required="">
                                        </div>
                                        <p><strong class="fw-medium">Note:</strong> A link will be sent to your mail, you
                                            need to click on it to create a new password.</p>
                                        <button class="btn btn-primary w-100" type="submit" id="btnSubmit">
                                            <i class="hicon hicon-email-envelope"></i>
                                            <span>Send link</span>
                                        </button>
                                    </div>
                                    <div class="mt-4">
                                        <span>Remember Password? <a href="{{ route('login-form') }}">Login</a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Forgot password -->

    </main>

    @if (session('status'))
        <x-toast type="status" />
    @endif
    @if (session('email'))
        <x-toast type="email" />
    @endif
@endsection
