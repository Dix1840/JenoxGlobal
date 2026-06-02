@extends('frontend.layouts.app')

@section('title', 'Contact Us - JenoxGlobal')

@section('content')
<!-- Contact Banner -->
<section class="contact-banner animate-on-scroll">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Get in touch with our team for inquiries and quotations</p>
    </div>
</section>

<!-- Contact Section -->
<section class="section contact-section animate-on-scroll">
    <div class="container">
        <div class="row">
            <!-- Contact Information -->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="contact-info-card">
                    <h3 class="mb-4">Contact Information</h3>
                    
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Company Name</h4>
                            <p>JenoxGlobal Export Company</p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Office Address</h4>
                            <p>Business Bay, Dubai, United Arab Emirates</p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Email Address</h4>
                            <p><a href="mailto:info@jenoxglobal.com">info@jenoxglobal.com</a></p>
                            <p><a href="mailto:sales@jenoxglobal.com">sales@jenoxglobal.com</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Phone Number</h4>
                            <p><a href="tel:+97145555555">+971 4 555 5555</a></p>
                            <p><a href="tel:+1234567890">+1 (234) 567-890</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>WhatsApp</h4>
                            <p><a href="https://wa.me/{{ config('company.whatsapp') }}">+971 4 555 5555</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-clock"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Business Hours</h4>
                            <p>Sunday - Thursday: 9:00 AM - 6:00 PM</p>
                            <p>Friday - Saturday: Closed</p>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <h5 class="mb-3">Follow Us</h5>
                        <div class="footer-social">
                            <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="social-link"><i class="bi bi-twitter-x"></i></a>
                            <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="social-link"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="contact-form-card">
                    <h3 class="mb-4">Send Us a Message</h3>
                    <p class="text-muted mb-4">Fill out the form below and our team will get back to you within 24 hours.</p>
                    
                    <form action="{{ url('contact/send') }}" method="POST" data-validate>
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="full_name" class="form-label">Full Name *</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" required placeholder="John Doe">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="company_name" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Your Company Ltd.">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="email" name="email" required placeholder="john@example.com">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone Number *</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required placeholder="+1 234 567 890">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="country" class="form-label">Country *</label>
                                <select class="form-select" id="country" name="country" required>
                                    <option value="">Select Country</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="IN">India</option>
                                    <option value="US">United States</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="DE">Germany</option>
                                    <option value="FR">France</option>
                                    <option value="CA">Canada</option>
                                    <option value="AU">Australia</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="EG">Egypt</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="BR">Brazil</option>
                                    <option value="OTHER">Other</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="product_interest" class="form-label">Product Interest *</label>
                                <select class="form-select" id="product_interest" name="product_interest" required>
                                    <option value="">Select Product</option>
                                    <option value="basmati-rice">Basmati Rice</option>
                                    <option value="non-basmati-rice">Non-Basmati Rice</option>
                                    <option value="lead-ore">Lead Ore</option>
                                    <option value="lead-ingots">Lead Ingots</option>
                                    <option value="lead-alloys">Lead Alloys</option>
                                    <option value="other">Other Products</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="quantity" class="form-label">Quantity Required *</label>
                                <input type="text" class="form-control" id="quantity" name="quantity" required placeholder="e.g., 50 Metric Tons">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="destination_port" class="form-label">Destination Port *</label>
                                <input type="text" class="form-control" id="destination_port" name="destination_port" required placeholder="e.g., Port of Jebel Ali">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="incoterm" class="form-label">Incoterm</label>
                                <select class="form-select" id="incoterm" name="incoterm">
                                    <option value="">Select Incoterm</option>
                                    <option value="FOB">FOB (Free on Board)</option>
                                    <option value="CIF">CIF (Cost, Insurance & Freight)</option>
                                    <option value="CFR">CFR (Cost & Freight)</option>
                                    <option value="EXW">EXW (Ex Works)</option>
                                    <option value="DAP">DAP (Delivered at Place)</option>
                                    <option value="DDP">DDP (Delivered Duty Paid)</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="hs_code" class="form-label">HS Code (if known)</label>
                                <input type="text" class="form-control" id="hs_code" name="hs_code" placeholder="e.g., 1006.30">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="message" class="form-label">Message *</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required placeholder="Please provide details about your requirements, specifications, and any other relevant information..."></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter">
                                <label class="form-check-label" for="newsletter">
                                    Subscribe to our newsletter for product updates and export news
                                </label>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-submit">
                            <i class="bi bi-send"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="section" style="padding-bottom: 0;">
    <div class="container">
        <div class="section-title">
            <h2>Find Us on Map</h2>
            <p>Visit our office in Dubai, UAE</p>
        </div>
    </div>
</section>

<section class="section" style="padding-top: 0;">
    <div class="container">
        <div class="map-container">
            <iframe 
                src="{{ config('company.google_maps_url') }}" 
                allowfullscreen="" 
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section faq">
    <div class="container">
        <div class="section-title">
            <h2>Common Questions</h2>
            <p>Quick answers about contacting us</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="contactFaqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#contactFaq1" aria-expanded="true">
                                How quickly will you respond to my inquiry?
                            </button>
                        </h2>
                        <div id="contactFaq1" class="accordion-collapse collapse show" data-bs-parent="#contactFaqAccordion">
                            <div class="accordion-body">
                                We typically respond to all inquiries within 24 hours during business days. For urgent matters, you can reach us by phone or WhatsApp for immediate assistance.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#contactFaq2" aria-expanded="false">
                                Can I request product samples?
                            </button>
                        </h2>
                        <div id="contactFaq2" class="accordion-collapse collapse" data-bs-parent="#contactFaqAccordion">
                            <div class="accordion-body">
                                Yes, we can provide product samples for qualified buyers. Please include your sample request in the message field, and our team will coordinate sample delivery to your location.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#contactFaq3" aria-expanded="false">
                                What information should I include in my inquiry?
                            </button>
                        </h2>
                        <div id="contactFaq3" class="accordion-collapse collapse" data-bs-parent="#contactFaqAccordion">
                            <div class="accordion-body">
                                Please include product type, quantity required, quality specifications, destination port, preferred incoterm, and any specific requirements. This helps us provide accurate quotations quickly.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#contactFaq4" aria-expanded="false">
                                Do you offer credit terms?
                            </button>
                        </h2>
                        <div id="contactFaq4" class="accordion-collapse collapse" data-bs-parent="#contactFaqAccordion">
                            <div class="accordion-body">
                                We offer flexible payment terms including Letter of Credit (LC), Telegraphic Transfer (TT), and Documentary Collection (DC) based on order value and client relationship. Details can be discussed during quotation.
                            </div>
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
        <h2 class="cta-title">Need Immediate Assistance?</h2>
        <p class="lead">Our team is ready to help you with your export requirements</p>
        <div class="cta-buttons">
            <a href="tel:+97145555555" class="btn btn-cta-white">
                <i class="bi bi-telephone"></i> Call Us Now
            </a>
            <a href="https://wa.me/{{ config('company.whatsapp') }}" class="btn btn-cta-outline">
                <i class="bi bi-whatsapp"></i> WhatsApp Us
            </a>
        </div>
    </div>
</section>
@endsection
