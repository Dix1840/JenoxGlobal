<!-- [ Header ] start -->
<header class="pc-header">
    <div class="header-wrapper">

        <!-- Desktop: collapse sidebar | Mobile: open sidebar -->
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled">
                <li class="pc-h-item d-none d-lg-flex">
                    <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li class="pc-h-item d-lg-none">
                    <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Desktop Search -->
        <div class="header-search-wrap d-none d-md-flex">
            <div class="header-search-inner">
                <i class="fas fa-search header-s-icon"></i>
                <input type="text" class="header-s-input" placeholder="Search anything...">
                <kbd class="header-s-kbd">Ctrl+K</kbd>
            </div>
        </div>

        <div class="ms-auto">
            <ul class="list-unstyled">

                <!-- Mobile Search Toggle -->
                <li class="pc-h-item d-md-none">
                    <a href="#" class="pc-head-link" id="mobile-search-toggle">
                        <i class="fas fa-search"></i>
                    </a>
                </li>

                <!-- Notifications -->
                <li class="dropdown pc-h-item">
                    <a class="pc-head-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        <i class="fas fa-bell"></i>
                        <span class="badge bg-danger pc-h-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <h5 class="m-0 fw-600">Notifications</h5>
                            <span class="badge bg-light-primary rounded-pill px-2">3 New</span>
                        </div>
                        <div class="notif-scroll-area">
                            <a href="#" class="notif-item-row">
                                <div class="notif-ico blue"><i class="fas fa-shopping-cart"></i></div>
                                <div class="notif-body">
                                    <h6>New order received</h6>
                                    <p>Order #12345 has been placed</p>
                                </div>
                                <span class="notif-ago">30m</span>
                            </a>
                            <a href="#" class="notif-item-row">
                                <div class="notif-ico orange"><i class="fas fa-envelope-open"></i></div>
                                <div class="notif-body">
                                    <h6>New inquiry</h6>
                                    <p>Customer inquiry from contact form</p>
                                </div>
                                <span class="notif-ago">2h</span>
                            </a>
                            <a href="#" class="notif-item-row">
                                <div class="notif-ico green"><i class="fas fa-user-plus"></i></div>
                                <div class="notif-body">
                                    <h6>New customer</h6>
                                    <p>A new user has signed up</p>
                                </div>
                                <span class="notif-ago">5h</span>
                            </a>
                        </div>
                        <div class="notif-footer">
                            <a href="#">View all notifications <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </li>

                <!-- User Profile -->
                <li class="dropdown pc-h-item">
                    <a class="pc-head-link d-flex align-items-center gap-2 dropdown-toggle arrow-none"
                       data-bs-toggle="dropdown" href="#" data-bs-auto-close="outside" aria-expanded="false">
                        <img src="{{ asset('assets/images/admin-avatar.svg') }}" alt="user" class="user-avtar">
                        <span class="d-none d-sm-flex flex-column">
                            <span class="user-name">Admin User</span>
                            <span class="user-desc">Administrator</span>
                        </span>
                        <i class="fas fa-chevron-down d-none d-sm-inline user-caret ms-1"></i>
                    </a>
                    <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                        <div class="user-dd-head">
                            <img src="{{ asset('assets/images/admin-avatar.svg') }}" alt="user">
                            <h5>Admin User</h5>
                            <p>admin@jenoxglobal.com</p>
                        </div>
                        <div class="user-dd-body">
                            <a href="#" class="user-dd-link"><i class="fas fa-user-circle"></i><span>My Profile</span></a>
                            <a href="#" class="user-dd-link"><i class="fas fa-key"></i><span>Change Password</span></a>
                            <a href="#" class="user-dd-link"><i class="fas fa-cog"></i><span>Settings</span></a>
                            <a href="{{ route('home') }}" target="_blank" class="user-dd-link"><i class="fas fa-globe"></i><span>Visit Website</span></a>
                            <div class="dropdown-divider mx-3 my-1"></div>
                            <form action="{{ route('admin.logout') }}" method="POST" class="m-0">
                                @csrf
                                <button type="submit" class="user-dd-link danger w-100" style="background:none;border:none;text-align:left;cursor:pointer;">
                                    <i class="fas fa-sign-out-alt"></i><span>Logout</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </li>

            </ul>
        </div>

    </div>

    <!-- Mobile Search Bar (hidden by default) -->
    <div class="mobile-search-bar" id="mobile-search-bar">
        <div class="mobile-search-inner">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Search anything..." autofocus>
            <button type="button" id="mobile-search-close"><i class="fas fa-times"></i></button>
        </div>
    </div>
</header>
<!-- [ Header ] end -->
