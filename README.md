<p align="center">
  <img src="public/build/assets/img/logo.png" alt="Tripanca Logo" width="240">
</p>

<h1 align="center">Website Resmi PT Tirta Panca Anugrah (Tripanca)</h1>

<p align="center">
  <strong>Website profil perusahaan dan sistem manajemen konten (CMS) admin resmi untuk PT Tirta Panca Anugrah (Tripanca)</strong>
</p>

<p align="center">
  Produsen air minum dalam kemasan (AMDK) berkualitas tinggi dari sumber mata air pegunungan sejak tahun 2003.
</p>

---

## 🚀 Fitur Utama

### 🌐 Halaman Publik (Landing Page)
*   **Beranda (Home):** Dilengkapi slider banner dinamis, review/testimoni pelanggan, dan 3 artikel blog terbaru.
*   **Tentang Kami & Sejarah:** Profil lengkap perusahaan dan latar belakang perjalanan Tripanca selama 20 tahun.
*   **Layanan:** Informasi layanan penyediaan air mineral rumah tangga dan komersial.
*   **Visi & Misi:** Menampilkan visi misi perusahaan secara dinamis yang diambil dari database.
*   **Produk:** Galeri katalog produk air mineral (galon, kemasan botol 600ml, 1500ml, dll) beserta detail harga.
*   **Blog/Berita:** Halaman artikel kesehatan dan informasi terbaru perusahaan.
*   **Galeri Foto & Video:** Dokumentasi aktivitas perusahaan lengkap dengan pemutar video YouTube terintegrasi.
*   **Kontak:** Halaman hubungi kami terintegrasi peta lokasi.

### 🔐 Panel Admin (CMS Dashboard)
*   **Dashboard Statistik:** Dilengkapi widget total penjualan, produk terjual, stok, dan grafik interaktif menggunakan Chart.js.
*   **Kelola Banner:** CRUD slider halaman depan (gambar, judul, subjudul, deskripsi, link tombol).
*   **Kelola Produk:** CRUD katalog produk (nama, ukuran, harga, gambar).
*   **Kelola Ulasan/Testimoni:** CRUD ulasan pelanggan beserta rating bintang.
*   **Kelola Blog:** CMS penulisan artikel (judul, excerpt, konten lengkap, gambar, status publikasi).
*   **Kelola Visi & Misi:** Pengeditan dinamis teks visi misi dan 4 poin fitur unggulan.
*   **Kelola Foto & Video:** Manajemen dokumentasi (konversi otomatis tautan YouTube biasa ke format *embed*).

---

## 🛠️ Spesifikasi Teknologi (Tech Stack)

*   **Backend:** Laravel 12.0 (PHP >= 8.2)
*   **Frontend Tools:** Vite 7.0 & Laravel Vite Plugin
*   **Gaya & Desain:**
    *   **Landing Page:** Bootstrap 5 (statis) dipadukan dengan jQuery, WOW.js, dan Owl Carousel.
    *   **Dashboard Admin:** Kustom CSS modern dengan paduan warna Tripanca (*Deep Blue* & *Cyan*).
*   **Autentikasi:** Laravel Breeze (telah didesain ulang agar bernuansa gelap dan premium).
*   **Database:** MySQL

---

## 💻 Panduan Instalasi Lokal

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek ini di komputer lokal Anda:

1.  **Clone Repositori:**
    ```bash
    git clone https://github.com/HafisYulianto/tripanca-website.git
    cd tripanca-website
    ```

2.  **Instalasi Dependensi PHP & JavaScript:**
    ```bash
    composer install
    npm install
    ```

3.  **Konfigurasi Environment:**
    Salin file `.env.example` menjadi `.env`:
    ```bash
    copy .env.example .env
    ```
    Buka file `.env` dan sesuaikan pengaturan database Anda:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=tripanca_db
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4.  **Generate Application Key:**
    ```bash
    php artisan key:generate
    ```

5.  **Migrasi & Seed Database:**
    Pastikan MySQL/XAMPP Anda sudah aktif dan database `tripanca_db` sudah dibuat, lalu jalankan:
    ```bash
    php artisan migrate --seed
    ```

6.  **Jalankan Server Lokal:**
    Jalankan server Laravel dan compiler aset Vite secara bersamaan:
    *   **Server Backend:** `php artisan serve` (berjalan di `http://127.0.0.1:8000`)
    *   **Vite Dev Server:** `npm run dev`


