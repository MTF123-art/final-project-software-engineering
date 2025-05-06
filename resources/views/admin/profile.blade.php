@extends('layout.app')

@section('title', $title)

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
                                    <form action="">
                                        <div class="account-user border-bottom pb-4 mb-3 mt-4 d-flex justify-content-center">
                                            <div class="user-avatar">
                                                <img src="http://127.0.0.1:8000/assets/img/avatars/a3.jpg" alt=""
                                                    class="show-avatar rounded-circle" style="width: 150px; height: 150px;">
                                                <label for="filAvatar"
                                                    class="select-avatar"style="width: 40px; height: 40px;">
                                                    <i class="hicon hicon-200 hicon-camera-hover"></i>
                                                </label>
                                                <div class="btn btn-primary btn-update-avatar d-none" style="cursor: unset">
                                                    <i class="hicon hicon-check-valid-state"></i>
                                                </div>
                                                <input class="input-avatar d-none" type="file" id="filAvatar">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row align-content-center">
                                                <div class="col-12 col-md-6">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="txtFirtname">Name<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control shadow-sm"
                                                            id="txtFirtname" required="" value="{{ Auth::user()->name }}">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="txtLastname">Email<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control shadow-sm"
                                                            id="txtLastname" required="" value="{{ Auth::user()->email }}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="txtLastname">Role<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control shadow-sm"
                                                            id="txtLastname" required disabled="disabled" value="{{ Auth::user()->role }}">
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
                                    <div class="d-flex align-items-center justify-content-between border-bottom pb-4 mb-4">
                                        <h2 class="h3 text-body-emphasis mb-0">Change Password</h2>
                                    </div>
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label" for="txtOldPassword">Old Password<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control shadow-sm" id="txtOldPassword"
                                                        required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label" for="txtNewPassword">New Password<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control shadow-sm" id="txtNewPassword"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mb-4">
                                                    <label class="form-label" for="txtRetypeNewPassword">Retype New
                                                        Password<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control shadow-sm"
                                                        id="txtRetypeNewPassword" required="">
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
                    @include('admin.account-menu')
                    {{-- account menu --}}
                </div>
            </section>
            {{-- form --}}
        </div>

    </main>
@endsection
