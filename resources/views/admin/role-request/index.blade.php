@extends('layout.app')

@section('title', $title)

@section('content')
    <main>

        <div class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">

            <!-- Title -->
            <section class="container">
                <div class="d-lg-flex align-items-lg-end pb-4">
                    <div class="block-title me-auto">
                        <small class="sub-title">Role Request</small>
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
                                        <a href="{{ route('admin.role-request.filter', ['status' => 'pending']) }}"
                                            class="mini-card card-hover hover-effect shadow-sm rounded p-4">
                                            <span class="card-icon">
                                                <i class="icon hicon hicon-bold hicon-bold-time-icon"></i>
                                            </span>
                                            <div class="card-content">
                                                <h2 class="card-title">{{ $pending }} Pending</h2>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <a href="{{ route('admin.role-request.filter', ['status' => 'approved']) }}"
                                            class="mini-card card-hover hover-effect shadow-sm rounded p-4">
                                            <span class="card-icon">
                                                <i class="hicon hicon hicon-bold hicon-check-circle-o"></i>
                                            </span>
                                            <div class="card-content">
                                                <h2 class="card-title">{{ $approved }} Approved</h2>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <a href="{{ route('admin.role-request.filter', ['status' => 'rejected']) }}"
                                            class="mini-card card-hover hover-effect shadow-sm rounded p-4">
                                            <span class="card-icon">
                                                <i class="hicon hicon hicon-bold hicon-close-popup"></i>
                                            </span>
                                            <div class="card-content">
                                                <h2 class="card-title">{{ $rejected }} Rejected</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Overview -->
                            <!-- request list -->
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between border-bottom pb-4 mb-4">
                                        <div>
                                            <h2 class="h3 ff-primary mb-0 text-body-emphasis">Resent Request</h2>
                                            @if (session('success'))
                                                <x-toast type="success" />
                                            @endif
                                        </div>
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
                                                        <strong>Status</strong>
                                                    </th>
                                                    <th scope="col">
                                                        <strong>Reason</strong>
                                                    </th>
                                                    <th scope="col">
                                                        <strong>Action</strong>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = $all->firstItem(); @endphp
                                                @foreach ($all as $single)
                                                    <tr>
                                                        <td class="text-center">
                                                            <span>{{ $no++ }}</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <strong>{{ $single->user->name }}</strong>
                                                            <td class="text-center">
                                                                <span
                                                                class="booking-status booking-@php echo $single->status == "pending" ? 'processing' : ($single->status == "rejected" ? 'cancelled' : 'unpaid'); @endphp
                                                                ">{{ $single->status }}</span>
                                                            </td>
                                                        </td>
                                                        <td class="text-center">
                                                            <strong>{{ $single->reason }}</strong>
                                                        </td>
                                                        <td class="text-center">
                                                            <form
                                                                action="{{ route('admin.role-request.delete', ['id' => $single->id]) }}"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                <button type="submit"
                                                                    onclick="return confirm('Are you sure you want to delete this request?')"
                                                                    class="circle-icon circle-icon-link circle-icon-sm"
                                                                    title="delete">
                                                                    <i class="hicon hicon-trash "></i>
                                                                </button>
                                                            </form>
                                                            <form
                                                                action="{{ route('admin.role-request.reject', ['id' => $single->id]) }}"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                <button type="submit"
                                                                    onclick="return confirm('Are you sure you want to reject this request?')"
                                                                    class="circle-icon circle-icon-link circle-icon-sm"
                                                                    title="reject">
                                                                    <i class="hicon hicon-close-popup"></i>
                                                                </button>
                                                            </form>
                                                            <form
                                                                action="{{ route('admin.role-request.approve', ['id' => $single->id]) }}"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                <button type="submit"
                                                                    onclick="return confirm('Are you sure you want to approve this request?')"
                                                                    class="circle-icon circle-icon-link circle-icon-sm"
                                                                    title="approve">
                                                                    <i class="hicon hicon-check-circle-o"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{ $all->links('vendor.pagination.bootstrap-5') }}
                                </div>
                            </div>
                            <!-- request list -->
                        </div>
                    </div>

                    @include('admin.account-menu')
                </div>
            </section>
            <!-- /Dashboard -->
        </div>

    </main>
@endsection
