@extends('layouts.dashboard')

@section('title', 'Tambah Banner')

@section('content')
<div class="main-content">
<div class="container">
    <h2>Tambah Banner Baru</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Gambar Banner</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Subjudul</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="button1_text" class="form-label">Teks Tombol 1</label>
            <input type="text" class="form-control" id="button1_text" name="button1_text" value="{{ old('button1_text') }}">
        </div>
        <div class="mb-3">
            <label for="button1_link" class="form-label">Link Tombol 1</label>
            <input type="url" class="form-control" id="button1_link" name="button1_link" value="{{ old('button1_link') }}">
        </div>
        <div class="mb-3">
            <label for="button2_text" class="form-label">Teks Tombol 2</label>
            <input type="text" class="form-control" id="button2_text" name="button2_text" value="{{ old('button2_text') }}">
        </div>
        <div class="mb-3">
            <label for="button2_link" class="form-label">Link Tombol 2</label>
            <input type="url" class="form-control" id="button2_link" name="button2_link" value="{{ old('button2_link') }}">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Banner</button>
        <a href="{{ route('banners.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
</div>
@endsection
