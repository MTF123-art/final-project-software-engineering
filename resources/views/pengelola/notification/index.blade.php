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
                        <h1 class="display-5 title">Notifications</h1>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <form method="POST" action="{{ route('pengelola.notification.markAllRead') }}" class="m-2">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-success">
                                Tandai semua sudah dibaca
                            </button>
                        </form>
                        <form method="POST" action="{{ route('pengelola.notification.deleteAll') }}" class="m-2">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">
                                Hapus semua notifikasi
                            </button>
                        </form>
                    </div>
                </div>
            </section>
            <!-- /Title -->

            <!-- Notification Dashboard -->
            <section class="container">
                <div class="row g-0 g-xl-8">
                    <div class="col-12 col-xl-9">
                        <div class="pe-xl-4 me-xl-2">
                            @if ($notifications->count())
                                @foreach ($notifications as $notification)
                                    <div
                                        class="card border-0 shadow-sm mb-3 {{ is_null($notification->read_at) ? 'bg-light' : '' }}">
                                        <div class="card-body d-flex justify-content-between align-items-start">
                                            <div>
                                                <h5 class="mb-1">{{ $notification->data['title'] ?? 'Notifikasi' }}</h5>
                                                <p class="mb-1">{{ $notification->data['message'] ?? '' }}</p>
                                                <small
                                                    class="text-muted">{{ $notification->created_at->format('d M Y, H:i') }}</small>
                                            </div>
                                            <div class="ms-3 text-end">
                                                @if (is_null($notification->read_at))
                                                <form method="POST"
                                                    action="{{ route('pengelola.notification.markRead', $notification->id) }}"
                                                    class="d-inline-block m-2">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-outline-primary">Tandai
                                                        dibaca</button>
                                                </form>
                                                @endif
                                                <form method="POST"
                                                    action="{{ route('pengelola.notification.delete', $notification->id) }}"
                                                    class="d-inline-block m-2"
                                                    onsubmit="return confirm('Yakin ingin menghapus notifikasi ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-outline-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-12 text-center my-5">
                                    <h4 class="text-muted">Tidak ada notifikasi</h4>
                                    <p class="text-muted">Belum ada notifikasi untuk ditampilkan.</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    @include('pengelola.account-menu')
                </div>
            </section>
            <!-- /Notification Dashboard -->
        </div>
    </main>

    @if (session('success'))
        <x-toast type="success" />
    @endif
@endsection
