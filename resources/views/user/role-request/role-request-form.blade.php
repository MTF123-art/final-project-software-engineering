@extends('layout.app')

@section('title', $title)

@section('content')
    <main>

        <div class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">

            <!-- Title -->
            <section class="container">
                <div class="d-lg-flex align-items-lg-end pb-4">
                    <div class="block-title me-auto">
                        <small class="sub-title">Upgrade your account and start managing</small>
                        <h1 class="display-5 title">Your own travel destinations!</h1>
                    </div>
                </div>
            </section>
            <!-- /Title -->

            <section class="container">
                <div class="row g-0 g-xl-8">
                    <!-- request form -->
                    <div class="col-12 col-xl-9">
                        <div class="pe-xl-4 me-xl-2 mb-4">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="border-bottom pb-4 mb-4">
                                        <h2 class="h3 text-body-emphasis mb-0">Upgrade Account Request</h2>
                                        @if (session('success-upgrade'))
                                                <x-toast type="success-upgrade" />
                                        @endif
                                    </div>
                                    <form action="{{ route('user.upgrade.submit') }}" method="POST">
                                        @csrf
                                        <div class="mb-4">
                                            <p class="mb-1">You are about to request an upgrade to become a
                                                <strong>Destination Manager</strong>.</p>
                                            <p class="text-muted">This will allow you to submit and manage tourist
                                                destinations. The admin will review your request and approve or reject it
                                                based on your submitted data.</p>
                                        </div>

                                        <div class="mb-4">
                                            <label class="form-label" for="reason">Why do you want to become a Destination
                                                Manager?<span class="text-danger">*</span></label>
                                            <textarea name="reason" id="reason" class="form-control shadow-sm" rows="4" required
                                                placeholder="Explain your motivation..."></textarea>
                                            @error('reason')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="border-top pt-4">
                                            <button type="submit" class="btn btn-primary mnw-180">
                                                <i class="hicon hicon-check-valid-state"></i>
                                                Submit Upgrade Request
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /request form -->
                    {{-- account menu --}}
                    @include('user.account-menu')
                    {{-- account menu --}}
                </div>
            </section>
            {{-- form --}}
        </div>

    </main>
@endsection
