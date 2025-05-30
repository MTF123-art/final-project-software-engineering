@extends('layout.app')

@section('title', 'Detail Message')

@section('content')
<main>
    <div class="p-top-90 p-bottom-90 bg-gray-gradient" data-aos="fade">
        <section class="container">
            <div class="d-lg-flex align-items-lg-end pb-4">
                <div class="block-title me-auto">
                    <small class="sub-title">Customer Message</small>
                    <h1 class="display-5 title">Detail</h1>
                </div>
                <a href="{{ route('admin.customer-message.index') }}" class="btn btn-primary mt-3 mt-lg-0">
                    &larr; Back to List
                </a>
            </div>
        </section>

        <section class="container">
            <div class="row g-4">
                <div class="col-lg-9">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h3 class="mb-3">Message Information</h3>

                            <dl class="row mb-3">
                                <dt class="col-sm-3">Name</dt>
                                <dd class="col-sm-9">{{ $message->name }}</dd>

                                <dt class="col-sm-3">Email</dt>
                                <dd class="col-sm-9">{{ $message->email }}</dd>

                                <dt class="col-sm-3">Subject</dt>
                                <dd class="col-sm-9">{{ $message->subject }}</dd>

                                <dt class="col-sm-3">Date</dt>
                                <dd class="col-sm-9">{{ $message->created_at->format('d M Y H:i') }}</dd>

                                <dt class="col-sm-3">Status</dt>
                                <dd class="col-sm-9">
                                    @if($message->is_read)
                                        <span class="badge bg-success">Read</span>
                                    @else
                                        <span class="badge bg-danger">Unread</span>
                                    @endif
                                </dd>
                            </dl>

                            <h5>Message:</h5>
                            <p class="mt-2 text-dark">{{ $message->message }}</p>
                        </div>
                    </div>
                </div>

                @include('admin.account-menu')
            </div>
        </section>
    </div>
</main>
@endsection
