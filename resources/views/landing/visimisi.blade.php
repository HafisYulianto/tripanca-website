@extends('layouts.app')

@section('title', 'Tripanca - Visi Misi')

@section('content')

<!-- Vision Mission Header Start -->
<div class="container-fluid about overflow-hidden py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-img rounded h-100">
                    <img src="/build/assets/img/about.jpg" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="">
                    <div class="about-exp"><span>Komitmen Kami</span></div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="about-item">
                    <h4 class="text-primary text-uppercase">Visi & Misi</h4>
                    <h1 class="display-3 mb-3">{{ $visimisi->title ?? 'Arah dan Komitmen Tripanca untuk Masa Depan' }}</h1>
                    <p class="mb-4">{{ $visimisi->description ?? 'Visi dan misi Tripanca mencerminkan dedikasi kami untuk menjadi pemimpin dalam industri air mineral, dengan fokus pada kualitas, keberlanjutan, dan kepuasan pelanggan. Sejak didirikan, kami terus berupaya mewujudkan nilai-nilai ini dalam setiap aspek operasional.' }}
                    </p>
                    <div class="bg-light rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="pe-4">
                                        <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;"><i class="fas fa-eye text-white fa-2x"></i></div>
                                    </div>
                                    <div class="">
                                        <a href="/produk-kami" class="h4 d-inline-block mb-3">{{ $visimisi->visi_title ?? 'Visi Kami' }}</a>
                                        <p class="mb-0">{{ $visimisi->visi_content ?? 'Menjadi pemimpin utama dalam penyediaan air mineral berkualitas tinggi di Indonesia, yang diakui atas inovasi, keberlanjutan, dan kontribusi positif terhadap kesehatan masyarakat.' }}</p>
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
                                        <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;"><i class="fas fa-bullseye text-white fa-2x"></i></div>
                                    </div>
                                    <div class="">
                                        <a href="/produk-kami" class="h4 d-inline-block mb-3">{{ $visimisi->misi_title ?? 'Misi Kami' }}</a>
                                        <p class="mb-0">{{ $visimisi->misi_content ?? 'Menyediakan air mineral murni dan aman melalui proses produksi modern, sambil menjaga lingkungan dan memastikan aksesibilitas bagi semua konsumen.' }}</p>
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
<!-- Vision Mission Header End -->

<!-- Vision Mission Details Start -->
<div class="container-fluid feature bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-uppercase text-primary">Detail Visi & Misi</h4>
            <h1 class="display-3 text-capitalize mb-3">Pilar Utama Panduan Tripanca</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4">
                    <div class="feature-icon mb-3"><i class="{{ $visimisi->item1_icon ?? 'fas fa-tint' }} text-white fa-3x"></i></div>
                    <a href="/layanan" class="h4 mb-3">{{ $visimisi->item1_title ?? 'Kualitas Premium' }}</a>
                    <p class="mb-3">{{ $visimisi->item1_content ?? 'Memastikan setiap tetes air mineral Tripanca memenuhi standar tertinggi untuk kesehatan dan kesegaran.' }}</p>
                    <a href="/layanan" class="btn text-secondary">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item p-4">
                    <div class="feature-icon mb-3"><i class="{{ $visimisi->item2_icon ?? 'fas fa-leaf' }} text-white fa-3x"></i></div>
                    <a href="/layanan" class="h4 mb-3">{{ $visimisi->item2_title ?? 'Keberlanjutan Lingkungan' }}</a>
                    <p class="mb-3">{{ $visimisi->item2_content ?? 'Menerapkan praktik ramah lingkungan dalam produksi dan distribusi untuk menjaga sumber daya alam.' }}</p>
                    <a href="/layanan" class="btn text-secondary">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon mb-3"><i class="{{ $visimisi->item3_icon ?? 'fas fa-users' }} text-white fa-3x"></i></div>
                    <a href="/layanan" class="h4 mb-3">{{ $visimisi->item3_title ?? 'Kepuasan Pelanggan' }}</a>
                    <p class="mb-3">{{ $visimisi->item3_content ?? 'Mendahulukan kebutuhan pelanggan dengan layanan prima dan produk yang dapat diandalkan setiap hari.' }}</p>
                    <a href="/layanan" class="btn text-secondary">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="feature-item p-4">
                    <div class="feature-icon mb-3"><i class="{{ $visimisi->item4_icon ?? 'fas fa-rocket' }} text-white fa-3x"></i></div>
                    <a href="/layanan" class="h4 mb-3">{{ $visimisi->item4_title ?? 'Inovasi Berkelanjutan' }}</a>
                    <p class="mb-3">{{ $visimisi->item4_content ?? 'Terus berinovasi dalam teknologi filtrasi dan kemasan untuk memenuhi tuntutan pasar yang dinamis.' }}</p>
                    <a href="/layanan" class="btn text-secondary">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vision Mission Details End -->



@endsection