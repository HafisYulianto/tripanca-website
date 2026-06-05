@extends('layouts.dashboard')

@section('title', 'Tambah Blog')

@section('content')
<div class="main-content">
<div class="container">
    <h2>Tambah Blog Baru</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Gambar Blog</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="published_at" class="form-label">Tanggal Publikasi</label>
            <input type="date" class="form-control" id="published_at" name="published_at" value="{{ old('published_at') }}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}" required>
        </div>
        <div class="mb-3">
            <label for="excerpt" class="form-label">Kutipan Singkat</label>
            <textarea class="form-control" id="excerpt" name="excerpt">{{ old('excerpt') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea class="form-control" id="content" name="content" rows="10">{{ old('content') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Blog</button>
        <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
</div>
@endsection
