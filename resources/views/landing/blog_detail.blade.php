@extends('layouts.app')

@section('title', 'Tripanca - ' . $blog->title)

@section('content')

    <!-- Blog Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="mb-4">
                        <a href="/blog" class="text-primary text-decoration-none"><i class="fas fa-arrow-left me-2"></i>Kembali ke Blog</a>
                    </div>
                    @if($blog->image)
                    <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid rounded w-100 mb-4" alt="{{ $blog->title }}" style="max-height: 450px; object-fit: cover;">
                    @endif
                    <div class="mb-3">
                        <span class="text-muted"><i class="fa fa-calendar-alt me-1"></i> {{ $blog->published_at ? $blog->published_at->format('d M Y') : '-' }}</span>
                    </div>
                    <h1 class="display-5 mb-4">{{ $blog->title }}</h1>
                    @if($blog->excerpt)
                    <p class="lead text-muted mb-4">{{ $blog->excerpt }}</p>
                    @endif
                    <div class="blog-detail-content">
                        {!! nl2br(e($blog->content)) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Detail End -->

@endsection
