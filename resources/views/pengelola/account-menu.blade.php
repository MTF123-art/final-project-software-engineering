<div class="col-12 col-xl-3">
    <!-- Account menu -->
    <div class="card border-0 shadow-sm sticky-top sticky-top-120 d-none d-xl-block z-0">
        <div class="card-body">
            <div class="account-user border-bottom pb-4 mb-3">
                <div class="user-avatar">
                    <img src="{{ asset('Storage/' . Auth::user()->image) }}"
                        onerror="this.onerror=null; this.src='{{ asset('assets/img/destinations/placeholder.webp') }}';"
                        alt="" class="show-avatar rounded-circle">
                </div>
                <div class="username">
                    <span>Hi!</span>
                    <strong>{{ Auth::user()->name }}</strong>
                </div>
            </div>
            <ul class="account-menu fw-medium mb-0">
                <li class="menu-item active">
                    <a href="{{ route('pengelola.dashboard') }}">
                        <i class="hicon hicon-bold hicon-ycs-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('pengelola.profile') }}">
                        <i class="hicon hicon-bold hicon-menu-account"></i> <span>My Profile</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('pengelola.destination.index') }}">
                        <i class="hicon hicon-bold hicon-poi-text-search"></i> <span>My Destination</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="./settings.html">
                        <i class="hicon hicon-bold hicon-mmb-inbox"></i> <span>Review</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('pengelola.notification') }}">
                        <i class="hicon hicon-bold hicon-email-envelope"></i> <span>Notifikasi</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Account menu -->
</div>
