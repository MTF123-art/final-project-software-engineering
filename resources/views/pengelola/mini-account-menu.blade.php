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
        <li>
            <a href="{{ route('pengelola.dashboard') }}"
                class="{{ request()->routeIs('pengelola.dashboard') ? 'active' : '' }} dropdown-item">
                <i class="hicon hicon-bold hicon-ycs-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('pengelola.profile') }}"
                class="{{ request()->routeIs('pengelola.profile') ? 'active' : '' }} dropdown-item">
                <i class="hicon hicon-bold hicon-menu-account"></i> <span>My Profile</span>
            </a>
        </li>
        <li>
            <a href="{{ route('pengelola.destination.index') }}"
                class="{{ request()->routeIs('pengelola.destination.index') ? 'active' : '' }} dropdown-item">
                <i class="hicon hicon-bold hicon-poi-text-search"></i> <span>My Destination</span>
            </a>
        </li>
        <li>
            <a href="{{ route('pengelola.review.index') }}"
                class="{{ request()->routeIs('pengelola.review.index') ? 'active' : '' }} dropdown-item">
                <i class="hicon hicon-bold hicon-mmb-inbox"></i> <span>Review</span>
            </a>
        </li>
        <li>
            <a href="{{ route('pengelola.notification') }}"
                class="{{ request()->routeIs('pengelola.notification') ? 'active' : '' }} dropdown-item">
                <i class="hicon hicon-bold hicon-bell-alerts"></i> <span>Notifikasi</span>
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
