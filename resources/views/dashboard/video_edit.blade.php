@extends('layouts.dashboard')

@section('title', 'Edit Video')

@section('content')
<div class="main-content">
<div class="container">
    <h2>Edit Video</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('videos.update', $video->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="url" class="form-label">URL Video (YouTube Embed URL)</label>
            <input type="url" class="form-control" id="url" name="url" value="{{ old('url', $video->url) }}" required placeholder="https://www.youtube.com/watch?v=VIDEO_ID or https://youtu.be/VIDEO_ID">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $video->title) }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description">{{ old('description', $video->description) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('videos.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
</div>
@endsection
