@extends('layout.app')

@section('title', 'Admin Dashboard')

@section('content')
    <main>
        <div class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">

            <!-- Title -->
            <section class="container">
                <div class="d-lg-flex align-items-lg-end pb-4">
                    <div class="block-title me-auto">
                        <small class="sub-title">Admin Panel</small>
                        <h1 class="display-5 title">Dashboard</h1>
                    </div>
                </div>
            </section>
            <!-- /Title -->

            <!-- Dashboard -->
            <section class="container">
                <div class="row g-0 g-xl-8">
                    <div class="col-12 col-xl-9">
                        <div class="pe-xl-4 me-xl-2">

                            <!-- Statistics Cards -->
                            <div class="row g-4 mb-4">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-body text-center">
                                            <div class="display-6 text-primary mb-2">
                                                <i class="hicon hicon-bold hicon-occupancy"></i>
                                            </div>
                                            <h3 class="h2 text-primary mb-1">{{ $totalUsers }}</h3>
                                            <p class="text-muted mb-0">Total Users</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-body text-center">
                                            <div class="display-6 text-success mb-2">
                                                <i class="hicon hicon-bold hicon-poi-text-search"></i>
                                            </div>
                                            <h3 class="h2 text-success mb-1">{{ $totalDestinations }}</h3>
                                            <p class="text-muted mb-0">Total Destinations</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-body text-center">
                                            <div class="display-6 text-info mb-2">
                                                <i class="hicon hicon-bold hicon-menu-calendar"></i>
                                            </div>
                                            <h3 class="h2 text-info mb-1">{{ $totalCategories }}</h3>
                                            <p class="text-muted mb-0">Total Categories</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-body text-center">
                                            <div class="display-6 text-warning mb-2">
                                                <i class="hicon hicon-bold hicon-mmb-inbox"></i>
                                            </div>
                                            <h3 class="h2 text-warning mb-1">{{ $totalReviews }}</h3>
                                            <p class="text-muted mb-0">Total Reviews</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-body text-center">
                                            <div class="display-6 text-danger mb-2">
                                                <i class="hicon hicon-bold hicon-upload-your-logo"></i>
                                            </div>
                                            <h3 class="h2 text-danger mb-1">{{ $pendingRoleRequests }}</h3>
                                            <p class="text-muted mb-0">Pending Role Requests</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-body text-center">
                                            <div class="display-6 text-secondary mb-2">
                                                <i class="hicon hicon-bold hicon-email-envelope"></i>
                                            </div>
                                            <h3 class="h2 text-secondary mb-1">{{ $unreadMessages }}</h3>
                                            <p class="text-muted mb-0">Unread Messages</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Actions -->
                            <div class="card border-0 shadow-sm mb-4">
                                <div class="card-body">
                                    <h2 class="h4 ff-primary mb-3 text-body-emphasis">Quick Actions</h2>
                                    <div class="row g-2">
                                        <div class="col-6 col-md-3">
                                            <a href="{{ route('admin.destination.index') }}"
                                                class="btn btn-outline-primary btn-sm w-100">
                                                <i class="hicon hicon-bold hicon-poi-text-search me-1"></i>
                                                Add Destination
                                            </a>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <a href="{{ route('admin.category.index') }}"
                                                class="btn btn-outline-success btn-sm w-100">
                                                <i class="hicon hicon-bold hicon-menu-calendar me-1"></i>
                                                Manage Categories
                                            </a>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <a href="{{ route('admin.role-request.index') }}"
                                                class="btn btn-outline-warning btn-sm w-100">
                                                <i class="hicon hicon-bold hicon-upload-your-logo me-1"></i>
                                                Pending Requests
                                            </a>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <a href="{{ route('admin.customer-message.index') }}"
                                                class="btn btn-outline-info btn-sm w-100">
                                                <i class="hicon hicon-bold hicon-email-envelope me-1"></i>
                                                Check Messages
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Charts Row -->
                            <div class="row g-4 mb-4">
                                <!-- User Registration Trend -->
                                <div class="col-12 col-lg-6">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-body">
                                            <h3 class="h5 ff-primary mb-3 text-body-emphasis">User Registration Trend</h3>
                                            <div style="position: relative; height: 250px;">
                                                <canvas id="userChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Category Distribution -->
                                <div class="col-12 col-lg-6">
                                    <div class="card border-0 shadow-sm h-100">
                                        <div class="card-body">
                                            <h3 class="h5 ff-primary mb-3 text-body-emphasis">Category Distribution</h3>
                                            <div style="position: relative; height: 250px;">
                                                <canvas id="categoryChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Optional Sidebar -->
                    @include('admin.account-menu')

                </div>
            </section>
            <!-- /Dashboard -->

        </div>
    </main>

    <!-- Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script>
        // User Registration Trend Chart
        const userCtx = document.getElementById('userChart').getContext('2d');
        new Chart(userCtx, {
            type: 'line',
            data: {
                labels: @json($userRegistrationData['labels']),
                datasets: [{
                    label: 'New Users',
                    data: @json($userRegistrationData['data']),
                    borderColor: 'rgb(75, 192, 192)',
                    backgroundColor: 'rgba(75, 192, 192, 0.1)',
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                interaction: {
                    intersect: false
                },
                elements: {
                    point: {
                        radius: 3
                    }
                }
            }
        });

        // Category Distribution Chart
        const categoryCtx = document.getElementById('categoryChart').getContext('2d');
        new Chart(categoryCtx, {
            type: 'doughnut',
            data: {
                labels: @json($categoryDistributionData['labels']),
                datasets: [{
                    data: @json($categoryDistributionData['data']),
                    backgroundColor: [
                        '#FF6384', '#36A2EB', '#FFCE56',
                        '#4BC0C0', '#9966FF', '#FF9F40'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            padding: 15,
                            usePointStyle: true
                        }
                    }
                },
                cutout: '60%'
            }
        });
    </script>
@endsection
