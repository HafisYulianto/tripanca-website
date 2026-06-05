<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

use App\Models\Testimonial;

Route::get('/', function () {
    $banners = \App\Models\Banner::all();
    $testimonials = Testimonial::all();
    $blogs = \App\Models\Blog::whereNotNull('published_at')
        ->orderBy('published_at', 'desc')
        ->take(3)
        ->get();
    return view('landing.welcome', compact('banners', 'testimonials', 'blogs'));
});

Route::get('/dashboard', function () {
    $stats = [
        'banners' => \App\Models\Banner::count(),
        'products' => \App\Models\Product::count(),
        'blogs' => \App\Models\Blog::count(),
        'testimonials' => \App\Models\Testimonial::count(),
        'photos' => \App\Models\Photo::count(),
        'videos' => \App\Models\Video::count(),
    ];
    return view('dashboard', compact('stats'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/tentang', function () {
    return view('landing.tentang');
});

Route::get('/layanan', function () {
    return view('landing.layanan');
});

Route::get('/blog', function () {
    $blogs = \App\Models\Blog::whereNotNull('published_at')->orderBy('published_at', 'desc')->get();
    return view('landing.blog', compact('blogs'));
});

Route::get('/blog/{slug}', function ($slug) {
    $blog = \App\Models\Blog::where('slug', $slug)->firstOrFail();
    return view('landing.blog_detail', compact('blog'));
})->name('blog.detail');

Route::get('/bloger', [BlogController::class, 'index']);

Route::get('/sejarah', function () {
    return view('landing.sejarah');
});

Route::get('/bidangusaha', function () {
    return view('landing.bidangusaha');
});

Route::resource('photos', \App\Http\Controllers\PhotoController::class)->middleware('auth');
Route::resource('videos', \App\Http\Controllers\VideoController::class)->middleware('auth');

Route::get('/video', function () {
    $videos = \App\Models\Video::all();
    return view('landing.video', compact('videos'));
});

Route::get('/kontak', function () {
    return view('landing.kontak');
});

Route::get('/produk-kami', function () {
    $products = \App\Models\Product::all();
    return view('landing.produk', compact('products'));
});

Route::get('/banner', [BannerController::class, 'index'])->middleware('auth');
Route::get('/produk', [ProductController::class, 'index'])->middleware('auth');
Route::get('/ulasan', [TestimonialController::class, 'index'])->middleware('auth');
Route::get('/kelolafoto', [\App\Http\Controllers\PhotoController::class, 'index'])->middleware('auth');


// Landing page routes - harus sebelum route resource dan auth
Route::get('/visimisi', function () {
    $visimisi = \App\Models\Visimisi::first();
    return view('landing.visimisi', compact('visimisi'));
});

// CRUD routes untuk admin - harus menggunakan middleware auth
Route::resource('kelolavisimisi', \App\Http\Controllers\VisimisiController::class)->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('banners', BannerController::class);
    Route::resource('produks', \App\Http\Controllers\ProductController::class);
    Route::resource('testimonials', \App\Http\Controllers\TestimonialController::class);
    Route::resource('blogs', BlogController::class);
});

Route::get('/foto', function () {
    $photos = \App\Models\Photo::all();
    return view('landing.foto', compact('photos'));
});

require __DIR__ . '/auth.php';
