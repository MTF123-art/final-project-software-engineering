@extends('layout.app')

@section('title', 'Role Request Status')

@section('content')
<main>
    <div class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">

        <!-- Title -->
        <section class="container">
            <div class="d-lg-flex align-items-lg-end pb-4">
                <div class="block-title me-auto">
                    <small class="sub-title">Check your progress</small>
                    <h1 class="display-5 title">Role Upgrade Status</h1>
                </div>
            </div>
        </section>
        <!-- /Title -->

        <section class="container">
            <div class="row g-0 g-xl-8">
                <div class="col-12 col-xl-9">
                    <div class="pe-xl-4 me-xl-2 mb-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                @if (session('success-upgrade'))
                                    <div class="alert alert-success">{{ session('success-upgrade') }}</div>
                                @endif
                                @if (session('info-upgrade'))
                                    <div class="alert alert-success">{{ session('info-upgrade') }}</div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif

                                <p class="text-muted mb-4">Here is your role upgrade request to become a destination manager. You will be notified once the admin reviews your request.</p>

                                @if ($roleRequest)
                                    <div class="border rounded p-3 mb-3 shadow-sm bg-white">
                                        <h5 class="mb-2">Status: 
                                            <span class="badge 
                                                @if ($roleRequest->status === 'approved') bg-success
                                                @elseif ($roleRequest->status === 'rejected') bg-danger
                                                @else bg-warning text-dark
                                                @endif">
                                                {{ ucfirst($roleRequest->status) }}
                                            </span>
                                        </h5>

                                        <div class="mt-3">
                                            <h6 class="mb-1">Your Reason:</h6>
                                            <p class="text-muted">{{ $roleRequest->reason }}</p>
                                        </div>

                                        @if ($roleRequest->status === 'rejected' && $roleRequest->admin_reason)
                                            <div class="alert alert-warning mt-3 mb-0">
                                                <strong>Admin Note:</strong> {{ $roleRequest->admin_reason }}
                                            </div>
                                        @endif

                                        @if ($roleRequest->status === 'pending')
                                        
                                            <form action="{{ route('user.upgrade.destroy', $roleRequest->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel this request?');" class="mt-3">
                                                @csrf
                                                <button type="submit" class="btn btn-outline-danger btn-sm">Cancel Request</button>
                                            </form>
                                        @endif
                                    </div>
                                @else
                                    <p class="text-muted">You have not submitted any role upgrade request yet.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                {{-- account menu --}}
                @include('user.account-menu')
                {{-- account menu --}}
            </div>
        </section>
    </div>
</main>
@endsection
