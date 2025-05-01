@extends('layout.app')

@section('title', 'Login')

@section('content')
    <main>

        <!-- Login -->
        <section class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-5 col-lg-8 col-md-9">
                        <div class="card border-0 shadow-sm p-xl-2">
                            <div class="card-body">
                                <div class="border-bottom mb-4">
                                    <h1 class="h2 text-body-emphasis">Login</h1>
                                    @if (session('error'))
                                        <small class="text-danger">{{ session('error') }}</small>
                                    @endif
                                </div>
                                <form method="post" action="{{ route('login.post') }}">
                                    @csrf
                                    <!-- Login Facebook/Google -->
                                    <div class="border-bottom pb-4 mb-4">
                                        <div class="row g-3">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-facebook w-100">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                                        viewBox="0 0 1000 1000" width="20" height="20">
                                                        <path fill="#3b579d"
                                                            d="M500 1000A500 500 0 0 1 500 0a500 500 0 0 1 0 1000z"></path>
                                                        <path fill="#fff"
                                                            d="M630 1000V613h130l20-151H630v-97c0-43 12-73 75-73h80V157c-14-2-62-6-117-6-115 0-194 70-194 200v111H344v151h130v387h156z">
                                                        </path>
                                                    </svg>
                                                    <span class="ms-2">Facebook</span>
                                                </button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-google w-100">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 534 544"
                                                        width="20" height="20">
                                                        <path fill="#4285f4"
                                                            d="M534 278c0-18-2-37-5-55H272v105h147c-6 34-26 64-54 83v68h87c52-48 82-118 82-201z">
                                                        </path>
                                                        <path fill="#34a853"
                                                            d="M272 544c74 0 135-24 181-65l-88-68c-25 16-56 26-93 26-71 0-131-48-153-113H29v70c46 92 140 150 243 150z">
                                                        </path>
                                                        <path fill="#fbbc04"
                                                            d="M119 324c-11-33-11-70 0-104v-70H29c-39 77-39 168 0 244l90-70z">
                                                        </path>
                                                        <path fill="#ea4335"
                                                            d="M272 108c39-1 76 14 105 41l77-78a272 272 0 0 0-425 79l90 70c22-64 82-112 153-112z">
                                                        </path>
                                                    </svg>
                                                    <span class="ms-2">Google</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Login Facebook/Google -->
                                    <!-- Login Email -->
                                    <div class="border-bottom pb-4">
                                        <div class="mb-4">
                                            <label for="txtEmail" class="form-label">Email<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control shadow-sm" type="text" id="txtEmail"
                                                name="email" required value="{{ old('email') }}">
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <label for="txtPassword" class="form-label">Password<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control shadow-sm" id="txtPassword" name="password"
                                                type="password" required>
                                            @error('password')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input shadow-sm" type="checkbox"
                                                            id="chkRemember" name="remember">
                                                        <label class="form-check-label" for="chkRemember"><span
                                                                class="text-body">Remember me</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-4 text-end">
                                                    <a href="./forgot-password.html">Forgot password?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-6">
                                            <button class="btn btn-primary w-100" type="submit" id="btnSubmit">
                                                <i class="hicon hicon-aps-lock"></i>
                                                <span>Login</span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /Login Email -->
                                    <div class="mt-4">
                                        <span>Don't have an account? <a href="./register.html">Register</a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Login -->

    </main>
@endsection
