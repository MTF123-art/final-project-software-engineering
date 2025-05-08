<div class="col-12 col-xl-3">
    <!-- Account menu -->
    <div class="card border-0 shadow-sm sticky-top sticky-top-120 d-none d-xl-block z-0">
        <div class="card-body">
            <div class="account-user border-bottom pb-4 mb-3">
                <form method="post" class="user-avatar">
                    <img src="{{ asset('assets') }}/img/avatars/a3.jpg" alt="" class="show-avatar rounded-circle">
                    <label for="filAvatar" class="select-avatar">
                        <i class="hicon hicon-camera-hover"></i>
                    </label>
                    <button type="submit" class="btn btn-primary btn-update-avatar d-none">
                        <i class="hicon hicon-check-valid-state"></i>
                    </button>
                    <input class="input-avatar d-none" type="file" id="filAvatar">
                </form>
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
                    <a href="./wishlist.html">
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
                <li class="menu-item">
                    <a href="./login.html">
                        <i class="hicon hicon-bold hicon-close-popup"></i> <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Account menu -->
</div>
