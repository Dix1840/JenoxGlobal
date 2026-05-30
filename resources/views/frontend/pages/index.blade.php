@extends('frontend.layouts.app')

@section('title', 'JenoxGlobal - Premium Rice & Lead Exporter')

@section('content')
<!-- Hero Section -->
<section class="hero-section animate-on-scroll">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="hero-content">
                    <h1 class="hero-title">Trusted Global Exporter of Premium Rice & Lead Products</h1>
                    <p class="hero-subtitle">Connecting International Markets with Quality Products and Reliable Supply Chain Solutions</p>
                    <div class="hero-buttons">
                        <a href="{{ url('products') }}" class="btn btn-primary">
                            <i class="bi bi-box-seam"></i> Explore Products
                        </a>
                        <a href="{{ url('contact') }}" class="btn btn-outline">
                            <i class="bi bi-file-earmark-text"></i> Request Quotation
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Company Highlights -->
<section class="company-highlights animate-on-scroll">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="bi bi-globe"></i>
                    </div>
                    <div class="highlight-number" data-target="50">50+</div>
                    <div class="highlight-label">Countries Served</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="bi bi-ship"></i>
                    </div>
                    <div class="highlight-number" data-target="5000">5000+</div>
                    <div class="highlight-label">Export Shipments</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="bi bi-calendar-check"></i>
                    </div>
                    <div class="highlight-number" data-target="15">15+</div>
                    <div class="highlight-label">Years Experience</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <div class="highlight-number" data-target="500">500+</div>
                    <div class="highlight-label">Global Clients</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Categories -->
<section class="section product-categories animate-on-scroll">
    <div class="container">
        <div class="section-title">
            <h2>Our Product Categories</h2>
            <p>Explore our premium range of rice and lead products exported globally with quality assurance</p>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="category-card">
                    <div class="category-image" style="background-image: url('https://images.unsplash.com/photo-1586201375761-83865001e31c?w=800');">
                    </div>
                    <div class="category-content">
                        <h3 class="category-title">Rice Export</h3>
                        <p class="category-description">Premium quality Basmati and Non-Basmati rice varieties sourced from the finest farms, processed with strict quality control measures.</p>
                        <a href="{{ url('categories/rice') }}" class="btn btn-primary">
                            <i class="bi bi-arrow-right"></i> View Products
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="category-card">
                    <div class="category-image" style="background-image: url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800');">
                    </div>
                    <div class="category-content">
                        <h3 class="category-title">Lead Export</h3>
                        <p class="category-description">High-grade lead products including lead ore, lead ingots, and lead alloys for industrial applications worldwide.</p>
                        <a href="{{ url('categories/lead') }}" class="btn btn-primary">
                            <i class="bi bi-arrow-right"></i> View Products
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="section why-choose-us animate-on-scroll">
    <div class="container">
        <div class="section-title">
            <h2>Why Choose Us</h2>
            <p>Experience excellence in international trade with our comprehensive export solutions</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="bi bi-globe-americas"></i>
                    </div>
                    <h4 class="why-title">Global Export Expertise</h4>
                    <p class="why-description">15+ years of experience in international trade with deep knowledge of global markets and regulations.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="bi bi-currency-dollar"></i>
                    </div>
                    <h4 class="why-title">Competitive Pricing</h4>
                    <p class="why-description">Direct sourcing and efficient supply chain enable us to offer the most competitive prices in the market.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h4 class="why-title">Quality Assurance</h4>
                    <p class="why-description">ISO certified processes and strict quality control at every stage from sourcing to delivery.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <h4 class="why-title">Timely Delivery</h4>
                    <p class="why-description">Reliable logistics network ensures on-time delivery to any destination worldwide.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="bi bi-file-earmark-text"></i>
                    </div>
                    <h4 class="why-title">Export Documentation</h4>
                    <p class="why-description">Complete export documentation support including certificates of origin, quality certificates, and customs clearance.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="bi bi-airplane"></i>
                    </div>
                    <h4 class="why-title">Worldwide Shipping</h4>
                    <p class="why-description">Flexible shipping options including sea freight, air freight, and multimodal transport solutions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Export Countries -->
<section class="section export-countries animate-on-scroll">
    <div class="container">
        <div class="section-title">
            <h2>Export Countries</h2>
            <p>We serve clients across Asia, Europe, Middle East, Africa, and America</p>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="country-card">
                    <div class="country-flag">🇮🇳</div>
                    <div class="country-name">India</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="country-card">
                    <div class="country-flag">🇦🇪</div>
                    <div class="country-name">UAE</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="country-card">
                    <div class="country-flag">🇸🇦</div>
                    <div class="country-name">Saudi Arabia</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="country-card">
                    <div class="country-flag">🇺🇸</div>
                    <div class="country-name">USA</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="country-card">
                    <div class="country-flag">🇨🇦</div>
                    <div class="country-name">Canada</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="country-card">
                    <div class="country-flag">🇩🇪</div>
                    <div class="country-name">Germany</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="country-card">
                    <div class="country-flag">🇬🇧</div>
                    <div class="country-name">UK</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="country-card">
                    <div class="country-flag">🇦🇺</div>
                    <div class="country-name">Australia</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="country-card">
                    <div class="country-flag">🇳🇬</div>
                    <div class="country-name">Nigeria</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="country-card">
                    <div class="country-flag">🇪🇬</div>
                    <div class="country-name">Egypt</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="country-card">
                    <div class="country-flag">🇮🇩</div>
                    <div class="country-name">Indonesia</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="country-card">
                    <div class="country-flag">🇧🇷</div>
                    <div class="country-name">Brazil</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certificates -->
<section class="section certificates animate-on-scroll">
    <div class="container">
        <div class="section-title">
            <h2>Our Certifications</h2>
            <p>Internationally recognized certifications ensuring quality and compliance</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="certificate-card">
                    <div class="certificate-icon">
                        <i class="bi bi-award"></i>
                    </div>
                    <h4 class="certificate-name">ISO 9001</h4>
                    <p class="text-muted">Quality Management System</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="certificate-card">
                    <div class="certificate-icon">
                        <i class="bi bi-award"></i>
                    </div>
                    <h4 class="certificate-name">ISO 22000</h4>
                    <p class="text-muted">Food Safety Management</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="certificate-card">
                    <div class="certificate-icon">
                        <i class="bi bi-award"></i>
                    </div>
                    <h4 class="certificate-name">FSSAI</h4>
                    <p class="text-muted">Food Safety Standards</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="certificate-card">
                    <div class="certificate-icon">
                        <i class="bi bi-award"></i>
                    </div>
                    <h4 class="certificate-name">APEDA</h4>
                    <p class="text-muted">Agricultural Export</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ url('certificates') }}" class="btn btn-outline">
                <i class="bi bi-eye"></i> View All Certificates
            </a>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="section testimonials animate-on-scroll">
    <div class="container">
        <div class="section-title">
            <h2 style="color: white;">Client Testimonials</h2>
            <p style="color: rgba(255,255,255,0.8);">What our global clients say about us</p>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="testimonial-card">
                    <div class="testimonial-stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="testimonial-quote">"JenoxGlobal has been our trusted rice supplier for over 5 years. Their product quality is exceptional and delivery is always on time. Highly recommended for bulk importers."</p>
                    <h5 class="testimonial-author">Ahmed Al-Rashid</h5>
                    <p class="testimonial-position">CEO, Al-Rashid Trading Co., UAE</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-card">
                    <div class="testimonial-stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="testimonial-quote">"Professional team, excellent communication, and premium quality lead products. JenoxGlobal understands international trade requirements perfectly."</p>
                    <h5 class="testimonial-author">Michael Schmidt</h5>
                    <p class="testimonial-position">Procurement Manager, German Metals GmbH</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-card">
                    <div class="testimonial-stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="testimonial-quote">"The best export partner we've worked with. Competitive pricing, reliable documentation support, and consistent quality. A true global trading partner."</p>
                    <h5 class="testimonial-author">Rajesh Kumar</h5>
                    <p class="testimonial-position">Director, Global Foods India</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section faq animate-on-scroll">
    <div class="container">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>Quick answers to common questions about our products and services</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true">
                                What products do you export?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We specialize in exporting premium quality rice (Basmati and Non-Basmati varieties) and lead products (lead ore, lead ingots, and lead alloys) to international markets.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false">
                                Which countries do you export to?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We export to over 50 countries across Asia, Europe, Middle East, Africa, and America including UAE, Saudi Arabia, USA, Germany, UK, Australia, and many more.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false">
                                What is your Minimum Order Quantity (MOQ)?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our MOQ varies by product. For rice, minimum order is typically 20 metric tons. For lead products, minimum order starts from 10 metric tons. Contact us for specific requirements.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false">
                                How can I request a quotation?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can request a quotation by filling out our contact form, sending an email to info@jenoxglobal.com, or calling us directly. Provide product details, quantity, and destination for accurate pricing.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false">
                                What export documents do you provide?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We provide complete export documentation including Certificate of Origin, Commercial Invoice, Packing List, Bill of Lading, Quality Certificates, Phytosanitary Certificate, and any other required documents.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ url('faq') }}" class="btn btn-outline">
                <i class="bi bi-question-circle"></i> View All FAQs
            </a>
        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class="contact-cta animate-on-scroll">
    <div class="container">
        <h2 class="cta-title">Looking For Reliable Export Partner?</h2>
        <p class="lead">Connect with us for premium quality products and exceptional service</p>
        <div class="cta-buttons">
            <a href="{{ url('contact') }}" class="btn btn-cta-white">
                <i class="bi bi-file-earmark-text"></i> Request Quote
            </a>
            <a href="{{ url('contact') }}" class="btn btn-cta-outline">
                <i class="bi bi-envelope"></i> Contact Us
            </a>
        </div>
    </div>
</section>
@endsection
