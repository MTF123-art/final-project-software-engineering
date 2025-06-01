@extends('layout.app')

@section('title', $title)

@section('mini-account-menu')
@include('pengelola.mini-account-menu')
@endsection

@section('content')
    <main>

        <div class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">

            <!-- Title -->
            <section class="container">
                <div class="d-lg-flex align-items-lg-end pb-4">
                    <div class="block-title me-auto">
                        <small class="sub-title">My</small>
                        <h1 class="display-5 title">Profile</h1>
                    </div>
                </div>
            </section>
            <!-- /Title -->

            {{-- form --}}
            <section class="container">
                <div class="row g-0 g-xl-8">
                    <!-- Your Profile -->
                    <div class="col-12 col-xl-9">
                        <div class="pe-xl-4 me-xl-2 mb-4">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body ">
                                    <div class=" border-bottom pb-4 mb-4">
                                        <h2 class="h3 text-body-emphasis mb-0">Profile Data</h2>
                                        @if (session('success'))
                                         <x-toast type="success" />
                                        @endif
                                    </div>
                                    <form action="{{ route('pengelola.profile.edit') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div
                                            class="account-user border-bottom pb-4 mb-3 mt-4 d-flex justify-content-center">
                                            <div class="user-avatar">
                                                <img src="{{ asset('storage/'.Auth::user()->image) }}" alt=""
                                                    onerror="this.onerror=null; this.src='{{ asset('assets/img/destinations/placeholder.webp') }}';"
                                                    class="show-avatar rounded-circle" style="width: 150px; height: 150px;">
                                                <label for="filAvatar"
                                                    class="select-avatar"style="width: 40px; height: 40px;">
                                                    <i class="hicon hicon-200 hicon-camera-hover"></i>
                                                </label>
                                                <div class="btn btn-primary btn-update-avatar d-none" style="cursor: unset">
                                                    <i class="hicon hicon-check-valid-state"></i>
                                                </div>
                                                <input class="input-avatar d-none" type="file" id="filAvatar"
                                                    name="image">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row align-content-center">
                                                <div class="col-12 col-md-6">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="txtFirtname">Name<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control shadow-sm"
                                                            id="txtFirtname" required="" name="name"
                                                            value="{{ Auth::user()->name }}">
                                                        @error('name')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="txtLastname">Email<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control shadow-sm"
                                                            id="txtLastname" name="email" required=""
                                                            value="{{ Auth::user()->email }}">
                                                        @error('email')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="txtLastname">Role<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control shadow-sm"
                                                            id="txtLastname" required disabled="disabled"
                                                            value="{{ Auth::user()->role }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-top pt-4">
                                                <button type="submit" class="btn btn-primary mnw-180">
                                                    <i class="hicon hicon-check-valid-state"></i>
                                                    Update profile
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- !-- Change Password --> --}}
                        <div class="pe-xl-4 me-xl-2">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <div class=" border-bottom pb-4 mb-4">
                                        <h2 class="h3 text-body-emphasis mb-0">Change Password</h2>
                                    </div>
                                    <form method="post" action="{{ route('pengelola.profile.edit-password') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label" for="current_password">Current Password<span
                                                            class="text-danger">*</span></label>
                                                    <input type="password" class="form-control shadow-sm" id="current_password" name="current_password"
                                                        required="" minlength="8">  
                                                    @if(session('current_password'))
                                                        <small class="text-danger">{{ session('current_password') }}</small>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label" for="new_password">New Password<span
                                                            class="text-danger">*</span></label>
                                                    <input type="password" class="form-control shadow-sm" id="new_password" name="new_password"
                                                        required="" minlength="8">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label" for="new_password_confirmation">Retype New
                                                        Password<span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control shadow-sm" name="new_password_confirmation"
                                                        id="new_password_confirmation" required="" minlength="8">
                                                    @error('new_password')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top pt-4">
                                            <button type="submit" class="btn btn-primary mnw-180">
                                                <i class="hicon hicon-check-valid-state"></i>
                                                Change Password
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Change Password -->
                    </div>
                    <!-- /Your Profile -->
                    {{-- account menu --}}
                    @include('pengelola.account-menu')
                    {{-- account menu --}}
                </div>
            </section>
            {{-- form --}}
        </div>

    </main>
@endsection
