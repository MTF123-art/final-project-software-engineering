@extends('layout.app')

@section('title', $title)

@section('content')
    <main>
        <div class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">
            <!-- Title -->
            <section class="container">
                <div class="d-lg-flex align-items-lg-end pb-4">
                    <div class="block-title me-auto">
                        <small class="sub-title">Review</small>
                        <h1 class="display-5 title">Management</h1>
                    </div>
                </div>
            </section>

            <section class="container">
                <div class="row g-0 g-xl-8">
                    {{-- list review --}}
                    <div class="col-12 col-xl-9">
                        <div class="pe-xl-4 me-xl-2">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between border-bottom pb-4 mb-4">
                                        <div>
                                            <h2 class="h3 ff-primary mb-0 text-body-emphasis">Resent Review</h2>
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
                                                        <strong>No</strong>
                                                    </th>
                                                    <th scope="col">
                                                        <strong>Destination</strong>
                                                    </th>
                                                    <th scope="col">
                                                        <strong>Reviewer</strong>
                                                    </th>
                                                    <th scope="col">
                                                        <strong>Rating</strong>
                                                    </th>
                                                    <th scope="col">
                                                        <strong>Review Content</strong>
                                                    </th>
                                                    <th scope="col">
                                                        <strong>Date</strong>
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

                                                @php $no = $reviews->firstItem(); @endphp
                                                @foreach ($reviews as $single)
                                                    <tr>
                                                        <td class="text-center">
                                                            <span>{{ $no++ }}</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <strong>{{ $single->user->name }}</strong>
                                                        </td>
                                                        <td class="text-center">
                                                            <strong class="text-nowrap">{{ $single->destinasi->nama_destinasi }}</strong>
                                                        </td>
                                                        <td class="text-center">
                                                            <strong>{{ $single->rating / 10 }} - ★</strong>
                                                        </td>
                                                        <td class="text-center " style="max-width: 200px;">
                                                            <small class="text-wrap ">{{ $single->komentar }}</small>
                                                        </td>
                                                        <td class="text-center">
                                                            <small
                                                                class="text-nowrap">{{ $single->created_at->format('M-D-y') }}</small>
                                                        </td>
                                                        <td class="text-center">
                                                            <span
                                                                class="booking-status booking-{{ $single->status == 'visible' ? 'completed' : 'cancelled' }}">{{ $single->status }}</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <form
                                                                action="{{ route('admin.review-management.update', ['id' => $single->id]) }}" class="m-1"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                @if ($single->status === 'visible')
                                                                    <button type="submit"
                                                                        onclick="return confirm('Are you sure you want to hide this review?')"
                                                                        class="circle-icon circle-icon-link circle-icon-sm"
                                                                        title="Hide Review">
                                                                        <i class="hicon hicon-cancel-booking"></i>
                                                                    </button>
                                                                @else
                                                                    <button type="submit"
                                                                        onclick="return confirm('Are you sure you want to unhide this review?')"
                                                                        class="circle-icon circle-icon-link circle-icon-sm"
                                                                        title="Unhide Review">
                                                                        <i class="hicon hicon-check-circle-o"></i>
                                                                    </button>
                                                                @endif
                                                            </form>
                                                            <form
                                                                action="{{ route('admin.review-management.delete', ['id' => $single->id]) }}" class="m-1"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                <button type="submit"
                                                                    onclick="return confirm('Are you sure you want to delete this review?')"
                                                                    class="circle-icon circle-icon-link circle-icon-sm"
                                                                    title="Delete Review">
                                                                    <i class="hicon hicon-trash "></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- {{ $all->links('vendor.pagination.bootstrap-5') }} --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- list review --}}


                    {{-- account menu --}}
                    @include('admin.account-menu')
                </div>
            </section>


        </div>
    </main>
    @push('scripts')
        <script src="{{ asset('assets/js/img-preview.js') }}"></script>
    @endpush
@endsection
