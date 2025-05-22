@extends('layout.app')

@section('title', $title)

@section('content')
    <main>

        <div class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">

            <!-- Title -->
            <section class="container">
                <div class="d-lg-flex align-items-lg-end pb-4">
                    <div class="block-title me-auto">
                        <small class="sub-title">User</small>
                        <h1 class="display-5 title">Management</h1>
                    </div>
                </div>
            </section>
            <!-- /Title -->

            {{-- form --}}
            <section class="container">
                <div class="row g-0 g-xl-8">
                    <div class="col-12 col-xl-9">
                        <div class="pe-xl-4 me-xl-2">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body ">
                                    <div class="border-bottom pb-4 mb-4">
                                        <h2 class="h3 ff-primary mb-0 text-body-emphasis">Add User</h2>
                                        @if (session('success'))
                                            <x-toast type="success" />
                                        @endif
                                    </div>
                                    {{-- disini --}}
                                    <form action="{{ route('admin.user-management.create') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row g-4 align-items-center justify-content-center mb-4">
                                            <div
                                                class="account-user border-bottom pb-4 mb-3 mt-4 d-flex justify-content-center">
                                                <div class="user-avatar">
                                                    <img src="http://127.0.0.1:8000/assets/img/destinations/placeholder.webp"
                                                        alt=""
                                                        onerror="this.onerror=null; this.src='http://127.0.0.1:8000/assets/img/destinations/placeholder.webp';"
                                                        class="show-avatar rounded-circle"
                                                        style="width: 150px; height: 150px;">
                                                    <label for="filAvatar" class="select-avatar"
                                                        style="width: 40px; height: 40px;">
                                                        <i class="hicon hicon-200 hicon-camera-hover"></i>
                                                    </label>
                                                    <div class="btn btn-primary btn-update-avatar d-none"
                                                        style="cursor: unset">
                                                        <i class="hicon hicon-check-valid-state"></i>
                                                    </div>
                                                    <input class="input-avatar d-none" type="file" id="filAvatar"
                                                        name="image">
                                                </div>
                                                @error('image')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="">
                                                    <label for="name">Name</label>
                                                    <input class="form-control shadow-sm" name="name" id="name"
                                                        placeholder="Jhon Doe" required="" value="{{ old('name') }}">
                                                    @error('name')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control shadow-sm" name="email"
                                                        id="email" placeholder="name@example.com" required=""
                                                        value="{{ old('email') }}">
                                                    @error('email')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div>
                                                    <label for="role">Role</label>
                                                    <select id="role" class="form-select shadow-sm dropdown-select"
                                                        required name="role">
                                                        <option value="" disabled selected>Select Role</option>
                                                        <option value="user">User</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="pengelola">Pengelola</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" class="form-control shadow-sm"
                                                        id="password" required required minlength="8">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8 mb-4">
                                                <div class="">
                                                    <label for="password_confirmation">Retype Password</label>
                                                    <input type="password" class="form-control shadow-sm"
                                                        name="password_confirmation" id="password_confirmation" required
                                                        required minlength="8">
                                                    @error('password')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary col-12 col-md-8" id="btnSubmit20">
                                                <span>Submit</span>
                                            </button>
                                        </div>
                                    </form>
                                    {{-- disini --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    @include('admin.account-menu')
                </div>
            </section>
            {{-- form --}}
        </div>

    </main>
@endsection
