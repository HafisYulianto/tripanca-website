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
                <div class="notification-bell">
                    <i class="fas fa-bell"></i>
                    <span class="notification-badge">3</span>
                </div>

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
            <li class="active"><a href="#"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
            <li><a href="banner"><i class="fas fa-image"></i> <span>Banner</span></a></li>
            <!-- <li><a href="#"><i class="fas fa-info-circle"></i> <span>Tentang Kami</span></a></li> -->
            <li><a href="{{ route('produks.index') }}"><i class="fas fa-box"></i> <span>Produk</span></a></li>
            <li><a href="/bloger"><i class="fas fa-blog"></i> <span>Blog</span></a></li>
            <!-- <li><a href="#"><i class="fas fa-users"></i> <span>Tim</span></a></li> -->
            <li><a href="ulasan"><i class="fas fa-star"></i> <span>Ulasan</span></a></li>
            <!-- <li><a href="#"><i class="fas fa-phone"></i> <span>Kontak</span></a></li> -->
            <!-- <li><a href="#"><i class="fas fa-history"></i> <span>Sejarah</span></a></li> -->
            <li><a href="{{ route('kelolavisimisi.index') }}"><i class="fas fa-eye"></i> <span>Visi & Misi</span></a></li>
            <!-- <li><a href="#"><i class="fas fa-building"></i> <span>Bidang Usaha</span></a></li> -->
            <li><a href="kelolafoto"><i class="fas fa-images"></i> <span>Foto</span></a></li>
            <li><a href="videos"><i class="fas fa-video"></i> <span>Video</span></a></li>
            <li><a href="#"><i class="fas fa-user-friends"></i> <span>User</span></a></li>
            <li><a href="profile"><i class="fas fa-user"></i> <span>Profile</span></a></li>
        </ul>
    </div>


    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    <div class="footer">
        <div class="footer-content">
            <div class="copyright">
                &copy; 2024 Tripanca Air Mineral. All rights reserved.
            </div>
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Help Center</a>
            </div>
        </div>
    </div>

    <script>
        // Sales Chart
        const salesCtx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: ['1 Mar', '5 Mar', '10 Mar', '15 Mar', '20 Mar', '25 Mar', '30 Mar'],
                datasets: [{
                    label: 'Penjualan (Ribu)',
                    data: [120, 150, 180, 200, 170, 220, 240],
                    borderColor: '#2563eb',
                    backgroundColor: 'rgba(37, 99, 235, 0.1)',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        // Product Chart
        const productCtx = document.getElementById('productChart').getContext('2d');
        const productChart = new Chart(productCtx, {
            type: 'doughnut',
            data: {
                labels: ['600ml', '1500ml', 'Galon', 'Oxygen'],
                datasets: [{
                    data: [40, 25, 20, 15],
                    backgroundColor: [
                        '#2563eb',
                        '#10b981',
                        '#f59e0b',
                        '#8b5cf6'
                    ]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });

        // Notification bell click
        document.querySelector('.notification-bell').addEventListener('click', function() {
            alert('Anda memiliki 3 notifikasi baru');
        });

        // User profile dropdown
        document.querySelector('.user-profile').addEventListener('click', function() {
            alert('Menu profil user akan ditampilkan di sini');
        });
    </script>

    @stack('scripts')
</body>

</html>