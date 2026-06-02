@extends('frontend.layouts.app')

@section('title', 'Products - JenoxGlobal')

@section('content')
<!-- Products Banner -->
<section class="page-banner animate-on-scroll">
    <div class="container">
        <h1>Our Products</h1>
        <p>Browse our complete range of premium export-quality products</p>
    </div>
</section>

<!-- Products Section -->
<section class="section animate-on-scroll">
    <div class="container">
        <!-- Filters -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Filter Products</h5>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-3">
                                <label class="form-label">Search</label>
                                <input type="text" class="form-control" placeholder="Search products..." id="searchFilter">
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3">
                                <label class="form-label">Category</label>
                                <select class="form-select" id="categoryFilter">
                                    <option value="">All Categories</option>
                                    <option value="rice">Rice</option>
                                    <option value="lead">Lead</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3">
                                <label class="form-label">Country</label>
                                <select class="form-select" id="countryFilter">
                                    <option value="">All Countries</option>
                                    <option value="AE">UAE</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="IN">India</option>
                                    <option value="US">USA</option>
                                    <option value="DE">Germany</option>
                                    <option value="GB">UK</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3">
                                <label class="form-label">HS Code</label>
                                <select class="form-select" id="hsCodeFilter">
                                    <option value="">All HS Codes</option>
                                    <option value="1006.30">1006.30 (Rice)</option>
                                    <option value="1006.20">1006.20 (Rice)</option>
                                    <option value="7801.10">7801.10 (Lead)</option>
                                    <option value="7801.91">7801.91 (Lead)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-3">
                                <label class="form-label">Tags</label>
                                <select class="form-select" id="tagFilter">
                                    <option value="">All Tags</option>
                                    <option value="basmati">Basmati</option>
                                    <option value="non-basmati">Non-Basmati</option>
                                    <option value="parboiled">Parboiled</option>
                                    <option value="ingots">Ingots</option>
                                    <option value="ore">Ore</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-end">
                                <button class="btn btn-primary w-100" onclick="filterProducts()">
                                    <i class="bi bi-funnel"></i> Apply Filters
                                </button>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-end">
                                <button class="btn btn-outline w-100" onclick="resetFilters()">
                                    <i class="bi bi-x-circle"></i> Reset
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="row" id="productsGrid">
            <!-- Rice Products -->
            <div class="col-lg-4 col-md-6 mb-4 product-card" data-category="rice" data-hscode="1006.30" data-tags="basmati">
                <div class="category-card h-100">
                    <div class="category-image" style="background-image: url('{{ asset('assets/images/rice-600.jpg') }}'); height: 250px;">
                    </div>
                    <div class="category-content">
                        <span class="badge bg-primary-custom mb-2">Rice</span>
                        <h4 class="category-title">1121 Basmati Rice</h4>
                        <p class="category-description">Premium extra-long grain aromatic basmati rice with excellent cooking properties.</p>
                        <div class="mb-2">
                            <small class="text-muted"><strong>HS Code:</strong> 1006.30</small>
                        </div>
                        <div class="mb-2">
                            <span class="badge bg-secondary-custom">Basmati</span>
                            <span class="badge bg-secondary-custom">Premium</span>
                        </div>
                        <a href="{{ url('product/1121-basmati-rice') }}" class="btn btn-primary mt-2">
                            <i class="bi bi-eye"></i> View Details
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 product-card" data-category="rice" data-hscode="1006.30" data-tags="basmati">
                <div class="category-card h-100">
                    <div class="category-image" style="background-image: url('{{ asset('assets/images/rice-600.jpg') }}'); height: 250px;">
                    </div>
                    <div class="category-content">
                        <span class="badge bg-primary-custom mb-2">Rice</span>
                        <h4 class="category-title">Pusa Basmati Rice</h4>
                        <p class="category-description">Extra long grain basmati rice known for its aroma and taste.</p>
                        <div class="mb-2">
                            <small class="text-muted"><strong>HS Code:</strong> 1006.30</small>
                        </div>
                        <div class="mb-2">
                            <span class="badge bg-secondary-custom">Basmati</span>
                            <span class="badge bg-secondary-custom">Aromatic</span>
                        </div>
                        <a href="{{ url('product/pusa-basmati-rice') }}" class="btn btn-primary mt-2">
                            <i class="bi bi-eye"></i> View Details
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 product-card" data-category="rice" data-hscode="1006.20" data-tags="non-basmati">
                <div class="category-card h-100">
                    <div class="category-image" style="background-image: url('{{ asset('assets/images/rice-600.jpg') }}'); height: 250px;">
                    </div>
                    <div class="category-content">
                        <span class="badge bg-primary-custom mb-2">Rice</span>
                        <h4 class="category-title">Long Grain Non-Basmati Rice</h4>
                        <p class="category-description">Premium quality long grain rice ideal for daily consumption.</p>
                        <div class="mb-2">
                            <small class="text-muted"><strong>HS Code:</strong> 1006.20</small>
                        </div>
                        <div class="mb-2">
                            <span class="badge bg-secondary-custom">Non-Basmati</span>
                            <span class="badge bg-secondary-custom">Long Grain</span>
                        </div>
                        <a href="{{ url('product/long-grain-rice') }}" class="btn btn-primary mt-2">
                            <i class="bi bi-eye"></i> View Details
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 product-card" data-category="rice" data-hscode="1006.20" data-tags="parboiled">
                <div class="category-card h-100">
                    <div class="category-image" style="background-image: url('{{ asset('assets/images/rice-600.jpg') }}'); height: 250px;">
                    </div>
                    <div class="category-content">
                        <span class="badge bg-primary-custom mb-2">Rice</span>
                        <h4 class="category-title">Parboiled Rice</h4>
                        <p class="category-description">Nutritious parboiled rice with enhanced nutritional value.</p>
                        <div class="mb-2">
                            <small class="text-muted"><strong>HS Code:</strong> 1006.20</small>
                        </div>
                        <div class="mb-2">
                            <span class="badge bg-secondary-custom">Parboiled</span>
                            <span class="badge bg-secondary-custom">Nutritious</span>
                        </div>
                        <a href="{{ url('product/parboiled-rice') }}" class="btn btn-primary mt-2">
                            <i class="bi bi-eye"></i> View Details
                        </a>
                    </div>
                </div>
            </div>

            <!-- Lead Products -->
            <div class="col-lg-4 col-md-6 mb-4 product-card" data-category="lead" data-hscode="7801.10" data-tags="ingots">
                <div class="category-card h-100">
                    <div class="category-image" style="background-image: url('{{ asset('assets/images/lead-600.jpg') }}'); height: 250px;">
                    </div>
                    <div class="category-content">
                        <span class="badge bg-warning text-dark mb-2">Lead</span>
                        <h4 class="category-title">Lead Ingots 99.97%</h4>
                        <p class="category-description">High purity lead ingots meeting international quality standards.</p>
                        <div class="mb-2">
                            <small class="text-muted"><strong>HS Code:</strong> 7801.10</small>
                        </div>
                        <div class="mb-2">
                            <span class="badge bg-secondary-custom">Ingots</span>
                            <span class="badge bg-secondary-custom">99.97% Pure</span>
                        </div>
                        <a href="{{ url('product/lead-ingots') }}" class="btn btn-primary mt-2">
                            <i class="bi bi-eye"></i> View Details
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 product-card" data-category="lead" data-hscode="7801.91" data-tags="ore">
                <div class="category-card h-100">
                    <div class="category-image" style="background-image: url('{{ asset('assets/images/lead-600.jpg') }}'); height: 250px;">
                    </div>
                    <div class="category-content">
                        <span class="badge bg-warning text-dark mb-2">Lead</span>
                        <h4 class="category-title">Lead Ore (Galena)</h4>
                        <p class="category-description">Premium quality lead ore with high lead content for industrial use.</p>
                        <div class="mb-2">
                            <small class="text-muted"><strong>HS Code:</strong> 7801.91</small>
                        </div>
                        <div class="mb-2">
                            <span class="badge bg-secondary-custom">Ore</span>
                            <span class="badge bg-secondary-custom">Galena</span>
                        </div>
                        <a href="{{ url('product/lead-ore') }}" class="btn btn-primary mt-2">
                            <i class="bi bi-eye"></i> View Details
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 product-card" data-category="lead" data-hscode="7801.10" data-tags="ingots">
                <div class="category-card h-100">
                    <div class="category-image" style="background-image: url('{{ asset('assets/images/lead-600.jpg') }}'); height: 250px;">
                    </div>
                    <div class="category-content">
                        <span class="badge bg-warning text-dark mb-2">Lead</span>
                        <h4 class="category-title">Lead Alloys</h4>
                        <p class="category-description">Custom lead alloys for specific industrial applications.</p>
                        <div class="mb-2">
                            <small class="text-muted"><strong>HS Code:</strong> 7801.10</small>
                        </div>
                        <div class="mb-2">
                            <span class="badge bg-secondary-custom">Alloys</span>
                            <span class="badge bg-secondary-custom">Custom</span>
                        </div>
                        <a href="{{ url('product/lead-alloys') }}" class="btn btn-primary mt-2">
                            <i class="bi bi-eye"></i> View Details
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 product-card" data-category="lead" data-hscode="7801.99" data-tags="scrap">
                <div class="category-card h-100">
                    <div class="category-image" style="background-image: url('{{ asset('assets/images/lead-600.jpg') }}'); height: 250px;">
                    </div>
                    <div class="category-content">
                        <span class="badge bg-warning text-dark mb-2">Lead</span>
                        <h4 class="category-title">Lead Scrap</h4>
                        <p class="category-description">Recycled lead scrap for recycling and industrial applications.</p>
                        <div class="mb-2">
                            <small class="text-muted"><strong>HS Code:</strong> 7801.99</small>
                        </div>
                        <div class="mb-2">
                            <span class="badge bg-secondary-custom">Scrap</span>
                            <span class="badge bg-secondary-custom">Recycled</span>
                        </div>
                        <a href="{{ url('product/lead-scrap') }}" class="btn btn-primary mt-2">
                            <i class="bi bi-eye"></i> View Details
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="row mt-4">
            <div class="col-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="contact-cta">
    <div class="container">
        <h2 class="cta-title">Can't Find What You're Looking For?</h2>
        <p class="lead">Contact us for custom product requirements and bulk orders</p>
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

<script>
function filterProducts() {
    const category = document.getElementById('categoryFilter').value;
    const country = document.getElementById('countryFilter').value;
    const hsCode = document.getElementById('hsCodeFilter').value;
    const tag = document.getElementById('tagFilter').value;
    const search = document.getElementById('searchFilter').value.toLowerCase();

    const products = document.querySelectorAll('.product-card');

    products.forEach(product => {
        const productCategory = product.getAttribute('data-category');
        const productHsCode = product.getAttribute('data-hscode');
        const productTags = product.getAttribute('data-tags');
        const productName = product.querySelector('.category-title').textContent.toLowerCase();
        const productDesc = product.querySelector('.category-description').textContent.toLowerCase();

        let show = true;

        if (category && productCategory !== category) show = false;
        if (hsCode && productHsCode !== hsCode) show = false;
        if (tag && !productTags.includes(tag)) show = false;
        if (search && !productName.includes(search) && !productDesc.includes(search)) show = false;

        product.style.display = show ? 'block' : 'none';
    });
}

function resetFilters() {
    document.getElementById('categoryFilter').value = '';
    document.getElementById('countryFilter').value = '';
    document.getElementById('hsCodeFilter').value = '';
    document.getElementById('tagFilter').value = '';
    document.getElementById('searchFilter').value = '';

    const products = document.querySelectorAll('.product-card');
    products.forEach(product => {
        product.style.display = 'block';
    });
}
</script>
@endsection
