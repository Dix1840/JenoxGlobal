<!-- Footer -->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <!-- Company Information -->
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <div class="footer-brand-logo">
                            <span class="footer-brand-initials">JG</span>
                        </div>
                        <h4 class="footer-brand-text">JenoxGlobal</h4>
                    </div>
                    <p class="footer-description">
                        Trusted Global Exporter of Premium Rice & Lead Products. Connecting International Markets with Quality Products and Reliable Supply Chain Solutions.
                    </p>
                    <div class="footer-contact">
                        <div class="contact-item">
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>Dubai, United Arab Emirates</span>
                        </div>
                        <div class="contact-item">
                            <i class="bi bi-envelope-fill"></i>
                            <a href="mailto:info@jenoxglobal.com">info@jenoxglobal.com</a>
                        </div>
                        <div class="contact-item">
                            <i class="bi bi-telephone-fill"></i>
                            <a href="tel:+1234567890">+1 (234) 567-890</a>
                        </div>
                    </div>
                    <div class="footer-social">
                        <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <div class="footer-widget">
                    <h4 class="footer-title">Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('about') }}">About Us</a></li>
                        <li><a href="{{ url('categories') }}">Categories</a></li>
                        <li><a href="{{ url('products') }}">Products</a></li>
                        <li><a href="{{ url('certificates') }}">Certificates</a></li>
                        <li><a href="{{ url('faq') }}">FAQ</a></li>
                        <li><a href="{{ url('contact') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Product Categories -->
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <div class="footer-widget">
                    <h4 class="footer-title">Product Categories</h4>
                    <ul class="footer-links">
                        <li><a href="{{ url('categories/rice') }}">Rice Export</a></li>
                        <li><a href="{{ url('categories/lead') }}">Lead Export</a></li>
                        <li><a href="{{ url('categories/basmati') }}">Basmati Rice</a></li>
                        <li><a href="{{ url('categories/non-basmati') }}">Non-Basmati Rice</a></li>
                        <li><a href="{{ url('categories/lead-ore') }}">Lead Ore</a></li>
                        <li><a href="{{ url('categories/lead-ingots') }}">Lead Ingots</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Certificates -->
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <div class="footer-widget">
                    <h4 class="footer-title">Certificates</h4>
                    <ul class="footer-links">
                        <li><a href="{{ url('certificates') }}">ISO 9001</a></li>
                        <li><a href="{{ url('certificates') }}">ISO 22000</a></li>
                        <li><a href="{{ url('certificates') }}">FSSAI</a></li>
                        <li><a href="{{ url('certificates') }}">APEDA</a></li>
                        <li><a href="{{ url('certificates') }}">Export License</a></li>
                        <li><a href="{{ url('certificates') }}">SGS Certification</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Export Countries & Newsletter -->
            <div class="col-lg-2 col-md-6">
                <div class="footer-widget">
                    <h4 class="footer-title">Export Countries</h4>
                    <ul class="footer-links">
                        <li><a href="#">India</a></li>
                        <li><a href="#">UAE</a></li>
                        <li><a href="#">Saudi Arabia</a></li>
                        <li><a href="#">USA</a></li>
                        <li><a href="#">Germany</a></li>
                        <li><a href="#">UK</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Newsletter Section -->
        <div class="row">
            <div class="col-12">
                <div class="footer-newsletter">
                    <h4>Subscribe to Our Newsletter</h4>
                    <p>Stay updated with our latest products and export news</p>
                    <form class="newsletter-form" action="{{ url('newsletter/subscribe') }}" method="POST">
                        @csrf
                        <div class="input-group">
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                            <button type="submit" class="btn btn-newsletter">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Copyright -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="copyright">&copy; {{ date('Y') }} JenoxGlobal. All Rights Reserved.</p>
                </div>
                <div class="col-md-6">
                    <div class="footer-bottom-links">
                        <a href="{{ url('privacy-policy') }}">Privacy Policy</a>
                        <a href="{{ url('terms-conditions') }}">Terms & Conditions</a>
                        <a href="{{ url('shipping-policy') }}">Shipping Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<button class="back-to-top" id="backToTop">
    <i class="bi bi-arrow-up-circle-fill"></i>
</button>
