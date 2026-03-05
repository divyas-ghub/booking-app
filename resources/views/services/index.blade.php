@extends('layouts.app')

@section('content')
<div class="container py-5">

    <!-- Title Section -->
    <div class="row mb-4">
        <div class="col-md-8">
            <h3 class="fw-bold">Our Services</h3>
            <p class="text-muted mb-0">Choose from our premium services</p>
        </div>
        <div class="col-md-4 text-md-end mt-2 mt-md-0">
            <span class="text-muted">
                {{ $services->count() }} Services Available
            </span>
        </div>
    </div>

    <!-- Product Grid -->
    <div class="card p-4 border-0 shadow-sm product-list">
    <div class="single-item-col">

        @forelse($services as $service)
        <div class="col1">

            <div class="card product-card h-100 border-0">

                <!-- Product Image -->
                <div class="product-img">
                    <i class="fas fa-spa fa-3x text-primary"></i>
                </div>

                <!-- Card Body -->
                <div class="card-body d-flex flex-column">

                    <h6 class="fw-semibold mb-1">
                        {{ $service->name }}
                    </h6>

                    <p class="text-muted small mb-2">
                        {{ Str::limit($service->description, 60) }}
                    </p>

                    <div class="mb-2">
                        <span class="price">
                            ₹{{ number_format($service->price) }}
                        </span>
                    </div>

                    <small class="text-muted mb-3">
                        <i class="fas fa-clock me-1"></i>
                        {{ $service->duration_mins }} mins
                    </small>

                    <!-- Button -->
                    <a href="#"
                       class="btn btn-primary btn-sm mt-auto w-100">
                        Book Now
                    </a>

                </div>
            </div>

        </div>
        @empty
        <div class="col-12 text-center py-5">
            <h5 class="text-muted">No Services Available</h5>
        </div>
        @endforelse

    </div>
    </div>

</div>

<style>
.product-card {
    border-radius: 12px;
    transition: 0.3s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.08);
}

.product-img {
    height: 180px;
    background: #f8f9fa;
    display: flex;
    align-items: center;
    justify-content: center;
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
}

.price {
    font-size: 18px;
    font-weight: 700;
    color: #dc3545;
}
.container{
    max-width: 1140px;
    margin: 0 auto;
}
.product-list{
    display:flex;
    flex-wrap:wrap;
}
.single-item-col{
    display: flex;
    gap: 6%;
}
.col1{
    width: 25%;
}
.card-body{
    text-align: center;
    padding: 4% 0;
}
@media (max-width: 576px) {
    .product-img {
        height: 140px;
    }
}
</style>

@endsection