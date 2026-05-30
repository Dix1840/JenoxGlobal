@extends('frontend.layouts.app')

@section('title', 'Categories - JenoxGlobal')

@section('content')
<!-- Category Banner -->
<section class="page-banner animate-on-scroll">
    <div class="container">
        <h1>Product Categories</h1>
        <p>Explore our premium range of rice and lead products</p>
    </div>
</section>

<!-- Categories Section -->
<section class="section animate-on-scroll">
    <div class="container">
        <div class="section-title">
            <h2>Our Product Categories</h2>
            <p>Browse through our extensive range of export-quality products</p>
        </div>
        <div class="row">
            <!-- Rice Category -->
            <div class="col-lg-6 mb-4">
                <div class="category-card">
                    <div class="category-image" style="background-image: url('https://images.unsplash.com/photo-1586201375761-83865001e31c?w=800'); height: 300px;">
                    </div>
                    <div class="category-content">
                        <h3 class="category-title">Rice Export</h3>
                        <p class="category-description">Premium quality Basmati and Non-Basmati rice varieties sourced from the finest farms, processed with strict quality control measures for international markets.</p>
                        
                        <div class="mb-3">
                            <strong>Available Varieties:</strong>
                            <ul class="list-unstyled mt-2">
                                <li><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> Basmati Rice (1121, Pusa, etc.)</li>
                                <li><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> Non-Basmati Rice (Long Grain, Medium Grain)</li>
                                <li><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> Parboiled Rice</li>
                                <li><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> Brown Rice</li>
                            </ul>
                        </div>
                        
                        <div class="mb-3">
                            <strong>Export Markets:</strong>
                            <p class="text-muted">Middle East, Europe, Africa, Americas, Asia</p>
                        </div>
                        
                        <div class="mb-3">
                            <strong>Product Count:</strong>
                            <span class="badge bg-primary-custom">25+ Products</span>
                        </div>
                        
                        <div class="mb-3">
                            <strong>HS Code:</strong>
                            <span class="text-muted">1006.30, 1006.20</span>
                        </div>
                        
                        <div class="d-flex gap-2 flex-wrap">
                            <a href="{{ url('products?category=rice') }}" class="btn btn-primary">
                                <i class="bi bi-box-seam"></i> View Products
                            </a>
                            <a href="#" class="btn btn-outline">
                                <i class="bi bi-download"></i> Download Catalog
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Lead Category -->
            <div class="col-lg-6 mb-4">
                <div class="category-card">
                    <div class="category-image" style="background-image: url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800'); height: 300px;">
                    </div>
                    <div class="category-content">
                        <h3 class="category-title">Lead Export</h3>
                        <p class="category-description">High-grade lead products including lead ore, lead ingots, and lead alloys for industrial applications worldwide with certified quality standards.</p>
                        
                        <div class="mb-3">
                            <strong>Available Products:</strong>
                            <ul class="list-unstyled mt-2">
                                <li><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> Lead Ore (Galena)</li>
                                <li><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> Lead Ingots (99.97% Pure)</li>
                                <li><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> Lead Alloys</li>
                                <li><i class="bi bi-check-circle-fill text-secondary-custom me-2"></i> Lead Scrap</li>
                            </ul>
                        </div>
                        
                        <div class="mb-3">
                            <strong>Export Markets:</strong>
                            <p class="text-muted">Asia, Europe, Middle East, Africa</p>
                        </div>
                        
                        <div class="mb-3">
                            <strong>Product Count:</strong>
                            <span class="badge bg-primary-custom">15+ Products</span>
                        </div>
                        
                        <div class="mb-3">
                            <strong>HS Code:</strong>
                            <span class="text-muted">7801.10, 7801.91</span>
                        </div>
                        
                        <div class="d-flex gap-2 flex-wrap">
                            <a href="{{ url('products?category=lead') }}" class="btn btn-primary">
                                <i class="bi bi-box-seam"></i> View Products
                            </a>
                            <a href="#" class="btn btn-outline">
                                <i class="bi bi-download"></i> Download Catalog
                            </a>
                        </div>
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
            <h2>Category Specifications</h2>
            <p>Technical specifications for our product categories</p>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <h4 class="mb-3">Rice Specifications</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Parameter</th>
                                <th>Specification</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Moisture</td>
                                <td>Max 13%</td>
                            </tr>
                            <tr>
                                <td>Broken Grains</td>
                                <td>Max 5%</td>
                            </tr>
                            <tr>
                                <td>Foreign Matter</td>
                                <td>Max 0.5%</td>
                            </tr>
                            <tr>
                                <td>Admixture</td>
                                <td>Max 1%</td>
                            </tr>
                            <tr>
                                <td>Length</td>
                                <td>6.8mm - 7.2mm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <h4 class="mb-3">Lead Specifications</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Parameter</th>
                                <th>Specification</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Purity</td>
                                <td>99.97% Min</td>
                            </tr>
                            <tr>
                                <td>Lead Content</td>
                                <td>99.97% Min</td>
                            </tr>
                            <tr>
                                <td>Impurities</td>
                                <td>Max 0.03%</td>
                            </tr>
                            <tr>
                                <td>Weight per Ingot</td>
                                <td>25kg - 50kg</td>
                            </tr>
                            <tr>
                                <td>Packing</td>
                                <td>Wooden Pallets</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products Preview -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Featured Products</h2>
            <p>Top products from each category</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="category-card">
                    <div class="category-image" style="background-image: url('https://images.unsplash.com/photo-1586201375761-83865001e31c?w=400'); height: 200px;">
                    </div>
                    <div class="category-content" style="padding: 20px;">
                        <h5 class="category-title" style="font-size: 1.1rem;">1121 Basmati Rice</h5>
                        <p class="text-muted small">Premium long-grain aromatic rice</p>
                        <a href="{{ url('product/1121-basmati-rice') }}" class="btn btn-sm btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="category-card">
                    <div class="category-image" style="background-image: url('https://images.unsplash.com/photo-1586201375761-83865001e31c?w=400'); height: 200px;">
                    </div>
                    <div class="category-content" style="padding: 20px;">
                        <h5 class="category-title" style="font-size: 1.1rem;">Pusa Basmati Rice</h5>
                        <p class="text-muted small">Extra long grain basmati</p>
                        <a href="{{ url('product/pusa-basmati-rice') }}" class="btn btn-sm btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="category-card">
                    <div class="category-image" style="background-image: url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400'); height: 200px;">
                    </div>
                    <div class="category-content" style="padding: 20px;">
                        <h5 class="category-title" style="font-size: 1.1rem;">Lead Ingots 99.97%</h5>
                        <p class="text-muted small">High purity lead ingots</p>
                        <a href="{{ url('product/lead-ingots') }}" class="btn btn-sm btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="category-card">
                    <div class="category-image" style="background-image: url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400'); height: 200px;">
                    </div>
                    <div class="category-content" style="padding: 20px;">
                        <h5 class="category-title" style="font-size: 1.1rem;">Lead Ore</h5>
                        <p class="text-muted small">Premium galena ore</p>
                        <a href="{{ url('product/lead-ore') }}" class="btn btn-sm btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="contact-cta">
    <div class="container">
        <h2 class="cta-title">Need Help Choosing?</h2>
        <p class="lead">Our experts can help you find the right products for your requirements</p>
        <div class="cta-buttons">
            <a href="{{ url('contact') }}" class="btn btn-cta-white">
                <i class="bi bi-file-earmark-text"></i> Request Quote
            </a>
            <a href="{{ url('contact') }}" class="btn btn-cta-outline">
                <i class="bi bi-telephone"></i> Contact Us
            </a>
        </div>
    </div>
</section>
@endsection
