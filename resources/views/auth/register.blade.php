@extends('layout.app')

@section('title', 'Register')

@section('content')

    <main>

        <!-- Register -->
        <section class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-5 col-lg-7 col-md-9">
                        <div class="card border-0 shadow-sm p-xl-2 aos-init aos-animate" data-aos="fade">
                            <div class="card-body">
                                <div class="border-bottom mb-4">
                                    <h1 class="h2 text-body-emphasis">Register</h1>
                                    @if (session('success'))
                                        <small class="text-danger">{{ session('success') }}</small>
                                    @endif
                                    @if (session('error'))
                                        <small class="text-danger">{{ session('error') }}</small>
                                    @endif
                                </div>
                                <form method="post" action="{{ route('register.post') }}">
                                    @csrf
                                    <div class="border-bottom pb-4">
                                        <div class="mb-4">
                                            <label for="txtFullname" class="form-label">Name<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control shadow-sm" id="txtFullname" name="name"
                                                value="{{ old('name') }}">
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <label for="txtEmail" class="form-label">Email<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control shadow-sm" id="txtEmail" name="email" required
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <label for="txtPassword" class="form-label">Password<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control shadow-sm" id="txtPassword" name="password"
                                                type="password" required minlength="8">
                                        </div>

                                        <div class="mb-4">
                                            <label for="password_confirmation" class="form-label">Retype password<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control shadow-sm" id="password_confirmation"
                                                name="password_confirmation" type="password" required minlength="8">
                                            @error('password')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <button class="mt-4 btn btn-primary w-100" type="submit" id="btnSubmit">
                                            <i class="hicon hicon-profiles"></i>
                                            <span>Register</span>
                                        </button>
                                    </div>
                                    <div class="mt-4">
                                        <span>Already have an account? <a href="{{ route('login-form') }}">Login</a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Register -->

    </main>

@endsection
