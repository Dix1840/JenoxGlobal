<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('admin.dashboard') }}" class="b-brand">
                <div class="brand-logo-box">
                    <i class="fas fa-globe-americas"></i>
                </div>
                <span class="brand-title">Jenox<span>Global</span></span>
            </a>
            <button class="sidebar-close-btn d-lg-none" id="sidebar-close" type="button">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">

                <li class="pc-item pc-caption"><label>Navigation</label></li>

                <li class="pc-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="pc-link">
                        <span class="pc-micon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>

                <li class="pc-item pc-caption"><label>Management</label></li>

                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon"><i class="fas fa-box"></i></span>
                        <span class="pc-mtext">Products</span>
                    </a>
                </li>

                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon"><i class="fas fa-tags"></i></span>
                        <span class="pc-mtext">Categories</span>
                    </a>
                </li>

                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon"><i class="fas fa-shopping-cart"></i></span>
                        <span class="pc-mtext">Orders</span>
                    </a>
                </li>

                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon"><i class="fas fa-users"></i></span>
                        <span class="pc-mtext">Customers</span>
                    </a>
                </li>

                <li class="pc-item pc-caption"><label>Content</label></li>

                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon"><i class="fas fa-envelope-open-text"></i></span>
                        <span class="pc-mtext">Inquiries</span>
                    </a>
                </li>

                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon"><i class="fas fa-file-alt"></i></span>
                        <span class="pc-mtext">Pages</span>
                    </a>
                </li>

                <li class="pc-item pc-caption"><label>Settings</label></li>

                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon"><i class="fas fa-cog"></i></span>
                        <span class="pc-mtext">Settings</span>
                    </a>
                </li>

                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon"><i class="fas fa-user-circle"></i></span>
                        <span class="pc-mtext">Profile</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- Sidebar Mobile Overlay -->
<div class="sidebar-mobile-overlay" id="sidebar-overlay"></div>
<!-- [ Sidebar Menu ] end -->

