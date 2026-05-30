<!-- Top Bar -->
<div class="top-bar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="top-bar-info">
                    <span class="top-bar-item">
                        <i class="bi bi-envelope-fill"></i>
                        <a href="mailto:info@jenoxglobal.com">info@jenoxglobal.com</a>
                    </span>
                    <span class="top-bar-item">
                        <i class="bi bi-telephone-fill"></i>
                        <a href="tel:+1234567890">+1 (234) 567-890</a>
                    </span>
                    <span class="top-bar-item d-none d-lg-inline">
                        <i class="bi bi-geo-alt-fill"></i>
                        Dubai, UAE
                    </span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top-bar-social">
                    <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Navigation -->
<nav class="navbar navbar-expand-lg main-nav" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <div class="brand-logo">
                <span class="brand-initials">JG</span>
            </div>
            <span class="brand-text">JenoxGlobal</span>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('categories') ? 'active' : '' }}" href="{{ url('categories') }}">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('products') ? 'active' : '' }}" href="{{ url('products') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('certificates') ? 'active' : '' }}" href="{{ url('certificates') }}">Certificates</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('faq') ? 'active' : '' }}" href="{{ url('faq') }}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ url('contact') }}">Contact Us</a>
                </li>
            </ul>
            
            <div class="nav-extra">
                <!-- Language Dropdown -->
                <div class="dropdown language-dropdown">
                    <button class="btn btn-language dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-globe"></i> EN
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">English</a></li>
                        <li><a class="dropdown-item" href="#">العربية</a></li>
                        <li><a class="dropdown-item" href="#">Français</a></li>
                        <li><a class="dropdown-item" href="#">Español</a></li>
                        <li><a class="dropdown-item" href="#">Русский</a></li>
                        <li><a class="dropdown-item" href="#">中文</a></li>
                    </ul>
                </div>
                
                <!-- Request Quote Button -->
                <a href="{{ url('contact') }}" class="btn btn-quote">
                    <i class="bi bi-file-earmark-text"></i> Request Quote
                </a>
            </div>
        </div>
    </div>
</nav>
