@extends('backend.layouts.app')
@section('title', 'Dashboard')

@section('breadcrumb')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center g-0">
            <div class="col-auto">
                <h5 class="page-header-title mb-0"><i class="fas fa-th-large me-2 text-primary"></i>Dashboard</h5>
            </div>
            <div class="col-auto ms-3">
                <ul class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
            <div class="col ms-auto text-end">
                <span class="live-clock-badge">
                    <i class="fas fa-clock me-1"></i>
                    <span id="live-time"></span>
                </span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

{{-- ===== Stat Cards ===== --}}
<div class="row g-3 mb-3">
    <div class="col-xl-3 col-sm-6">
        <div class="card stat-card h-100">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between mb-3">
                    <div class="sc-icon sc-blue"><i class="fas fa-box"></i></div>
                    <span class="sc-trend up"><i class="fas fa-arrow-up me-1"></i>12%</span>
                </div>
                <h3 class="sc-num">{{ $stats['total_products'] }}</h3>
                <p class="sc-label">Total Products</p>
                <div class="sc-bar"><div class="sc-fill sc-blue-fill" style="width:72%"></div></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card stat-card h-100">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between mb-3">
                    <div class="sc-icon sc-green"><i class="fas fa-users"></i></div>
                    <span class="sc-trend up"><i class="fas fa-arrow-up me-1"></i>8%</span>
                </div>
                <h3 class="sc-num">{{ $stats['total_customers'] }}</h3>
                <p class="sc-label">Total Customers</p>
                <div class="sc-bar"><div class="sc-fill sc-green-fill" style="width:58%"></div></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card stat-card h-100">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between mb-3">
                    <div class="sc-icon sc-orange"><i class="fas fa-envelope-open-text"></i></div>
                    <span class="sc-trend neutral"><i class="fas fa-minus me-1"></i>0%</span>
                </div>
                <h3 class="sc-num">{{ $stats['total_inquiries'] }}</h3>
                <p class="sc-label">Total Inquiries</p>
                <div class="sc-bar"><div class="sc-fill sc-orange-fill" style="width:35%"></div></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card stat-card h-100">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between mb-3">
                    <div class="sc-icon sc-purple"><i class="fas fa-tags"></i></div>
                    <span class="sc-trend up"><i class="fas fa-arrow-up me-1"></i>5%</span>
                </div>
                <h3 class="sc-num">{{ $stats['total_categories'] }}</h3>
                <p class="sc-label">Total Categories</p>
                <div class="sc-bar"><div class="sc-fill sc-purple-fill" style="width:45%"></div></div>
            </div>
        </div>
    </div>
</div>

{{-- ===== Overview + Mini Gradient Cards ===== --}}
<div class="row g-3 mb-3">
    <div class="col-xl-6">
        <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0"><i class="fas fa-chart-bar me-2 text-primary"></i>Quick Overview</h5>
                <span class="badge bg-light-success px-3 py-2 rounded-pill">Live</span>
            </div>
            <div class="card-body p-0">
                <div class="ov-grid-wrap">
                    <div class="ov-cell">
                        <div class="ov-cell-icon ov-blue"><i class="fas fa-box"></i></div>
                        <div class="ov-cell-num">{{ $stats['total_products'] }}</div>
                        <div class="ov-cell-label">Products</div>
                    </div>
                    <div class="ov-cell">
                        <div class="ov-cell-icon ov-purple"><i class="fas fa-tags"></i></div>
                        <div class="ov-cell-num">{{ $stats['total_categories'] }}</div>
                        <div class="ov-cell-label">Categories</div>
                    </div>
                    <div class="ov-cell">
                        <div class="ov-cell-icon ov-green"><i class="fas fa-users"></i></div>
                        <div class="ov-cell-num">{{ $stats['total_customers'] }}</div>
                        <div class="ov-cell-label">Customers</div>
                    </div>
                    <div class="ov-cell">
                        <div class="ov-cell-icon ov-orange"><i class="fas fa-envelope-open-text"></i></div>
                        <div class="ov-cell-num">{{ $stats['total_inquiries'] }}</div>
                        <div class="ov-cell-label">Inquiries</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="row g-3 h-100">
            <div class="col-6">
                <div class="card mg-card mg-blue h-100">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="mg-icon"><i class="fas fa-box"></i></div>
                        <div><div class="mg-num">{{ $stats['total_products'] }}</div><div class="mg-label">Products</div></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mg-card mg-purple h-100">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="mg-icon"><i class="fas fa-tags"></i></div>
                        <div><div class="mg-num">{{ $stats['total_categories'] }}</div><div class="mg-label">Categories</div></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mg-card mg-green h-100">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="mg-icon"><i class="fas fa-users"></i></div>
                        <div><div class="mg-num">{{ $stats['total_customers'] }}</div><div class="mg-label">Customers</div></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mg-card mg-orange h-100">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="mg-icon"><i class="fas fa-envelope-open-text"></i></div>
                        <div><div class="mg-num">{{ $stats['total_inquiries'] }}</div><div class="mg-label">Inquiries</div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ===== Recent Products + Activity ===== --}}
<div class="row g-3">
    <div class="col-xl-8">
        <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0"><i class="fas fa-list-ul me-2 text-primary"></i>Recent Products</h5>
                <a href="#" class="btn btn-sm btn-outline-primary rounded-pill px-3">View All</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recent_products as $product)
                            <tr>
                                <td class="text-muted fw-semibold">{{ $loop->iteration }}</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="product-thumb-icon"><i class="fas fa-image"></i></div>
                                        <span class="fw-semibold">{{ $product->name }}</span>
                                    </div>
                                </td>
                                <td><span class="badge bg-light-primary">{{ $product->category ?? 'N/A' }}</span></td>
                                <td><span class="badge bg-light-success">Active</span></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="tbl-btn tbl-edit" title="Edit"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="tbl-btn tbl-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center py-5">
                                    <div class="empty-tbl">
                                        <i class="fas fa-box-open"></i>
                                        <p>No products found</p>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0"><i class="fas fa-stream me-2 text-primary"></i>Recent Activity</h5>
                <span class="badge bg-light-success px-3 py-2 rounded-pill">Live</span>
            </div>
            <div class="card-body p-0">
                <ul class="activity-feed">
                    <li class="af-item">
                        <div class="af-dot af-blue"><i class="fas fa-bell"></i></div>
                        <div class="af-text">
                            <p>Admin panel initialized</p>
                            <span>Just Now</span>
                        </div>
                    </li>
                    <li class="af-item">
                        <div class="af-dot af-green"><i class="fas fa-check-circle"></i></div>
                        <div class="af-text">
                            <p>System is running smooth</p>
                            <span>1 hour ago</span>
                        </div>
                    </li>
                    <li class="af-item">
                        <div class="af-dot af-orange"><i class="fas fa-envelope"></i></div>
                        <div class="af-text">
                            <p>New inquiry received</p>
                            <span>2 hours ago</span>
                        </div>
                    </li>
                    <li class="af-item">
                        <div class="af-dot af-purple"><i class="fas fa-user-plus"></i></div>
                        <div class="af-text">
                            <p>New customer registered</p>
                            <span>5 hours ago</span>
                        </div>
                    </li>
                    <li class="af-item af-last">
                        <div class="af-dot af-blue"><i class="fas fa-database"></i></div>
                        <div class="af-text">
                            <p>Database backup completed</p>
                            <span>Yesterday</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    (function tick() {
        const el = document.getElementById('live-time');
        if (el) el.textContent = new Date().toLocaleTimeString('en-US', {hour:'2-digit',minute:'2-digit',second:'2-digit'});
        setTimeout(tick, 1000);
    })();
</script>
@endpush
