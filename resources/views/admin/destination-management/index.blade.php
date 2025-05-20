@extends('layout.app')

@section('title', $title)

@section('content')
    <main>

        <div class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">

            <!-- Title -->
            <section class="container">
                <div class="d-lg-flex align-items-lg-end pb-4">
                    <div class="block-title me-auto">
                        <small class="sub-title">Destination</small>
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
                                    <div class="col-12 col-md-6">
                                        <a  class="mini-card card-hover hover-effect shadow-sm rounded p-4">
                                            <span class="card-icon">
                                                <i class="icon hicon hicon-bold hicon-max-occupancy"></i>
                                            </span>
                                            <div class="card-content">
                                                <h2 class="card-title">{{ $pengelola }} Pengelola</h2>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <a  class="mini-card card-hover hover-effect shadow-sm rounded p-4">
                                            <span class="card-icon">
                                                <i class="hicon hicon hicon-bold hicon-concierge"></i>
                                            </span>
                                            <div class="card-content">
                                                <h2 class="card-title">{{ $destinasi }} Destinasi</h2>
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
                                            <h2 class="h3 ff-primary mb-0 text-body-emphasis">Resent Destination</h2>
                                            @if (session('success'))
                                                <small class="text-danger">{{ session('success') }}</small>
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
                                                        <strong>Highlight Photo</strong>
                                                    </th>
                                                    </th>
                                                    <th scope="col">
                                                        <strong>Nama Destinasi</strong>
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
                                                        <td class="text-center d-flex justify-content-center">
                                                            <a href="{{ asset('storage/' . $single->highlight_photo) }}"
                                                                class="glightbox" data-glightbox="title:pantai badur"
                                                                data-gallery="tour-photos">
                                                                <figure
                                                                    class="image-hover image-hover-scale image-hover-overlay rounded mb-0"
                                                                    style="max-width: 200px;">
                                                                    <img src="{{ asset('storage/' . $single->highlight_photo) }}"
                                                                        alt="Foto">
                                                                    <i
                                                                        class="hicon hicon-zoom-bold image-hover-icon fs-5"></i>
                                                                </figure>
                                                            </a>
                                                        </td>
                                                        <td class="text-center">
                                                            <small>{{ $single->nama_destinasi }}</small>
                                                        </td>
                                                        <td class="text-center">
                                                            <form
                                                                action="{{ route('admin.destination.delete', ['id' => $single->id]) }}"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                <button type="submit"
                                                                    onclick="return confirm('Are you sure you want to delete this destination?')"
                                                                    class="circle-icon circle-icon-link circle-icon-sm"
                                                                    title="hapus">
                                                                    <i class="hicon hicon-trash"></i>
                                                                </button>
                                                            </form>
                                                            <a href="{{ route('admin.destination.detail', ['id' => $single->id]) }}"
                                                                class="circle-icon circle-icon-link circle-icon-sm mt-2 mt-md-0"
                                                                title="detail">
                                                                <i class="hicon hicon-mmb-reviews-b"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
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
