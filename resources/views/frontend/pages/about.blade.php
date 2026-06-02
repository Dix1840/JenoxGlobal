@extends('frontend.layouts.app')

@section('title', 'About Us - JenoxGlobal')

@section('content')
<!-- About Banner -->
<section class="about-banner animate-on-scroll">
    <div class="container">
        <h1>About JenoxGlobal</h1>
        <p>Your Trusted Partner in International Trade</p>
    </div>
</section>

<!-- Company Overview -->
<section class="section about-section animate-on-scroll">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="about-image">
                    <img src="{{ asset('assets/images/office.jpg') }}" alt="JenoxGlobal Office" class="img-fluid rounded">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h2 class="section-title text-start">Company Overview</h2>
                    <p class="lead">JenoxGlobal is a leading international B2B export company specializing in premium quality rice and lead products. With over 15 years of experience in global trade, we have established ourselves as a trusted partner for importers, wholesalers, distributors, and manufacturing companies worldwide.</p>
                    <p>Our commitment to quality, reliability, and customer satisfaction has enabled us to build long-term relationships with clients across Asia, Europe, Middle East, Africa, and America. We pride ourselves on our comprehensive understanding of international trade regulations, efficient supply chain management, and dedication to delivering excellence in every shipment.</p>
                    <p>From sourcing the finest products from certified suppliers to ensuring timely delivery at destination ports, JenoxGlobal manages every aspect of the export process with precision and professionalism.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="section about-section animate-on-scroll" style="background-color: var(--light-gray);">
    <div class="container">
        <div class="section-title">
            <h2>Mission & Vision</h2>
            <p>Driving excellence in international trade through quality and innovation</p>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="mission-vision-card">
                    <div class="mission-vision-icon">
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>To be the most trusted and reliable export partner for international buyers by delivering premium quality rice and lead products with exceptional service, competitive pricing, and unwavering commitment to quality standards.</p>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="mission-vision-card">
                    <div class="mission-vision-icon">
                        <i class="bi bi-eye"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>To become a global leader in the export industry, recognized for excellence in product quality, supply chain reliability, and customer satisfaction, while contributing to sustainable international trade practices.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="core-values animate-on-scroll">
    <div class="container">
        <div class="section-title">
            <h2 style="color: white;">Our Core Values</h2>
            <p style="color: rgba(255,255,255,0.8);">The principles that guide our business</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h4 class="value-title">Integrity</h4>
                    <p class="value-description">We conduct business with honesty, transparency, and ethical practices in all our dealings.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="bi bi-gem"></i>
                    </div>
                    <h4 class="value-title">Quality</h4>
                    <p class="value-description">We never compromise on quality and ensure every product meets international standards.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="bi bi-handshake"></i>
                    </div>
                    <h4 class="value-title">Reliability</h4>
                    <p class="value-description">We honor our commitments and deliver on our promises consistently.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="bi bi-lightbulb"></i>
                    </div>
                    <h4 class="value-title">Innovation</h4>
                    <p class="value-description">We continuously improve our processes and adopt new technologies for better service.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Export Process -->
<section class="section about-section">
    <div class="container">
        <div class="section-title">
            <h2>Our Export Process</h2>
            <p>A streamlined approach to international trade</p>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="text-center">
                    <div class="process-icon mb-3">
                        <i class="bi bi-clipboard-data" style="font-size: 3rem; color: var(--secondary-color);"></i>
                    </div>
                    <h4>1. Requirement Analysis</h4>
                    <p class="text-muted">We understand your specific product requirements, quantity, quality standards, and delivery timelines.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="text-center">
                    <div class="process-icon mb-3">
                        <i class="bi bi-search" style="font-size: 3rem; color: var(--secondary-color);"></i>
                    </div>
                    <h4>2. Product Sourcing</h4>
                    <p class="text-muted">We source premium products from certified suppliers and manufacturers meeting your specifications.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="text-center">
                    <div class="process-icon mb-3">
                        <i class="bi bi-check-circle" style="font-size: 3rem; color: var(--secondary-color);"></i>
                    </div>
                    <h4>3. Quality Assurance</h4>
                    <p class="text-muted">Rigorous quality checks and testing ensure products meet international quality standards.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="text-center">
                    <div class="process-icon mb-3">
                        <i class="bi bi-file-earmark-text" style="font-size: 3rem; color: var(--secondary-color);"></i>
                    </div>
                    <h4>4. Documentation</h4>
                    <p class="text-muted">Complete export documentation including certificates, invoices, and customs paperwork.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="text-center">
                    <div class="process-icon mb-3">
                        <i class="bi bi-box-seam" style="font-size: 3rem; color: var(--secondary-color);"></i>
                    </div>
                    <h4>5. Packaging & Shipping</h4>
                    <p class="text-muted">Professional packaging and coordination with reliable shipping partners for safe delivery.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="text-center">
                    <div class="process-icon mb-3">
                        <i class="bi bi-truck" style="font-size: 3rem; color: var(--secondary-color);"></i>
                    </div>
                    <h4>6. Delivery & Support</h4>
                    <p class="text-muted">On-time delivery to destination port with continuous support until successful handover.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Global Presence -->
<section class="section about-section" style="background-color: var(--light-gray);">
    <div class="container">
        <div class="section-title">
            <h2>Global Presence</h2>
            <p>Serving clients across continents with local expertise</p>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="about-image">
                    <img src="{{ asset('assets/images/global-network.jpg') }}" alt="Global Network" class="img-fluid rounded">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h3>Expanding Our Reach</h3>
                    <p>JenoxGlobal has established a strong presence in major international markets through strategic partnerships and a deep understanding of regional trade requirements. Our global network includes:</p>
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> <strong>Middle East:</strong> UAE, Saudi Arabia, Qatar, Kuwait, Oman</li>
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> <strong>Asia:</strong> India, Indonesia, Malaysia, Singapore, Philippines</li>
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> <strong>Europe:</strong> Germany, UK, France, Italy, Netherlands</li>
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> <strong>Africa:</strong> Nigeria, Egypt, South Africa, Kenya, Ghana</li>
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> <strong>Americas:</strong> USA, Canada, Brazil, Mexico, Argentina</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Facilities -->
<section class="section about-section">
    <div class="container">
        <div class="section-title">
            <h2>Our Facilities</h2>
            <p>State-of-the-art infrastructure for quality processing and storage</p>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="about-image">
                    <img src="{{ asset('assets/images/warehouse.jpg') }}" alt="Warehouse" class="img-fluid rounded mb-3">
                    <h4 class="text-center">Modern Warehousing</h4>
                    <p class="text-center text-muted">Climate-controlled storage facilities ensuring product quality preservation</p>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="about-image">
                    <img src="{{ asset('assets/images/processing.jpg') }}" alt="Processing Unit" class="img-fluid rounded mb-3">
                    <h4 class="text-center">Processing Units</h4>
                    <p class="text-center text-muted">Advanced processing equipment with strict quality control measures</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="section about-section" style="background-color: var(--light-gray);">
    <div class="container">
        <div class="section-title">
            <h2>Our Team</h2>
            <p>Experienced professionals dedicated to your success</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="team-image mb-3">
                        <img src="{{ asset('assets/images/team-ceo.jpg') }}" alt="CEO" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                    <h5>John Anderson</h5>
                    <p class="text-muted">Chief Executive Officer</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="team-image mb-3">
                        <img src="{{ asset('assets/images/team-coo.jpg') }}" alt="COO" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                    <h5>Sarah Mitchell</h5>
                    <p class="text-muted">Chief Operations Officer</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="team-image mb-3">
                        <img src="{{ asset('assets/images/team-sales.jpg') }}" alt="Sales Director" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                    <h5>David Chen</h5>
                    <p class="text-muted">Sales Director</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="team-image mb-3">
                        <img src="{{ asset('assets/images/team-qa.jpg') }}" alt="Quality Manager" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                    <h5>Emily Rodriguez</h5>
                    <p class="text-muted">Quality Assurance Manager</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline -->
<section class="section about-section">
    <div class="container">
        <div class="section-title">
            <h2>Our Journey</h2>
            <p>Milestones in our growth story</p>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="timeline">
                    <div class="timeline-item mb-5">
                        <div class="timeline-year">2008</div>
                        <div class="timeline-content">
                            <h5>Company Founded</h5>
                            <p class="text-muted">JenoxGlobal established with a vision to become a leading export company.</p>
                        </div>
                    </div>
                    <div class="timeline-item mb-5">
                        <div class="timeline-year">2012</div>
                        <div class="timeline-content">
                            <h5>First International Export</h5>
                            <p class="text-muted">Successfully completed first export shipment to Middle East market.</p>
                        </div>
                    </div>
                    <div class="timeline-item mb-5">
                        <div class="timeline-year">2015</div>
                        <div class="timeline-content">
                            <h5>ISO Certification</h5>
                            <p class="text-muted">Achieved ISO 9001 certification for quality management systems.</p>
                        </div>
                    </div>
                    <div class="timeline-item mb-5">
                        <div class="timeline-year">2018</div>
                        <div class="timeline-content">
                            <h5>Global Expansion</h5>
                            <p class="text-muted">Expanded operations to 25+ countries across Asia, Europe, and Africa.</p>
                        </div>
                    </div>
                    <div class="timeline-item mb-5">
                        <div class="timeline-year">2021</div>
                        <div class="timeline-content">
                            <h5>Lead Products Division</h5>
                            <p class="text-muted">Launched dedicated division for lead products export.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year">2024</div>
                        <div class="timeline-content">
                            <h5>50+ Countries Served</h5>
                            <p class="text-muted">Reached milestone of serving clients in over 50 countries worldwide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="contact-cta">
    <div class="container">
        <h2 class="cta-title">Ready to Partner With Us?</h2>
        <p class="lead">Join our growing network of satisfied global clients</p>
        <div class="cta-buttons">
            <a href="{{ url('contact') }}" class="btn btn-cta-white">
                <i class="bi bi-file-earmark-text"></i> Request Quote
            </a>
            <a href="{{ url('products') }}" class="btn btn-cta-outline">
                <i class="bi bi-box-seam"></i> View Products
            </a>
        </div>
    </div>
</section>
@endsection
