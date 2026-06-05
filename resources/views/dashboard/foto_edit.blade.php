@extends('layouts.dashboard')

@section('title', 'Edit Foto')

@section('content')
<div class="main-content">
<div class="container">
    <h2>Edit Foto</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('photos.update', $photo->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="image" class="form-label">Foto</label>
            <input type="file" class="form-control" id="image" name="image">
            @if($photo->image)
                <img src="{{ asset('storage/' . $photo->image) }}" alt="Foto saat ini" style="max-width: 200px; margin-top: 10px;">
            @endif
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $photo->title) }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description">{{ old('description', $photo->description) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('photos.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
</div>
@endsection
