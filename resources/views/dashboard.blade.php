@extends('layouts.dashboard')

@section('title', 'Tripanca - Dashboard Admin')

@section('content')

    <!-- Main Content -->
    <div class="main-content">
        <!-- Stats Grid -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon bg-primary">
                    <i class="fas fa-image"></i>
                </div>
                <div class="stat-info">
                    <h3>{{ $stats['banners'] }}</h3>
                    <p>Total Banner</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon bg-success">
                    <i class="fas fa-box"></i>
                </div>
                <div class="stat-info">
                    <h3>{{ $stats['products'] }}</h3>
                    <p>Total Produk</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon bg-warning">
                    <i class="fas fa-blog"></i>
                </div>
                <div class="stat-info">
                    <h3>{{ $stats['blogs'] }}</h3>
                    <p>Total Blog</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon bg-danger">
                    <i class="fas fa-star"></i>
                </div>
                <div class="stat-info">
                    <h3>{{ $stats['testimonials'] }}</h3>
                    <p>Total Ulasan</p>
                </div>
            </div>
        </div>

        <!-- Second Row Stats -->
        <div class="stats-grid" style="margin-bottom: 30px;">
            <div class="stat-card">
                <div class="stat-icon" style="background: #ede9fe; color: #7c3aed;">
                    <i class="fas fa-images"></i>
                </div>
                <div class="stat-info">
                    <h3>{{ $stats['photos'] }}</h3>
                    <p>Total Foto</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon" style="background: #fce7f3; color: #db2777;">
                    <i class="fas fa-video"></i>
                </div>
                <div class="stat-info">
                    <h3>{{ $stats['videos'] }}</h3>
                    <p>Total Video</p>
                </div>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="recent-orders">
            <div class="chart-header">
                <h3>Akses Cepat</h3>
            </div>
            <div class="row g-3" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; padding: 10px 0;">
                <a href="/banner" class="quick-link-card" style="text-decoration: none; padding: 20px; background: #f8fafc; border-radius: 10px; text-align: center; transition: all 0.3s; border: 1px solid #e2e8f0;">
                    <i class="fas fa-image fa-2x text-primary mb-2" style="display: block;"></i>
                    <span style="color: #1e293b; font-weight: 600;">Kelola Banner</span>
                </a>
                <a href="{{ route('produks.index') }}" class="quick-link-card" style="text-decoration: none; padding: 20px; background: #f8fafc; border-radius: 10px; text-align: center; transition: all 0.3s; border: 1px solid #e2e8f0;">
                    <i class="fas fa-box fa-2x text-success mb-2" style="display: block;"></i>
                    <span style="color: #1e293b; font-weight: 600;">Kelola Produk</span>
                </a>
                <a href="/bloger" class="quick-link-card" style="text-decoration: none; padding: 20px; background: #f8fafc; border-radius: 10px; text-align: center; transition: all 0.3s; border: 1px solid #e2e8f0;">
                    <i class="fas fa-blog fa-2x text-warning mb-2" style="display: block;"></i>
                    <span style="color: #1e293b; font-weight: 600;">Kelola Blog</span>
                </a>
                <a href="/ulasan" class="quick-link-card" style="text-decoration: none; padding: 20px; background: #f8fafc; border-radius: 10px; text-align: center; transition: all 0.3s; border: 1px solid #e2e8f0;">
                    <i class="fas fa-star fa-2x text-danger mb-2" style="display: block;"></i>
                    <span style="color: #1e293b; font-weight: 600;">Kelola Ulasan</span>
                </a>
                <a href="/kelolafoto" class="quick-link-card" style="text-decoration: none; padding: 20px; background: #f8fafc; border-radius: 10px; text-align: center; transition: all 0.3s; border: 1px solid #e2e8f0;">
                    <i class="fas fa-images fa-2x mb-2" style="display: block; color: #7c3aed;"></i>
                    <span style="color: #1e293b; font-weight: 600;">Kelola Foto</span>
                </a>
                <a href="/videos" class="quick-link-card" style="text-decoration: none; padding: 20px; background: #f8fafc; border-radius: 10px; text-align: center; transition: all 0.3s; border: 1px solid #e2e8f0;">
                    <i class="fas fa-video fa-2x mb-2" style="display: block; color: #db2777;"></i>
                    <span style="color: #1e293b; font-weight: 600;">Kelola Video</span>
                </a>
            </div>
        </div>
    </div>

@endsection

@push('styles')
<style>
    .quick-link-card:hover {
        background: #e0f2fe !important;
        border-color: #2563eb !important;
        transform: translateY(-2px);
    }
</style>
@endpush