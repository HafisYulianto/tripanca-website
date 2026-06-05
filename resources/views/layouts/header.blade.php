<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <!-- <h1 class="text-primary"><i class="fas fa-hand-holding-water me-3"></i>Tripanca</h1> -->
            <img src="/build/assets/img/logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Beranda</a>
                <a href="/tentang" class="nav-item nav-link {{ request()->is('tentang') ? 'active' : '' }}">Tentang</a>
                <a href="/layanan" class="nav-item nav-link {{ request()->is('layanan') ? 'active' : '' }}">Layanan</a>
                <a href="/produk-kami" class="nav-item nav-link {{ request()->is('produk-kami') ? 'active' : '' }}">Produk</a>
                <a href="/blog" class="nav-item nav-link {{ request()->is('blog*') ? 'active' : '' }}">Blog</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ request()->is('sejarah') || request()->is('visimisi') || request()->is('bidangusaha') || request()->is('foto') || request()->is('video') ? 'active' : '' }}" data-bs-toggle="dropdown">Halaman</a>
                    <div class="dropdown-menu m-0">
                        <a href="/sejarah" class="dropdown-item {{ request()->is('sejarah') ? 'active' : '' }}">Sejarah</a>
                        <a href="/visimisi" class="dropdown-item {{ request()->is('visimisi') ? 'active' : '' }}">Visi Misi</a>
                        <a href="/bidangusaha" class="dropdown-item {{ request()->is('bidangusaha') ? 'active' : '' }}">Bidang Usaha</a>
                        <a href="/foto" class="dropdown-item {{ request()->is('foto') ? 'active' : '' }}">Foto</a>
                        <a href="/video" class="dropdown-item {{ request()->is('video') ? 'active' : '' }}">Video</a>
                    </div>
                </div>
                <a href="/kontak" class="nav-item nav-link {{ request()->is('kontak') ? 'active' : '' }}">Kontak</a>
            </div>
            <div class="d-none d-xl-flex me-3">
            </div>
            <button class="btn btn-primary btn-md-square d-flex flex-shrink-0 mb-3 mb-lg-0 rounded-circle me-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
            <a href="" class="btn btn-primary rounded-pill d-inline-flex flex-shrink-0 py-2 px-4">Pesan Sekarang</a>
        </div>
    </nav>

    <!-- Carousel Start -->
    <div class="carousel-header">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($banners as $index => $banner)
                <li data-bs-target="#carouselId" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner" role="listbox">
                @foreach($banners as $index => $banner)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/' . $banner->image) }}" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption-{{ $index + 1 }}">
                        <div class="carousel-caption-{{ $index + 1 }}-content" style="max-width: 900px;">
                            @if($banner->subtitle)
                            <h4 class="text-white text-uppercase fw-bold mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;" style="letter-spacing: 3px;">{{ $banner->subtitle }}</h4>
                            @endif
                            @if($banner->title)
                            <h1 class="display-2 text-capitalize text-white mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.3s" style="animation-delay: 1.3s;">{{ $banner->title }}</h1>
                            @endif
                            @if($banner->description)
                            <p class="mb-5 fs-5 text-white fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.5s" style="animation-delay: 1.5s;">{{ $banner->description }}</p>
                            @endif
                            <div class="carousel-caption-{{ $index + 1 }}-content-btn fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.7s" style="animation-delay: 1.7s;">
                                @if($banner->button1_text)
                                <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="{{ $banner->button1_link }}">{{ $banner->button1_text }}</a>
                                @endif
                                @if($banner->button2_text)
                                <a class="btn btn-secondary rounded-pill flex-shrink-0 py-3 px-5 ms-2" href="{{ $banner->button2_link }}">{{ $banner->button2_text }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon btn btn-primary fadeInLeft animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"> <i class="fa fa-angle-left fa-3x"></i></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon btn btn-primary fadeInRight animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"><i class="fa fa-angle-right fa-3x"></i></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
</div>
<!-- Navbar & Hero End -->

<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h4 class="modal-title mb-0" id="exampleModalLabel">Cari berdasarkan kata kunci</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="kata kunci" aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="input-group-text btn border p-3"><i class="fa fa-search text-white"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->