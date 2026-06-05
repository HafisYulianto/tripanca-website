<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Tripanca Air Mineral</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('build/assets/img/logo.png') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="/build/assets/css/dashboard.css" rel="stylesheet">

    @stack('styles')
</head>

<body>

    <!-- Header -->
    <div class="header-top">
        <div class="logo">
            <div class="page-title">
                <h1>Dashboard Admin</h1>
                <p>Tripanca Air Mineral</p>
            </div>
        </div>

        <div class="header-actions">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Cari produk, laporan, atau pengguna...">
            </div>

            <div class="user-info">
                <div class="user-profile">
                    <div class="user-avatar">AD</div>
                    <div class="user-details">
                        <div class="name">Admin Tripanca</div>
                        <div class="role">Super Admin</div>
                    </div>
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <img src="/build/assets/img/logo.png" alt="Tripanca Logo">
        </div>
        <ul class="nav-links">
            <li class="{{ request()->is('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
            <li class="{{ request()->is('banner*') || request()->is('banners*') ? 'active' : '' }}"><a href="/banner"><i class="fas fa-image"></i> <span>Banner</span></a></li>
            <li class="{{ request()->is('produk*') || request()->is('produks*') ? 'active' : '' }}"><a href="{{ route('produks.index') }}"><i class="fas fa-box"></i> <span>Produk</span></a></li>
            <li class="{{ request()->is('bloger*') || request()->is('blogs*') ? 'active' : '' }}"><a href="/bloger"><i class="fas fa-blog"></i> <span>Blog</span></a></li>
            <li class="{{ request()->is('ulasan*') || request()->is('testimonials*') ? 'active' : '' }}"><a href="/ulasan"><i class="fas fa-star"></i> <span>Ulasan</span></a></li>
            <li class="{{ request()->is('kelolavisimisi*') ? 'active' : '' }}"><a href="{{ route('kelolavisimisi.index') }}"><i class="fas fa-eye"></i> <span>Visi & Misi</span></a></li>
            <li class="{{ request()->is('kelolafoto*') || request()->is('photos*') ? 'active' : '' }}"><a href="/kelolafoto"><i class="fas fa-images"></i> <span>Foto</span></a></li>
            <li class="{{ request()->is('videos*') ? 'active' : '' }}"><a href="/videos"><i class="fas fa-video"></i> <span>Video</span></a></li>
            <li class="{{ request()->is('profile*') ? 'active' : '' }}"><a href="/profile"><i class="fas fa-user"></i> <span>Profile</span></a></li>
        </ul>
        <div class="sidebar-logout">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-btn"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></button>
            </form>
        </div>
    </div>


    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    <div class="footer">
        <div class="footer-content">
            <div class="copyright">
                &copy; {{ date('Y') }} Tripanca Air Mineral. Hak cipta dilindungi.
            </div>
            <div class="footer-links">
                <a href="/">Kembali ke Website</a>
            </div>
        </div>
    </div>

    <script>
        // User profile dropdown
        document.querySelector('.user-profile').addEventListener('click', function() {
            alert('Menu profil user akan ditampilkan di sini');
        });
    </script>

    @stack('scripts')
</body>

</html>