@extends('layouts.app')

@section('title', 'Tripanca - Produk Kami')

@section('content')

    <!-- Products Start -->
    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Produk Kami</h4>
                <h1 class="display-3 text-capitalize mb-3">Air Mineral Berkualitas Tinggi</h1>
                <p>Temukan berbagai pilihan produk air mineral Tripanca yang tersedia dalam berbagai ukuran untuk memenuhi kebutuhan Anda.</p>
            </div>
            <div class="row g-4 justify-content-center">
                @forelse($products as $product)
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="{{ 0.2 + ($loop->index * 0.1) }}s">
                    <div class="product-card rounded overflow-hidden bg-white shadow-sm h-100">
                        @if($product->image)
                        <div class="product-img-wrapper">
                            <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid w-100" alt="{{ $product->name }}" style="height: 250px; object-fit: cover;">
                        </div>
                        @else
                        <div class="product-img-wrapper bg-light d-flex align-items-center justify-content-center" style="height: 250px;">
                            <i class="fas fa-box-open fa-4x text-muted"></i>
                        </div>
                        @endif
                        <div class="p-4 text-center">
                            <h5 class="fw-bold mb-2">{{ $product->name }}</h5>
                            @if($product->size)
                            <p class="text-muted mb-2"><i class="fas fa-ruler me-1"></i> {{ $product->size }}</p>
                            @endif
                            <p class="text-primary fw-bold fs-5 mb-0">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center py-5">
                    <i class="fas fa-box-open fa-4x text-muted mb-3"></i>
                    <h4 class="text-muted">Belum Ada Produk</h4>
                    <p class="text-muted">Produk kami akan segera ditampilkan di sini. Nantikan update terbaru!</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Products End -->

    <style>
        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
        }
        .product-img-wrapper {
            overflow: hidden;
        }
        .product-img-wrapper img {
            transition: transform 0.3s ease;
        }
        .product-card:hover .product-img-wrapper img {
            transform: scale(1.05);
        }
    </style>

@endsection
