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
            <a href="{{ route('user.dashboard') }}"
                class="{{ request()->routeIs('user.dashboard') ? 'active' : '' }} dropdown-item ">
                <i class="hicon hicon-bold hicon-ycs-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.profile') }}" class="{{ request()->routeIs('admin.profile') ? 'active' : '' }} dropdown-item">
                <i class="hicon hicon-bold hicon-menu-account"></i> <span>My Profile</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.user-management.index') }}"
                class="{{ request()->routeIs('admin.user-management.index') ? 'active' : '' }} dropdown-item">
                <i class="hicon hicon-bold hicon-occupancy"></i> <span>Users Management</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.role-request.index') }}"
                class="{{ request()->routeIs('admin.role-request.index') ? 'active' : '' }} dropdown-item">
                <i class="hicon hicon-bold hicon-upload-your-logo"></i> <span>Role Request Management</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.destination.index') }}"
                class="{{ request()->routeIs('admin.destination.index') ? 'active' : '' }} dropdown-item">
                <i class="hicon hicon-bold hicon-poi-text-search"></i> <span>Manajemen Destinasi</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.category.index') }}"
                class="{{ request()->routeIs('admin.category.index') ? 'active' : '' }} dropdown-item">
                <i class="hicon hicon-bold hicon-menu-calendar"></i> <span>Manajemen Kategori</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.review-management.index') }}"
                class="{{ request()->routeIs('admin.review-management.index') ? 'active' : '' }} dropdown-item">
                <i class="hicon hicon-bold hicon-mmb-inbox"></i> <span>Review Management</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.customer-message.index') }}"
                class="{{ request()->routeIs('admin.customer-message.index') ? 'active' : '' }} dropdown-item">
                <i class="hicon hicon-bold hicon-email-envelope"></i> <span>Customer Message</span>
            </a>
        </li>
        <li>
            <a href="./security.html" class="dropdown-item">
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
