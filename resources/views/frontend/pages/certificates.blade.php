@extends('frontend.layouts.app')

@section('title', 'Certificates - JenoxGlobal')

@section('content')
<!-- Certificates Banner -->
<section class="page-banner animate-on-scroll">
    <div class="container">
        <h1>Our Certifications</h1>
        <p>Internationally recognized certifications ensuring quality and compliance</p>
    </div>
</section>

<!-- Certificates Section -->
<section class="section animate-on-scroll">
    <div class="container">
        <!-- Search and Filter -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Search Certificates</label>
                                <input type="text" class="form-control" placeholder="Search by certificate name..." id="certificateSearch">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Filter By Type</label>
                                <select class="form-select" id="certificateTypeFilter">
                                    <option value="">All Types</option>
                                    <option value="quality">Quality Management</option>
                                    <option value="food-safety">Food Safety</option>
                                    <option value="export">Export License</option>
                                    <option value="inspection">Inspection & Testing</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Certificates Grid -->
        <div class="row" id="certificatesGrid">
            <div class="col-lg-4 col-md-6 mb-4 certificate-card" data-type="quality">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="certificate-icon mb-3">
                            <i class="bi bi-award"></i>
                        </div>
                        <h4 class="certificate-name">ISO 9001:2015</h4>
                        <p class="text-muted mb-3">Quality Management System</p>
                        <div class="mb-3">
                            <small class="d-block"><strong>Issue Date:</strong> January 15, 2020</small>
                            <small class="d-block"><strong>Valid Till:</strong> January 14, 2023</small>
                        </div>
                        <p class="text-muted small mb-3">ISO 9001 certification for quality management systems ensuring consistent quality in products and services.</p>
                        <a href="#" class="btn btn-sm btn-outline">
                            <i class="bi bi-download"></i> Download PDF
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 certificate-card" data-type="food-safety">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="certificate-icon mb-3">
                            <i class="bi bi-award"></i>
                        </div>
                        <h4 class="certificate-name">ISO 22000:2018</h4>
                        <p class="text-muted mb-3">Food Safety Management</p>
                        <div class="mb-3">
                            <small class="d-block"><strong>Issue Date:</strong> March 10, 2021</small>
                            <small class="d-block"><strong>Valid Till:</strong> March 9, 2024</small>
                        </div>
                        <p class="text-muted small mb-3">ISO 22000 certification for food safety management systems ensuring safe food products.</p>
                        <a href="#" class="btn btn-sm btn-outline">
                            <i class="bi bi-download"></i> Download PDF
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 certificate-card" data-type="food-safety">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="certificate-icon mb-3">
                            <i class="bi bi-award"></i>
                        </div>
                        <h4 class="certificate-name">FSSAI License</h4>
                        <p class="text-muted mb-3">Food Safety Standards Authority</p>
                        <div class="mb-3">
                            <small class="d-block"><strong>Issue Date:</strong> June 5, 2019</small>
                            <small class="d-block"><strong>Valid Till:</strong> June 4, 2024</small>
                        </div>
                        <p class="text-muted small mb-3">FSSAI license ensuring compliance with food safety regulations and standards.</p>
                        <a href="#" class="btn btn-sm btn-outline">
                            <i class="bi bi-download"></i> Download PDF
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 certificate-card" data-type="export">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="certificate-icon mb-3">
                            <i class="bi bi-award"></i>
                        </div>
                        <h4 class="certificate-name">APEDA Registration</h4>
                        <p class="text-muted mb-3">Agricultural Export</p>
                        <div class="mb-3">
                            <small class="d-block"><strong>Issue Date:</strong> February 20, 2018</small>
                            <small class="d-block"><strong>Valid Till:</strong> February 19, 2025</small>
                        </div>
                        <p class="text-muted small mb-3">APEDA registration for export of agricultural products from India.</p>
                        <a href="#" class="btn btn-sm btn-outline">
                            <i class="bi bi-download"></i> Download PDF
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 certificate-card" data-type="export">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="certificate-icon mb-3">
                            <i class="bi bi-award"></i>
                        </div>
                        <h4 class="certificate-name">Export License</h4>
                        <p class="text-muted mb-3">Government Export Authorization</p>
                        <div class="mb-3">
                            <small class="d-block"><strong>Issue Date:</strong> April 1, 2017</small>
                            <small class="d-block"><strong>Valid Till:</strong> March 31, 2027</small>
                        </div>
                        <p class="text-muted small mb-3">Government issued export license for international trade operations.</p>
                        <a href="#" class="btn btn-sm btn-outline">
                            <i class="bi bi-download"></i> Download PDF
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 certificate-card" data-type="inspection">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="certificate-icon mb-3">
                            <i class="bi bi-award"></i>
                        </div>
                        <h4 class="certificate-name">SGS Certification</h4>
                        <p class="text-muted mb-3">Inspection & Testing</p>
                        <div class="mb-3">
                            <small class="d-block"><strong>Issue Date:</strong> August 15, 2022</small>
                            <small class="d-block"><strong>Valid Till:</strong> August 14, 2023</small>
                        </div>
                        <p class="text-muted small mb-3">SGS certification for product quality inspection and testing services.</p>
                        <a href="#" class="btn btn-sm btn-outline">
                            <i class="bi bi-download"></i> Download PDF
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 certificate-card" data-type="inspection">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="certificate-icon mb-3">
                            <i class="bi bi-award"></i>
                        </div>
                        <h4 class="certificate-name">Intertek Certification</h4>
                        <p class="text-muted mb-3">Quality Assurance</p>
                        <div class="mb-3">
                            <small class="d-block"><strong>Issue Date:</strong> September 1, 2022</small>
                            <small class="d-block"><strong>Valid Till:</strong> August 31, 2023</small>
                        </div>
                        <p class="text-muted small mb-3">Intertek certification for quality assurance and product testing.</p>
                        <a href="#" class="btn btn-sm btn-outline">
                            <i class="bi bi-download"></i> Download PDF
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 certificate-card" data-type="quality">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="certificate-icon mb-3">
                            <i class="bi bi-award"></i>
                        </div>
                        <h4 class="certificate-name">HACCP Certification</h4>
                        <p class="text-muted mb-3">Hazard Analysis Critical Control Point</p>
                        <div class="mb-3">
                            <small class="d-block"><strong>Issue Date:</strong> July 10, 2021</small>
                            <small class="d-block"><strong>Valid Till:</strong> July 9, 2024</small>
                        </div>
                        <p class="text-muted small mb-3">HACCP certification for food safety management and hazard control.</p>
                        <a href="#" class="btn btn-sm btn-outline">
                            <i class="bi bi-download"></i> Download PDF
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 certificate-card" data-type="export">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="certificate-icon mb-3">
                            <i class="bi bi-award"></i>
                        </div>
                        <h4 class="certificate-name">IEC Code</h4>
                        <p class="text-muted mb-3">Import Export Code</p>
                        <div class="mb-3">
                            <small class="d-block"><strong>Issue Date:</strong> January 1, 2017</small>
                            <small class="d-block"><strong>Valid Till:</strong> Permanent</small>
                        </div>
                        <p class="text-muted small mb-3">IEC code issued by DGFT for import-export operations in India.</p>
                        <a href="#" class="btn btn-sm btn-outline">
                            <i class="bi bi-download"></i> Download PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Certifications Matter -->
<section class="section" style="background-color: var(--light-gray);">
    <div class="container">
        <div class="section-title">
            <h2>Why Our Certifications Matter</h2>
            <p>How our certifications benefit your business</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h4 class="why-title">Quality Assurance</h4>
                    <p class="why-description">Our certifications ensure consistent product quality meeting international standards.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="bi bi-file-earmark-check"></i>
                    </div>
                    <h4 class="why-title">Regulatory Compliance</h4>
                    <p class="why-description">Full compliance with international trade regulations and food safety standards.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="bi bi-globe"></i>
                    </div>
                    <h4 class="why-title">Global Acceptance</h4>
                    <p class="why-description">Internationally recognized certifications accepted in all major markets worldwide.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="bi bi-trust"></i>
                    </div>
                    <h4 class="why-title">Customer Trust</h4>
                    <p class="why-description">Build trust with customers through verified quality and safety certifications.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="bi bi-box-seam"></i>
                    </div>
                    <h4 class="why-title">Smooth Customs Clearance</h4>
                    <p class="why-description">Certified products ensure smoother customs clearance in destination countries.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="bi bi-graph-up"></i>
                    </div>
                    <h4 class="why-title">Market Access</h4>
                    <p class="why-description">Certifications provide access to regulated markets with strict import requirements.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="contact-cta">
    <div class="container">
        <h2 class="cta-title">Need More Information?</h2>
        <p class="lead">Contact us for detailed certificate information and verification</p>
        <div class="cta-buttons">
            <a href="{{ url('contact') }}" class="btn btn-cta-white">
                <i class="bi bi-envelope"></i> Contact Us
            </a>
            <a href="{{ url('contact') }}" class="btn btn-cta-outline">
                <i class="bi bi-file-earmark-text"></i> Request Quote
            </a>
        </div>
    </div>
</section>

<script>
document.getElementById('certificateSearch').addEventListener('input', function() {
    filterCertificates();
});

document.getElementById('certificateTypeFilter').addEventListener('change', function() {
    filterCertificates();
});

function filterCertificates() {
    const search = document.getElementById('certificateSearch').value.toLowerCase();
    const type = document.getElementById('certificateTypeFilter').value;
    
    const certificates = document.querySelectorAll('.certificate-card');
    
    certificates.forEach(certificate => {
        const certificateType = certificate.getAttribute('data-type');
        const certificateName = certificate.querySelector('.certificate-name').textContent.toLowerCase();
        const certificateDesc = certificate.querySelector('.text-muted').textContent.toLowerCase();
        
        let show = true;
        
        if (type && certificateType !== type) show = false;
        if (search && !certificateName.includes(search) && !certificateDesc.includes(search)) show = false;
        
        certificate.style.display = show ? 'block' : 'none';
    });
}
</script>
@endsection
