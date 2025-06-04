<div class="col-12 col-xl-3">
    <!-- Account menu -->
    <div class="card border-0 shadow-sm sticky-top sticky-top-120 d-none d-xl-block z-0">
        <div class="card-body">
            <div class="account-user border-bottom pb-4 mb-3">
                <div class="user-avatar">
                    <img src="{{ asset('Storage/'.Auth::user()->image) }}" onerror="this.onerror=null; this.src='{{ asset('assets/img/destinations/placeholder.webp') }}';" alt="" class="show-avatar rounded-circle">
                </div>
                <div class="username">
                    <span>Hi!</span>
                    <strong>{{ Auth::user()->name }}</strong>
                </div>
            </div>
            <ul class="account-menu fw-medium mb-0">
                <li class="menu-item">
                    <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="hicon hicon-bold hicon-ycs-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="{{ route('admin.profile') }}" class="{{ request()->routeIs('admin.profile') ? 'active' : '' }}">
                        <i class="hicon hicon-bold hicon-menu-account"></i> <span>My Profile</span>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="{{ route('admin.user-management.index') }}" class="{{ request()->routeIs('admin.user-management.index') ? 'active' : '' }}">
                        <i class="hicon hicon-bold hicon-occupancy"></i> <span>Users Management</span>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="{{ route('admin.role-request.index') }}" class="{{ request()->routeIs('admin.role-request.index') ? 'active' : '' }}">
                        <i class="hicon hicon-bold hicon-upload-your-logo"></i> <span>Role Request Management</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.destination.index') }}" class="{{ request()->routeIs('admin.destination.index') ? 'active' : '' }}">
                        <i class="hicon hicon-bold hicon-poi-text-search"></i> <span>Manajemen Destinasi</span>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="{{ route('admin.category.index') }}" class="{{ request()->routeIs('admin.category.index') ? 'active' : '' }}">
                        <i class="hicon hicon-bold hicon-menu-calendar"></i> <span>Manajemen Kategori</span>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="{{ route('admin.review-management.index') }}" class="{{ request()->routeIs('admin.review-management.index') ? 'active' : '' }}">
                        <i class="hicon hicon-bold hicon-mmb-inbox"></i> <span>Review Management</span>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="{{ route('admin.customer-message.index') }}" class="{{ request()->routeIs('admin.customer-message.index') ? 'active' : '' }}">
                        <i class="hicon hicon-bold hicon-email-envelope"></i> <span>Customer Message</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.notification.index') }}" class="{{ request()->routeIs('admin.notification.index') ? 'active' : '' }}">
                        <i class="hicon hicon-bold hicon-bell-alerts"></i> <span>Notifikasi</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Account menu -->
</div>
