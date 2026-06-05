@extends('layouts.app')

@section('title', 'Tripanca - Bidang Usaha')

@section('content')

    <!-- Business Fields Header Start -->
    <div class="container-fluid about overflow-hidden py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img rounded h-100">
                        <img src="/build/assets/img/about.jpg" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="">
                        <div class="about-exp"><span>Bidang Usaha</span></div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="about-item">
                        <h4 class="text-primary text-uppercase">Bidang Usaha Kami</h4>
                        <h1 class="display-3 mb-3">Beragam Sektor Bisnis Tripanca</h1>
                        <p class="mb-4">Tripanca tidak hanya fokus pada produksi air mineral, tetapi juga mengembangkan berbagai bidang usaha yang saling terkait untuk memberikan nilai tambah kepada pelanggan dan masyarakat. Dengan pendekatan integrasi, kami memastikan setiap aspek bisnis berkontribusi pada misi perusahaan.
                        </p>
                        <div class="bg-light rounded p-4 mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="pe-4">
                                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;"><i class="fas fa-industry text-white fa-2x"></i></div>
                                        </div>
                                        <div class="">
                                            <a href="/produk-kami" class="h4 d-inline-block mb-3">Produksi Air Mineral</a>
                                            <p class="mb-0">Kegiatan utama kami dalam memproduksi dan mengemas air mineral berkualitas tinggi dari sumber mata air pegunungan.</p>
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
                                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;"><i class="fas fa-truck text-white fa-2x"></i></div>
                                        </div>
                                        <div class="">
                                            <a href="/produk-kami" class="h4 d-inline-block mb-3">Distribusi dan Logistik</a>
                                            <p class="mb-0">Jaringan distribusi yang luas untuk memastikan produk Tripanca tersedia di seluruh Indonesia dengan efisiensi tinggi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="/produk-kami" class="btn btn-secondary rounded-pill py-3 px-5">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Business Fields Header End -->

   

@endsection
