@extends('layouts.app')

@section('title', 'Tripanca - Air Mineral Berkualitas')

@section('content')

@php
$products = \App\Models\Product::all();
@endphp


<!-- feature Start -->
<div class="container-fluid feature bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-uppercase text-primary">Fitur Kami</h4>
            <h1 class="display-3 text-capitalize mb-3">Nama Terpercaya dalam Industri Air Mineral</h1>
        </div>
        <div class="row g-4">
            <div class=" col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4">
                    <div class="feature-icon mb-3"><i class="fas fa-hand-holding-water text-white fa-3x"></i></div>
                    <a href="/layanan" class="h4 mb-3">Kualitas Terjamin</a>
                    <p class="mb-3">Setiap produk Tripanca melalui proses quality control yang ketat untuk memastikan kualitas dan keamanan air mineral.</p>
                    <a href="/layanan" class="btn text-secondary">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item p-4">
                    <div class="feature-icon mb-3"><i class="fas fa-filter text-white fa-3x"></i></div>
                    <a href="/layanan" class="h4 mb-3">Proses Filtrasi Modern</a>
                    <p class="mb-3">Menggunakan teknologi filtrasi terkini untuk menjaga kemurnian air tanpa mengurangi kandungan mineral alaminya.</p>
                    <a href="/layanan" class="btn text-secondary">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon mb-3"><i class="fas fa-recycle text-white fa-3x"></i></div>
                    <a href="/layanan" class="h4 mb-3">Kemasan Ramah Lingkungan</a>
                    <p class="mb-3">Kemasan Tripanca didesain dengan memperhatikan aspek lingkungan dan dapat didaur ulang.</p>
                    <a href="/layanan" class="btn text-secondary">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="feature-item p-4">
                    <div class="feature-icon mb-3"><i class="fas fa-microscope text-white fa-3x"></i></div>
                    <a href="/layanan" class="h4 mb-3">Kontrol Laboratorium</a>
                    <p class="mb-3">Setiap batch produk diuji di laboratorium internal untuk memastikan standar kualitas yang konsisten.</p>
                    <a href="/layanan" class="btn text-secondary">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- feature End -->


<!-- About Start -->
<div class="container-fluid about overflow-hidden py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-img rounded h-100">
                    <img src="/build/assets/img/about.jpg" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="">
                    <div class="about-exp"><span>Pengalaman 20 Tahun</span></div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="about-item">
                    <h4 class="text-primary text-uppercase">Tentang Kami</h4>
                    <h1 class="display-3 mb-3">Kami Menyediakan Air Mineral Berkualitas.</h1>
                    <p class="mb-4">PT Tirta Panca Anugrah (Tripanca) telah menjadi produsen air minum dalam kemasan terpercaya sejak tahun 2003. Dengan komitmen untuk menyediakan air mineral berkualitas tinggi dari sumber mata air pegunungan terpilih.
                    </p>
                    <div class="bg-light rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="pe-4">
                                        <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;"><i class="fas fa-tint text-white fa-2x"></i></div>
                                    </div>
                                    <div class="">
                                        <a href="/tentang" class="h4 d-inline-block mb-3">Pelanggan Puas</a>
                                        <p class="mb-0">Ribuan pelanggan telah mempercayai Tripanca sebagai pilihan utama air mineral sehari-hari mereka.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="pe-4">
                                        <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;"><i class="fas fa-faucet text-white fa-2x"></i></div>
                                    </div>
                                    <div class="">
                                        <a href="/tentang" class="h4 d-inline-block mb-3">Produk Standar</a>
                                        <p class="mb-0">Semua produk Tripanca memenuhi standar nasional dan internasional untuk keamanan pangan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/tentang" class="btn btn-secondary rounded-pill py-3 px-5">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Fact Counter -->
<div class="container-fluid counter py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="counter-item">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-thumbs-up fa-3x text-white"></i>
                    </div>
                    <h4 class="text-white my-4">Pelanggan Bahagia</h4>
                    <div class="counter-counting">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">50.000</span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="counter-item">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-truck fa-3x text-white"></i>
                    </div>
                    <h4 class="text-white my-4">Pengiriman</h4>
                    <div class="counter-counting">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">513</span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="counter-item">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-users fa-3x text-white"></i>
                    </div>
                    <h4 class="text-white my-4">Karyawan</h4>
                    <div class="counter-counting">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">150</span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="counter-item">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-heart fa-3x text-white"></i>
                    </div>
                    <h4 class="text-white my-4">Tahun Pengalaman</h4>
                    <div class="counter-counting">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">20</span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact Counter -->

<!-- Service Start -->
<div class="container-fluid service bg-light overflow-hidden py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-uppercase text-primary">Layanan Kami</h4>
            <h1 class="display-3 text-capitalize mb-3">Lindungi Keluarga Anda dengan Air Terbaik</h1>
        </div>
        <div class="row gx-0 gy-4 align-items-center">
            <div class="col-lg-6 col-xl-4 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-item rounded p-4 mb-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="service-content text-end">
                                    <a href="#" class="h4 d-inline-block mb-3">Air Mineral Rumah Tangga</a>
                                    <p class="mb-0">Berbagai ukuran kemasan untuk kebutuhan sehari-hari keluarga Anda.</p>
                                </div>
                                <div class="ps-4">
                                    <div class="service-btn"><i class="fas fa-hand-holding-water text-white fa-2x"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-item rounded p-4 mb-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="service-content text-end">
                                    <a href="#" class="h4 d-inline-block mb-3">Air Mineral Komersial</a>
                                    <p class="mb-0">Solusi untuk kantor, restoran, hotel, dan usaha komersial lainnya.</p>
                                </div>
                                <div class="ps-4">
                                    <div class="service-btn"><i class="fas fa-dumpster-fire text-white fa-2x"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-item rounded p-4 mb-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="service-content text-end">
                                    <a href="#" class="h4 d-inline-block mb-3">Pabrik Filtrasi</a>
                                    <p class="mb-0">Teknologi filtrasi modern untuk menjaga kualitas dan kemurnian air.</p>
                                </div>
                                <div class="ps-4">
                                    <div class="service-btn"><i class="fas fa-filter text-white fa-2x"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-transparent">
                    <img src="/build/assets/img/water.png" class="img-fluid w-100" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay="0.2s">
                <div class="service-item rounded p-4 mb-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="pe-4">
                                    <div class="service-btn"><i class="fas fa-assistive-listening-systems text-white fa-2x"></i></div>
                                </div>
                                <div class="service-content">
                                    <a href="#" class="h4 d-inline-block mb-3">Pelayanan Pelanggan</a>
                                    <p class="mb-0">Tim customer service siap membantu kebutuhan dan pertanyaan Anda.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-item rounded p-4 mb-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="pe-4">
                                    <div class="service-btn"><i class="fas fa-recycle text-white fa-2x"></i></div>
                                </div>
                                <div class="service-content">
                                    <a href="#" class="h4 d-inline-block mb-3">Program Daur Ulang</a>
                                    <p class="mb-0">Kami mendukung program daur ulang untuk lingkungan yang lebih baik.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-item rounded p-4 mb-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="pe-4">
                                    <div class="service-btn"><i class="fas fa-project-diagram text-white fa-2x"></i></div>
                                </div>
                                <div class="service-content">
                                    <a href="#" class="h4 d-inline-block mb-3">Perencanaan Proyek</a>
                                    <p class="mb-0">Konsultasi dan perencanaan untuk kebutuhan air mineral skala besar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Products Start -->
<div class="container-fluid product py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-uppercase text-primary">Produk Kami</h4>
            <h1 class="display-3 text-capitalize mb-3">Kami Menyediakan Kemasan Air Mineral Terbaik.</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($products as $index => $product)
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.2) }}s">
                <div class="product-item">
                    <img src="{{ $product->image ? asset('storage/' . $product->image) : '/build/assets/img/water.png' }}" class="img-fluid w-100 rounded-top" alt="Image">
                    <div class="product-content bg-light text-center rounded-bottom p-4">
                        <p>{{ $product->size }}</p>
                        <a href="/produk-kami" class="h4 d-inline-block mb-3">{{ $product->name }}</a>
                        <p class="fs-4 text-primary mb-3">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        <a href="/produk-kami" class="btn btn-secondary rounded-pill py-2 px-4">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Products End -->


<!-- Blog Start -->
<div class="container-fluid blog pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-uppercase text-primary">Blog Kami</h4>
            <h1 class="display-3 text-capitalize mb-3">Artikel & Berita Terbaru</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @forelse($blogs as $index => $blog)
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="{{ 0.2 + ($index * 0.2) }}s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ $blog->image ? asset('storage/' . $blog->image) : '/build/assets/img/blog-1.jpg' }}" class="img-fluid rounded-top w-100" alt="{{ $blog->title }}">
                        <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i> {{ \Carbon\Carbon::parse($blog->published_at)->format('d M Y') }}</div>
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        <a href="{{ route('blog.detail', $blog->slug) }}" class="h4 d-inline-block mb-3">{{ $blog->title }}</a>
                        <p>{{ $blog->excerpt }}</p>
                        <a href="{{ route('blog.detail', $blog->slug) }}" class="fw-bold text-secondary">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p class="text-muted">Belum ada blog post.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
<!-- Blog End -->


<!-- Team Start -->
<!-- <div class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Tim Kami</h4>
                <h1 class="display-3 text-capitalize mb-3">Bertemu dengan Tim Profesional Tripanca</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item p-4">
                        <div class="team-inner rounded">
                            <div class="team-img">
                                <img src="/build/assets/img/team-1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                                <div class="team-share">
                                    <a class="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href=""><i class="fas fa-share-alt"></i></a>
                                </div>
                                <div class="team-icon rounded-pill py-2 px-2">
                                    <a class="btn btn-secondary btn-sm-square rounded-pill mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light rounded-bottom text-center py-4">
                                <h4 class="mb-3">Budi Santoso</h4>
                                <p class="mb-0">Direktur Utama</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item p-4">
                        <div class="team-inner rounded">
                            <div class="team-img">
                                <img src="/build/assets/img/team-2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                                <div class="team-share">
                                    <a class="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href=""><i class="fas fa-share-alt"></i></a>
                                </div>
                                <div class="team-icon rounded-pill py-2 px-2">
                                    <a class="btn btn-secondary btn-sm-square rounded-pill mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light rounded-bottom text-center py-4">
                                <h4 class="mb-3">Siti Rahayu</h4>
                                <p class="mb-0">Manajer Produksi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item p-4">
                        <div class="team-inner rounded">
                            <div class="team-img">
                                <img src="/build/assets/img/team-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                                <div class="team-share">
                                    <a class="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href=""><i class="fas fa-share-alt"></i></a>
                                </div>
                                <div class="team-icon rounded-pill py-2 px-2">
                                    <a class="btn btn-secondary btn-sm-square rounded-pill mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light rounded-bottom text-center py-4">
                                <h4 class="mb-3">Ahmad Wijaya</h4>
                                <p class="mb-0">Kepala Quality Control</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-item p-4">
                        <div class="team-inner rounded">
                            <div class="team-img">
                                <img src="/build/assets/img/team-4.jpg" class="img-fluid rounded-top w-100" alt="Image">
                                <div class="team-share">
                                    <a class="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href=""><i class="fas fa-share-alt"></i></a>
                                </div>
                                <div class="team-icon rounded-pill py-2 px-2">
                                    <a class="btn btn-secondary btn-sm-square rounded-pill mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light rounded-bottom text-center py-4">
                                <h4 class="mb-3">Dewi Lestari</h4>
                                <p class="mb-0">Manajer Pemasaran</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- Team End -->

<!-- Testimonial Start -->
<div class="container-fluid testimonial pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-uppercase text-primary">Testimoni</h4>
            <h1 class="display-3 text-capitalize mb-3">Ulasan dari pelanggan kami.</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
            @foreach($testimonials as $testimonial)
            <div class="testimonial-item text-center p-4">
                <p>{{ $testimonial->review_text }}</p>
                <div class="d-flex justify-content-center mb-4">
                    @if($testimonial->image)
                    <img src="{{ asset('storage/' . $testimonial->image) }}" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="{{ $testimonial->name }}">
                    @else
                    <div class="w-24 h-24 bg-gray-300 rounded-full flex items-center justify-center text-gray-600 text-xl font-bold">
                        {{ substr($testimonial->name, 0, 1) }}
                    </div>
                    @endif
                </div>
                <div class="d-block">
                    <h4 class="text-dark">{{ $testimonial->name }}</h4>
                    <p class="m-0 pb-3">{{ $testimonial->position }}</p>
                    <div class="d-flex justify-content-center text-secondary">
                        @for($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star {{ $i <= $testimonial->rating ? 'text-yellow-400' : 'text-gray-300' }}"></i>
                            @endfor
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Testimonial End -->

@endsection