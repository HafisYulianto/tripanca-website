@extends('layouts.app')

@section('title', 'Tripanca - Air Mineral Berkualitas')

@section('content')

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
                                            <a href="/sejarah" class="h4 d-inline-block mb-3">Pelanggan Puas</a>
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
                                            <a href="/sejarah" class="h4 d-inline-block mb-3">Produk Standar</a>
                                            <p class="mb-0">Semua produk Tripanca memenuhi standar nasional dan internasional untuk keamanan pangan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="/sejarah" class="btn btn-secondary rounded-pill py-3 px-5">Baca Selengkapnya</a>
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

    @endsection
