<div class="dropdown user-menu ms-xl-auto">
    <button class="user-menu-avatar show" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="true">
        <img src="{{ asset('Storage/' . Auth::user()->image) }}"
            onerror="this.onerror=null; this.src='{{ asset('assets/img/destinations/placeholder.webp') }}';"
            alt="">
    </button>
    <ul class="dropdown-menu dropdown-menu-end shadow-sm animate slideIn" data-bs-popper="static">
        <li>
            <a class="dropdown-item fw-medium" href="#">
                {{ Auth::user()->name }}
            </a>
        </li>
        <li class="ps-4 pe-4">
            <hr class="dropdown-divider">
        </li>
        <li class="">
            <a href="{{ route('user.dashboard') }}" class="{{ request()->routeIs('user.dashboard') ? 'active' : '' }} dropdown-item ">
                <i class="hicon hicon-bold hicon-ycs-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('user.profile') }}" class="{{ request()->routeIs('user.profile') ? 'active' : '' }} dropdown-item">
                <i class="hicon hicon-bold hicon-menu-account"></i> <span>My Profile</span>
            </a>
        </li>
        <li>
            <a href="{{ route('user.bookmark.index') }}"
                class="{{ request()->routeIs('user.bookmark.index') ? 'active' : '' }} dropdown-item">
                <i class="hicon hicon-bold hicon-dynamic-banner"></i> <span>Bookmark</span>
            </a>
        </li>
        <li>
            <a href="{{ route('user.review.index') }}"
                class="{{ request()->routeIs('user.review.index') ? 'active' : '' }} dropdown-item">
                <i class="hicon hicon-bold hicon-mmb-inbox"></i> <span>Review</span>
            </a>
        </li>
        <li>
            <a href="{{ route('user.notification.index') }}"
                class="{{ request()->routeIs('user.notification.index') ? 'active' : '' }} dropdown-item">
                <i class="hicon hicon-bold hicon-bell-alerts"></i> <span>Notifikasi</span>
            </a>
        </li>
        <li>
            <a href="{{ route('user.upgrade') }}" title="Daftar sebagai pengelola wisata"
                class="{{ request()->routeIs('user.upgrade') ? 'active' : '' }} dropdown-item">
                <i class="hicon hicon-bold hicon-upload-your-logo"></i> <span>Upgrade Account</span>
            </a>
        </li>
        <li>
            <form class="dropdown-item" action="{{ route('logout') }}" method="POST">
                @csrf
                <i class="hicon hicon-close-popup me-1"></i>
                <button type="submit"
                    style="background: none; border: none; color: inherit; padding: 0; font: inherit; cursor: pointer;">Logout</button>
            </form>
        </li>
    </ul>
</div>