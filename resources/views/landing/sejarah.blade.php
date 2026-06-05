@extends('layouts.app')

@section('title', 'Tripanca - Air Mineral Berkualitas')

@section('content')

    <!-- History Header Start -->
    <div class="container-fluid about overflow-hidden py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img rounded h-100">
                        <img src="/build/assets/img/about.jpg" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="">
                        <div class="about-exp"><span>Didirikan 2003</span></div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="about-item">
                        <h4 class="text-primary text-uppercase">Sejarah Kami</h4>
                        <h1 class="display-3 mb-3">Perjalanan Tripanca dari Awal hingga Sekarang</h1>
                        <p class="mb-4">PT Tirta Panca Anugrah (Tripanca) didirikan pada tahun 2003 dengan visi untuk menyediakan air mineral berkualitas tinggi yang dapat diakses oleh semua lapisan masyarakat. Dari sebuah pabrik kecil di pegunungan, Tripanca telah berkembang menjadi salah satu produsen air mineral terpercaya di Indonesia.
                        </p>
                        <div class="bg-light rounded p-4 mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="pe-4">
                                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;"><i class="fas fa-seedling text-white fa-2x"></i></div>
                                        </div>
                                        <div class="">
                                            <a href="/visimisi" class="h4 d-inline-block mb-3">Awal Mula</a>
                                            <p class="mb-0">Dimulai dari sumber mata air pegunungan yang alami dan murni, Tripanca lahir dari keinginan untuk memberikan alternatif air minum yang sehat.</p>
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
                                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;"><i class="fas fa-chart-line text-white fa-2x"></i></div>
                                        </div>
                                        <div class="">
                                            <a href="/visimisi" class="h4 d-inline-block mb-3">Pertumbuhan Pesat</a>
                                            <p class="mb-0">Dengan inovasi teknologi dan komitmen kualitas, Tripanca berhasil memperluas jangkauan pasar dan mendapatkan kepercayaan konsumen.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="/visimisi" class="btn btn-secondary rounded-pill py-3 px-5">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- History Header End -->

    <!-- Timeline Start -->
    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Perjalanan Kami</h4>
                <h1 class="display-3 text-capitalize mb-3">Milestone Penting Tripanca</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3"><i class="fas fa-calendar-alt text-white fa-3x"></i></div>
                        <a href="/visimisi" class="h4 mb-3">2003 - Pendirian</a>
                        <p class="mb-3">PT Tirta Panca Anugrah didirikan dengan pabrik pertama di daerah pegunungan, memulai produksi air mineral skala kecil.</p>
                        <a href="/visimisi" class="btn text-secondary">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3"><i class="fas fa-industry text-white fa-3x"></i></div>
                        <a href="/visimisi" class="h4 mb-3">2005 - Ekspansi Produksi</a>
                        <p class="mb-3">Pembangunan pabrik kedua dengan kapasitas produksi yang lebih besar untuk memenuhi permintaan pasar yang meningkat.</p>
                        <a href="/visimisi" class="btn text-secondary">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3"><i class="fas fa-award text-white fa-3x"></i></div>
                        <a href="/visimisi" class="h4 mb-3">2010 - Sertifikasi Kualitas</a>
                        <p class="mb-3">Mendapatkan sertifikasi internasional untuk standar kualitas air mineral, menegaskan komitmen terhadap keamanan produk.</p>
                        <a href="/visimisi" class="btn text-secondary">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3"><i class="fas fa-users text-white fa-3x"></i></div>
                        <a href="/visimisi" class="h4 mb-3">2015 - Jaringan Distribusi</a>
                        <p class="mb-3">Memperluas jaringan distribusi ke seluruh Indonesia, membuat Tripanca lebih mudah diakses oleh konsumen di berbagai daerah.</p>
                        <a href="/visimisi" class="btn text-secondary">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="1.0s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3"><i class="fas fa-leaf text-white fa-3x"></i></div>
                        <a href="/visimisi" class="h4 mb-3">2020 - Inovasi Ramah Lingkungan</a>
                        <p class="mb-3">Meluncurkan kemasan ramah lingkungan dan program daur ulang, menunjukkan tanggung jawab perusahaan terhadap lingkungan.</p>
                        <a href="/visimisi" class="btn text-secondary">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="1.2s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3"><i class="fas fa-star text-white fa-3x"></i></div>
                        <a href="/visimisi" class="h4 mb-3">2023 - 20 Tahun Pencapaian</a>
                        <p class="mb-3">Merayakan 20 tahun perjalanan dengan lebih dari 50.000 pelanggan puas dan komitmen untuk terus memberikan yang terbaik.</p>
                        <a href="/visimisi" class="btn text-secondary">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Timeline End -->



@endsection
