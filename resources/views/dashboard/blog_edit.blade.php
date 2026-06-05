@extends('layouts.dashboard')

@section('title', 'Edit Blog')

@section('content')
<div class="main-content">
<div class="container">
    <h2>Edit Blog</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="image" class="form-label">Gambar Blog</label>
            @if($blog->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" style="max-width: 200px; max-height: 120px; object-fit: cover;">
                </div>
            @endif
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="published_at" class="form-label">Tanggal Publikasi</label>
            <input type="date" class="form-control" id="published_at" name="published_at" value="{{ old('published_at', $blog->published_at ? $blog->published_at->format('Y-m-d') : '') }}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $blog->title) }}" required>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug', $blog->slug) }}" required>
        </div>
        <div class="mb-3">
            <label for="excerpt" class="form-label">Kutipan Singkat</label>
            <textarea class="form-control" id="excerpt" name="excerpt">{{ old('excerpt', $blog->excerpt) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea class="form-control" id="content" name="content" rows="10">{{ old('content', $blog->content) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
</div>
@endsection
