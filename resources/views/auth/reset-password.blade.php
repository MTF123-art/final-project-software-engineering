@extends('layout.app')

@section('title', 'Reset Password')

@section('content')

    <main>
        <!-- New password -->
        <section class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-5 col-lg-7 col-md-9">
                        <div class="card border-0 shadow-sm p-xl-2">
                            <div class="card-body">
                                <div class="border-bottom mb-4">
                                    <h1 class="h2 text-body-emphasis">New password</h1>
                                </div>

                                {{-- Validation Errors --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf

                                    {{-- Token --}}
                                    <input type="hidden" name="token"
                                        value="{{ request()->route('token') ?? old('token') }}">

                                    {{-- Email --}}
                                    <input type="hidden" name="email" value="{{ request()->email ?? old('email') }}">

                                    <div class="mb-4">
                                        <label for="password" class="form-label">New password
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input class="form-control shadow-sm" id="password" name="password" type="password"
                                            required autocomplete="new-password">
                                    </div>

                                    <div class="mb-4">
                                        <label for="password_confirmation" class="form-label">Retype new password
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input class="form-control shadow-sm" id="password_confirmation"
                                            name="password_confirmation" type="password" required
                                            autocomplete="new-password">
                                    </div>

                                    <button class="btn btn-primary w-100" type="submit" id="btnSubmit">
                                        <i class="hicon hicon-aps-lock"></i>
                                        <span>Create password</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /New password -->
    </main>

    @if (session('status'))
        <x-toast type="success" />
    @endif
@endsection
