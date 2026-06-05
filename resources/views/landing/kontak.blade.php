@extends('layouts.app')

@section('title', 'Tripanca - Hubungi Kami')

@section('content')

  <!-- Contact Start -->
        <div class="container-fluid contact bg-light py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 h-100 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                            <h4 class="text-uppercase text-primary">Hubungi Kami</h4>
                            <h1 class="display-3 text-capitalize mb-3">Kirim Pesan Anda</h1>
                            <p class="mb-0">Kami siap membantu Anda. Silakan isi formulir di bawah ini untuk mengirimkan pertanyaan, saran, atau informasi pemesanan produk Tripanca.</p>
                        </div>
                        <form>
                            <div class="row g-4">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="name" placeholder="Nama Anda">
                                        <label for="name">Nama Anda</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0" id="email" placeholder="Email Anda">
                                        <label for="email">Email Anda</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="phone" class="form-control border-0" id="phone" placeholder="Telepon">
                                        <label for="phone">Nomor Telepon</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="subject" placeholder="Subjek">
                                        <label for="subject">Subjek</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0" placeholder="Tulis pesan Anda di sini" id="message" style="height: 175px"></textarea>
                                        <label for="message">Pesan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-inline-flex rounded bg-white w-100 p-4">
                                    <i class="fas fa-map-marker-alt fa-2x text-secondary me-4"></i>
                                    <div>
                                        <h4>Alamat</h4>
                                        <p class="mb-0">Jl. Raya Semarang - Solo KM 12, Semarang, Jawa Tengah, Indonesia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="d-inline-flex rounded bg-white w-100 p-4">
                                    <i class="fas fa-envelope fa-2x text-secondary me-4"></i>
                                    <div>
                                        <h4>Email</h4>
                                        <p class="mb-0">info@tripanca.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="d-inline-flex rounded bg-white w-100 p-4">
                                    <i class="fa fa-phone-alt fa-2x text-secondary me-4"></i>
                                    <div>
                                        <h4>Telepon</h4>
                                        <p class="mb-0">+62 24 123 4567</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="h-100 overflow-hidden">
                                    <iframe class="w-100 rounded" style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253840.33187124964!2d110.2895185!3d-6.9666651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4d3f0d024d%3A0x1e0432b91eee224c!2sSemarang%2C%20Kota%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1694259649153!5m2!1sid!2sid" 
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

    @endsection
