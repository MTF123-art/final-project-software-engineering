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
                                        <h2 class="h3 ff-primary mb-0 text-body-emphasis">Edit User</h2>
                                        @if (session('success'))
                                            <small class="text-danger">{{ session('success') }}</small>
                                        @endif
                                    </div>
                                    {{-- disini --}}
                                    <form action="{{ route('admin.user-management.edit', ['id'=> $user->id]) }}"
                                        method="POST">
                                        @csrf
                                        <div class="row g-4 align-items-center justify-content-center mb-4">
                                            <div class="col-12 col-md-8">
                                                <div class="">
                                                    <label for="name">Name</label>
                                                    <input class="form-control shadow-sm" name="name" id="name"
                                                        placeholder="Jhon Doe" required="" value="{{ $user->name }}"
                                                        disabled>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control shadow-sm" name="email"
                                                        id="email" placeholder="name@example.com" required=""
                                                        value="{{ $user->email }}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div>
                                                    <label for="role">Role</label>
                                                    <select id="role" class="form-select shadow-sm dropdown-select"
                                                        required name="role">
                                                        <option value="user" {{ ($user->role == "user") ? "selected" : "" }}>User</option>
                                                        <option value="admin" {{ ($user->role == "admin") ? "selected" : "" }}>Admin</option>
                                                        <option value="pengelola" {{ ($user->role == "pengelola") ? "selected" : "" }}>Pengelola</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div>
                                                    <label for="is_active">Status</label>
                                                    <select id="is_active" class="form-select shadow-sm dropdown-select"
                                                        required name="is_active">
                                                        <option value="1" {{ ($user->is_active == true) ? "selected" : "" }}>Active</option>
                                                        <option value="0" {{ ($user->is_active == false) ? "selected" : "" }}>Non Active</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary col-12 col-md-8" id="btnSubmit20">
                                                <span>Save</span>
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
