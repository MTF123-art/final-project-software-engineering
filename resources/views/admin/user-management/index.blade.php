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

            <!-- Dashboard -->
            <section class="container">
                <div class="row g-0 g-xl-8">
                    <div class="col-12 col-xl-9">
                        <div class="pe-xl-4 me-xl-2">
                            <!-- Overview -->
                            <div class="pb-4">
                                <div class="row g-3 g-md-4">
                                    <div class="col-12 col-md-4">
                                        <a href="{{ route('admin.user-management.filter', ['role' => 'user']) }}"
                                            class="mini-card card-hover hover-effect shadow-sm rounded p-4">
                                            <span class="card-icon">
                                                <i class="icon hicon hicon-bold hicon-max-occupancy"></i>
                                            </span>
                                            <div class="card-content">
                                                <h2 class="card-title">{{ $user }} Normal User</h2>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <a href="{{ route('admin.user-management.filter', ['role' => 'admin']) }}"
                                            class="mini-card card-hover hover-effect shadow-sm rounded p-4">
                                            <span class="card-icon">
                                                <i class="hicon hicon hicon-bold hicon-concierge"></i>
                                            </span>
                                            <div class="card-content">
                                                <h2 class="card-title">{{ $admin }} Admin</h2>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <a href="{{ route('admin.user-management.filter', ['role' => 'pengelola']) }}"
                                            class="mini-card card-hover hover-effect shadow-sm rounded p-4">
                                            <span class="card-icon">
                                                <i class="hicon hicon hicon-bold hicon-max-occupancy-plus"></i>
                                            </span>
                                            <div class="card-content">
                                                <h2 class="card-title">{{ $pengelola }} Pengelola</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Overview -->
                            <!-- user list -->
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between border-bottom pb-4 mb-4">
                                        <div>
                                            <h2 class="h3 ff-primary mb-0 text-body-emphasis">Resent Registrants</h2>
                                            @if (session('success'))
                                                <x-toast type="success" />
                                            @endif
                                        </div>
                                        <a href="{{ route('admin.user-management.create-form') }}"
                                            class="btn btn-primary">Add New User</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-center">
                                                <tr class="table-light">
                                                    <th scope="col">
                                                        <strong>NO</strong>
                                                    </th>
                                                    <th scope="col">
                                                        <strong>Name</strong>
                                                    </th>
                                                    <th scope="col">
                                                        <strong>Photo</strong>
                                                    </th>
                                                    <th scope="col">
                                                        <strong>Email</strong>
                                                    </th>
                                                    <th scope="col">
                                                        <strong>Role</strong>
                                                    </th>
                                                    <th scope="col">
                                                        <strong>Status</strong>
                                                    </th>
                                                    <th scope="col">
                                                        <strong>Action</strong>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = $all->firstItem(); @endphp
                                                @forelse ($all as $single)
                                                    <tr>
                                                        <td class="text-center">
                                                            <span>{{ $no++ }}</span>
                                                        </td>
                                                        <td class="text-nowrap">
                                                            <small>{{ $single->name }}</small>
                                                        </td>
                                                        <td class="">
                                                            <div class="account-user justify-content-center">
                                                                <div class="user-avatar" style="margin-right: 0px;">
                                                                    <img src="{{ asset('Storage/' . $single->image) }}"
                                                                        onerror="this.onerror=null; this.src='{{ asset('assets/img/destinations/placeholder.webp') }}';"
                                                                        alt="" class="show-avatar rounded-circle">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <small>{{ $single->email }}</small>
                                                        </td>
                                                        <td class="text-center">
                                                            <small class="text-nowrap">{{ $single->role }}</small>
                                                        </td>
                                                        <td class="text-center">
                                                            <span
                                                                class="booking-status booking-{{ $single->is_active == 1 ? 'completed' : 'cancelled' }}">{{ $single->is_active == 1 ? 'Active' : 'Non Active' }}</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <form
                                                                action="{{ route('admin.user-management.delete', ['id' => $single->id]) }}"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                <button type="submit"
                                                                    onclick="return confirm('Are you sure you want to delete this user?')"
                                                                    class="circle-icon circle-icon-link circle-icon-sm"
                                                                    title="hapus">
                                                                    <i class="hicon hicon-trash"></i>
                                                                </button>
                                                            </form>
                                                            <a href="{{ route('admin.user-management.edit-form', ['id' => $single->id]) }}"
                                                                class="circle-icon circle-icon-link circle-icon-sm mt-2 mt-md-0"
                                                                title="edit">
                                                                <i class="hicon hicon-mmb-reviews-b"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="7" class="text-center text-muted">
                                                            <em>No user account found.</em>
                                                        </td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                    {{ $all->links('vendor.pagination.bootstrap-5') }}
                                </div>
                            </div>
                            <!-- /Booking list -->
                        </div>
                    </div>

                    @include('admin.account-menu')
                </div>
            </section>
            <!-- /Dashboard -->
        </div>

    </main>
@endsection
