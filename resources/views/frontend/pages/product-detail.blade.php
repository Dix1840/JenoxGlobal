@extends('frontend.layouts.app')

@section('title', '1121 Basmati Rice - JenoxGlobal')

@section('content')
<!-- Product Detail Banner -->
<section class="page-banner animate-on-scroll">
    <div class="container">
        <h1>1121 Basmati Rice</h1>
        <p>Premium Extra Long Grain Aromatic Basmati Rice</p>
    </div>
</section>

<!-- Product Detail Section -->
<section class="section animate-on-scroll">
    <div class="container">
        <div class="row">
            <!-- Product Gallery -->
            <div class="col-lg-6 mb-4">
                <div class="product-gallery">
                    <div class="main-image mb-3">
                        <img src="https://images.unsplash.com/photo-1586201375761-83865001e31c?w=800" alt="1121 Basmati Rice" class="img-fluid rounded" id="mainProductImage">
                    </div>
                    <div class="thumbnail-images d-flex gap-2">
                        <img src="https://images.unsplash.com/photo-1586201375761-83865001e31c?w=200" alt="Thumbnail 1" class="img-fluid rounded thumbnail" style="width: 100px; height: 100px; object-fit: cover; cursor: pointer;" onclick="changeMainImage(this.src.replace('w=200', 'w=800'))">
                        <img src="https://images.unsplash.com/photo-1586201375761-83865001e31c?w=200" alt="Thumbnail 2" class="img-fluid rounded thumbnail" style="width: 100px; height: 100px; object-fit: cover; cursor: pointer;" onclick="changeMainImage(this.src.replace('w=200', 'w=800'))">
                        <img src="https://images.unsplash.com/photo-1586201375761-83865001e31c?w=200" alt="Thumbnail 3" class="img-fluid rounded thumbnail" style="width: 100px; height: 100px; object-fit: cover; cursor: pointer;" onclick="changeMainImage(this.src.replace('w=200', 'w=800'))">
                        <img src="https://images.unsplash.com/photo-1586201375761-83865001e31c?w=200" alt="Thumbnail 4" class="img-fluid rounded thumbnail" style="width: 100px; height: 100px; object-fit: cover; cursor: pointer;" onclick="changeMainImage(this.src.replace('w=200', 'w=800'))">
                    </div>
                </div>
            </div>
            
            <!-- Product Information -->
            <div class="col-lg-6 mb-4">
                <div class="product-info">
                    <span class="badge bg-primary-custom mb-2">Rice</span>
                    <h2 class="mb-3">1121 Basmati Rice</h2>
                    <p class="lead text-secondary-custom mb-3">Premium Extra Long Grain Aromatic Basmati Rice</p>
                    
                    <div class="mb-4">
                        <h5>Product Description</h5>
                        <p class="text-muted">1121 Basmati Rice is the world's longest grain basmati rice known for its exceptional aroma, taste, and cooking properties. Sourced from the finest farms in the Himalayan region, this premium rice variety is perfect for biryani, pilaf, and other gourmet dishes. Each grain elongates up to 2.5 times its original length upon cooking, ensuring a fluffy and separate texture.</p>
                    </div>
                    
                    <div class="mb-4">
                        <div class="row">
                            <div class="col-6">
                                <strong>Category:</strong>
                                <p class="text-muted">Rice Export</p>
                            </div>
                            <div class="col-6">
                                <strong>HS Code:</strong>
                                <p class="text-muted">1006.30</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <strong>Origin:</strong>
                                <p class="text-muted">India</p>
                            </div>
                            <div class="col-6">
                                <strong>Grade:</strong>
                                <p class="text-muted">Premium</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <h5>Tags</h5>
                        <div>
                            <span class="badge bg-secondary-custom me-1">Basmati</span>
                            <span class="badge bg-secondary-custom me-1">Extra Long Grain</span>
                            <span class="badge bg-secondary-custom me-1">Aromatic</span>
                            <span class="badge bg-secondary-custom me-1">Premium</span>
                        </div>
                    </div>
                    
                    <div class="d-flex gap-2 flex-wrap">
                        <a href="{{ url('contact') }}" class="btn btn-primary">
                            <i class="bi bi-file-earmark-text"></i> Request Quote
                        </a>
                        <a href="{{ url('contact') }}" class="btn btn-outline">
                            <i class="bi bi-envelope"></i> Contact Sales Team
                        </a>
                        <a href="#" class="btn btn-outline">
                            <i class="bi bi-download"></i> Download Catalog
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Specifications Table -->
<section class="section" style="background-color: var(--light-gray);">
    <div class="container">
        <div class="section-title">
            <h2>Product Specifications</h2>
            <p>Detailed technical specifications</p>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header bg-primary-custom text-white">
                        <h5 class="mb-0">Quality Specifications</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td><strong>Grain Length</strong></td>
                                    <td>6.8mm - 7.2mm</td>
                                </tr>
                                <tr>
                                    <td><strong>Moisture Content</strong></td>
                                    <td>Max 13%</td>
                                </tr>
                                <tr>
                                    <td><strong>Broken Grains</strong></td>
                                    <td>Max 5%</td>
                                </tr>
                                <tr>
                                    <td><strong>Foreign Matter</strong></td>
                                    <td>Max 0.5%</td>
                                </tr>
                                <tr>
                                    <td><strong>Admixture</strong></td>
                                    <td>Max 1%</td>
                                </tr>
                                <tr>
                                    <td><strong>Aging</strong></td>
                                    <td>1-2 Years</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-header bg-primary-custom text-white">
                        <h5 class="mb-0">Cooking Properties</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td><strong>Elongation Ratio</strong></td>
                                    <td>2.5x</td>
                                </tr>
                                <tr>
                                    <td><strong>Cooking Time</strong></td>
                                    <td>15-18 minutes</td>
                                </tr>
                                <tr>
                                    <td><strong>Aroma</strong></td>
                                    <td>Strong Natural Aroma</td>
                                </tr>
                                <tr>
                                    <td><strong>Taste</strong></td>
                                    <td>Delicate & Nutty</td>
                                </tr>
                                <tr>
                                    <td><strong>Texture After Cooking</strong></td>
                                    <td>Fluffy & Separate</td>
                                </tr>
                                <tr>
                                    <td><strong>Water Absorption</strong></td>
                                    <td>3.5x</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Packaging & Shipping -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Packaging & Shipping</h2>
            <p>Complete packaging and shipping information</p>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Packaging Details</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> <strong>Packaging Type:</strong> PP Bags / Jute Bags</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> <strong>Bag Weight:</strong> 25kg / 50kg</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> <strong>Pallet Size:</strong> 1 Ton / 1.5 Ton</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> <strong>Container Capacity:</strong> 20ft - 24 Tons, 40ft - 27 Tons</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> <strong>Private Labeling:</strong> Available</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> <strong>Branding:</strong> Custom Branding Available</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Minimum Order Quantity</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> <strong>MOQ:</strong> 20 Metric Tons</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> <strong>Sample Availability:</strong> Yes (Paid Samples)</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> <strong>Sample Cost:</strong> Refundable on Bulk Order</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> <strong>Delivery Time:</strong> 15-20 Days</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> <strong>Payment Terms:</strong> LC, TT, DC</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Country Availability -->
<section class="section" style="background-color: var(--light-gray);">
    <div class="container">
        <div class="section-title">
            <h2>Country Availability</h2>
            <p>Countries we export this product to</p>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="country-card">
                    <div class="country-flag">🇦🇪</div>
                    <div class="country-name">UAE</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="country-card">
                    <div class="country-flag">🇸🇦</div>
                    <div class="country-name">Saudi Arabia</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="country-card">
                    <div class="country-flag">🇮🇳</div>
                    <div class="country-name">India</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="country-card">
                    <div class="country-flag">🇺🇸</div>
                    <div class="country-name">USA</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="country-card">
                    <div class="country-flag">🇬🇧</div>
                    <div class="country-name">UK</div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="country-card">
                    <div class="country-flag">🇩🇪</div>
                    <div class="country-name">Germany</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Export Documents -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Export Documents</h2>
            <p>Documents provided with each shipment</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-file-earmark-text" style="font-size: 2rem; color: var(--secondary-color);"></i>
                        <h5 class="card-title mt-3">Certificate of Origin</h5>
                        <p class="card-text text-muted">Issued by Chamber of Commerce</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-file-earmark-text" style="font-size: 2rem; color: var(--secondary-color);"></i>
                        <h5 class="card-title mt-3">Phytosanitary Certificate</h5>
                        <p class="card-text text-muted">Plant Health Certificate</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-file-earmark-text" style="font-size: 2rem; color: var(--secondary-color);"></i>
                        <h5 class="card-title mt-3">Quality Certificate</h5>
                        <p class="card-text text-muted">SGS/Intertek Inspection Report</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-file-earmark-text" style="font-size: 2rem; color: var(--secondary-color);"></i>
                        <h5 class="card-title mt-3">Commercial Invoice</h5>
                        <p class="card-text text-muted">Detailed Invoice with Specifications</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Inquiry Form -->
<section class="section" style="background-color: var(--light-gray);">
    <div class="container">
        <div class="section-title">
            <h2>Product Inquiry</h2>
            <p>Send us your requirements for this product</p>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="contact-form-card">
                    <form action="{{ url('contact/send') }}" method="POST" data-validate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Full Name *</label>
                                <input type="text" class="form-control" name="full_name" required placeholder="John Doe">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email *</label>
                                <input type="email" class="form-control" name="email" required placeholder="john@example.com">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone *</label>
                                <input type="tel" class="form-control" name="phone" required placeholder="+1 234 567 890">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Country *</label>
                                <select class="form-select" name="country" required>
                                    <option value="">Select Country</option>
                                    <option value="AE">UAE</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="IN">India</option>
                                    <option value="US">USA</option>
                                    <option value="GB">UK</option>
                                    <option value="DE">Germany</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Quantity Required *</label>
                                <input type="text" class="form-control" name="quantity" required placeholder="e.g., 50 Metric Tons">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Destination Port *</label>
                                <input type="text" class="form-control" name="destination_port" required placeholder="e.g., Port of Jebel Ali">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product Interest</label>
                            <input type="text" class="form-control" value="1121 Basmati Rice" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Message *</label>
                            <textarea class="form-control" name="message" rows="4" required placeholder="Please provide your specific requirements..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-submit">
                            <i class="bi bi-send"></i> Send Inquiry
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Related Products</h2>
            <p>Similar products you might be interested in</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="category-card">
                    <div class="category-image" style="background-image: url('https://images.unsplash.com/photo-1586201375761-83865001e31c?w=400'); height: 200px;">
                    </div>
                    <div class="category-content" style="padding: 20px;">
                        <h5 class="category-title" style="font-size: 1.1rem;">Pusa Basmati Rice</h5>
                        <p class="text-muted small">Extra long grain aromatic rice</p>
                        <a href="{{ url('product/pusa-basmati-rice') }}" class="btn btn-sm btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="category-card">
                    <div class="category-image" style="background-image: url('https://images.unsplash.com/photo-1586201375761-83865001e31c?w=400'); height: 200px;">
                    </div>
                    <div class="category-content" style="padding: 20px;">
                        <h5 class="category-title" style="font-size: 1.1rem;">Long Grain Rice</h5>
                        <p class="text-muted small">Premium non-basmati rice</p>
                        <a href="{{ url('product/long-grain-rice') }}" class="btn btn-sm btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="category-card">
                    <div class="category-image" style="background-image: url('https://images.unsplash.com/photo-1586201375761-83865001e31c?w=400'); height: 200px;">
                    </div>
                    <div class="category-content" style="padding: 20px;">
                        <h5 class="category-title" style="font-size: 1.1rem;">Parboiled Rice</h5>
                        <p class="text-muted small">Nutritious parboiled rice</p>
                        <a href="{{ url('product/parboiled-rice') }}" class="btn btn-sm btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="category-card">
                    <div class="category-image" style="background-image: url('https://images.unsplash.com/photo-1586201375761-83865001e31c?w=400'); height: 200px;">
                    </div>
                    <div class="category-content" style="padding: 20px;">
                        <h5 class="category-title" style="font-size: 1.1rem;">Brown Rice</h5>
                        <p class="text-muted small">Healthy whole grain rice</p>
                        <a href="{{ url('product/brown-rice') }}" class="btn btn-sm btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="contact-cta">
    <div class="container">
        <h2 class="cta-title">Ready to Order?</h2>
        <p class="lead">Get competitive pricing for bulk orders</p>
        <div class="cta-buttons">
            <a href="{{ url('contact') }}" class="btn btn-cta-white">
                <i class="bi bi-file-earmark-text"></i> Request Quote
            </a>
            <a href="tel:+97145555555" class="btn btn-cta-outline">
                <i class="bi bi-telephone"></i> Call Us
            </a>
        </div>
    </div>
</section>

<script>
function changeMainImage(src) {
    document.getElementById('mainProductImage').src = src;
}
</script>
@endsection
