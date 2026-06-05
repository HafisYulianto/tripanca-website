@extends('layouts.app')

@section('title', 'Tripanca - Air Mineral Berkualitas')

@section('content')

  <!-- Blog Start -->
    <div class="container-fluid blog pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Blog Kami</h4>
                <h1 class="display-3 text-capitalize mb-3">Artikel & Berita Terbaru</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @forelse($blogs as $blog)
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            @if($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid rounded-top w-100" alt="{{ $blog->title }}">
                            @else
                            <img src="/build/assets/img/blog-default.jpg" class="img-fluid rounded-top w-100" alt="{{ $blog->title }}">
                            @endif
                            <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i> {{ $blog->published_at ? $blog->published_at->format('d M Y') : '-' }}</div>
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <a href="{{ route('blog.detail', $blog->slug) }}" class="h4 d-inline-block mb-3">{{ $blog->title }}</a>
                            <p>{{ $blog->excerpt }}</p>
                            <a href="{{ route('blog.detail', $blog->slug) }}" class="fw-bold text-secondary">Baca Selengkapnya <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center py-5">
                    <i class="fas fa-newspaper fa-4x text-muted mb-3"></i>
                    <h4 class="text-muted">Belum Ada Artikel</h4>
                    <p class="text-muted">Artikel dan berita terbaru akan segera hadir. Nantikan update dari kami!</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Blog End -->

    @endsection
