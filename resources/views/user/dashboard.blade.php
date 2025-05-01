@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
    <main>

        <div class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">

            <!-- Title -->
            <section class="container">
                <div class="d-lg-flex align-items-lg-end pb-4">
                    <div class="block-title me-auto">
                        <small class="sub-title">My Account</small>
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
                            <!-- Overview -->
                            <div class="pb-4">
                                <div class="row g-3 g-md-4">
                                    <div class="col-12 col-md-6">
                                        <a href="./booking.html"
                                            class="mini-card card-hover hover-effect shadow-sm rounded p-4">
                                            <span class="card-icon">
                                                <i class="icon hicon hicon-bold hicon-menu-calendar"></i>
                                            </span>
                                            <div class="card-content">
                                                <h2 class="card-title">28 Booking</h2>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <a href="./wishlist.html"
                                            class="mini-card card-hover hover-effect shadow-sm rounded p-4">
                                            <span class="card-icon">
                                                <i class="hicon hicon hicon-bold hicon-menu-favorite"></i>
                                            </span>
                                            <div class="card-content">
                                                <h2 class="card-title">16 Wishlist</h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Overview -->
                            <!-- Booking list -->
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between border-bottom pb-4 mb-4">
                                        <h2 class="h3 ff-primary mb-0 text-body-emphasis">Recent Booking</h2>
                                        <a href="./booking.html" class="d-inline-block fw-medium">
                                            <span>All Booking</span>
                                            <i class="hicon hicon-flights-one-ways"></i>
                                        </a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-center">
                                                <tr class="table-light">
                                                    <th scope="col">
                                                        <strong>ID</strong>
                                                    </th>
                                                    <th scope="col">
                                                        <strong>Tour</strong>
                                                    </th>
                                                    <th scope="col">
                                                        <strong>Amount</strong>
                                                    </th>
                                                    <th scope="col">
                                                        <strong>Date</strong>
                                                    </th>
                                                    <th scope="col">
                                                        <strong>Status</strong>
                                                    </th>
                                                    <th scope="col">
                                                        <strong>Details</strong>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">
                                                        <span>1</span>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class="d-flex flex-column">
                                                            <a href="./booking-details.html"
                                                                class="link-dark link-hover"><strong>Explore ancient
                                                                    castles</strong></a>
                                                            <small class="text-nowrap d-block">code:#B0143</small>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <strong><sup>$</sup>389.50</strong>
                                                    </td>
                                                    <td class="text-center">
                                                        <small class="text-nowrap">10:30 Feb 21 2023</small>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="booking-status booking-unpaid">Unpaid</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="./booking-details.html"
                                                            class="circle-icon circle-icon-link circle-icon-sm"
                                                            title="Detail booking">
                                                            <i class="hicon hicon-flights-one-ways"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <span>2</span>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class="d-flex flex-column">
                                                            <a href="./booking-details.html"
                                                                class="link-dark link-hover"><strong>Visit the Laken
                                                                    Valley</strong></a>
                                                            <small class="text-nowrap d-block">code:#B0154</small>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <strong><sup>$</sup>412.50</strong>
                                                    </td>
                                                    <td class="text-center">
                                                        <small class="text-nowrap">10:30 Feb 21 2023</small>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="booking-status booking-cancelled">Cancelled</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="./booking-details.html"
                                                            class="circle-icon circle-icon-link circle-icon-sm"
                                                            title="Detail booking">
                                                            <i class="hicon hicon-flights-one-ways"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <span>3</span>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class="d-flex flex-column">
                                                            <a href="./booking-details.html"
                                                                class="link-dark link-hover"><strong>Bathing at Noriva
                                                                    Beach</strong></a>
                                                            <small class="text-nowrap d-block">code:#B0167</small>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <strong><sup>$</sup>390.50</strong>
                                                    </td>
                                                    <td class="text-center">
                                                        <small class="text-nowrap">10:30 Feb 21 2023</small>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="booking-status booking-completed">Completed</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="./booking-details.html"
                                                            class="circle-icon circle-icon-link circle-icon-sm"
                                                            title="Detail booking">
                                                            <i class="hicon hicon-flights-one-ways"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <span>3</span>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class="d-flex flex-column">
                                                            <a href="./booking-details.html"
                                                                class="link-dark link-hover"><strong>Boating in Noriva
                                                                    Bay</strong></a>
                                                            <small class="text-nowrap d-block">code:#B0198</small>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <strong><sup>$</sup>370.50</strong>
                                                    </td>
                                                    <td class="text-center">
                                                        <small class="text-nowrap">10:30 Feb 21 2023</small>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="booking-status booking-processing">Processing</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="./booking-details.html"
                                                            class="circle-icon circle-icon-link circle-icon-sm"
                                                            title="Detail booking">
                                                            <i class="hicon hicon-flights-one-ways"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <span>3</span>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class="d-flex flex-column">
                                                            <a href="./booking-details.html"
                                                                class="link-dark link-hover"><strong>Visit Valiba
                                                                    swamp</strong></a>
                                                            <small class="text-nowrap d-block">code:#B0215</small>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <strong><sup>$</sup>410.50</strong>
                                                    </td>
                                                    <td class="text-center">
                                                        <small class="text-nowrap">10:30 Feb 21 2023</small>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="booking-status booking-completed">Completed</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="./booking-details.html"
                                                            class="circle-icon circle-icon-link circle-icon-sm"
                                                            title="Detail booking">
                                                            <i class="hicon hicon-flights-one-ways"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-center">
                                        <a href="#" class="fw-medium">
                                            <i class="hicon hicon-bold hicon-refresh"></i>
                                            <span>Load More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Booking list -->
                        </div>
                    </div>
                    <div class="col-12 col-xl-3">
                        <!-- Account menu -->
                        <div class="card border-0 shadow-sm sticky-top sticky-top-120 d-none d-xl-block z-0">
                            <div class="card-body">
                                <div class="account-user border-bottom pb-4 mb-3">
                                    <form method="post" class="user-avatar">
                                        <img src="./assets/img/avatars/a3.jpg" alt=""
                                            class="show-avatar rounded-circle">
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
                                        <strong>John Deep</strong>
                                    </div>
                                </div>
                                <ul class="account-menu fw-medium mb-0">
                                    <li class="menu-item active">
                                        <a href="./dashboard.html">
                                            <i class="hicon hicon-bold hicon-ycs-dashboard"></i> <span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="./booking.html">
                                            <i class="hicon hicon-bold hicon-installment-payment"></i> <span>Booking</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="./wishlist.html">
                                            <i class="hicon hicon-bold hicon-menu-favorite"></i> <span>Wishlist</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="./settings.html">
                                            <i class="hicon hicon-bold hicon-luggage"></i> <span>Setting</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="./security.html">
                                            <i class="hicon hicon-bold hicon-aps-lock"></i> <span>Security</span>
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
                </div>
            </section>
            <!-- /Dashboard -->

        </div>

    </main>
@endsection
