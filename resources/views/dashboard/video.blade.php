@extends('layouts.dashboard')

@section('title', 'Kelola Video')

@section('content')
<div class="main-content">
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Kelola Video</h2>
        <a href="{{ route('videos.create') }}" class="btn btn-primary btn-lg">
            <i class="fas fa-plus"></i> Tambah Video Baru
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Video</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($videos as $video)
                        <tr>
                            <td>
                                @if($video->thumbnail_url)
                                    <img src="{{ $video->thumbnail_url }}" alt="Thumbnail Video" style="max-width: 150px; max-height: 90px; object-fit: cover;">
                                @else
                                    <span>Tidak Ada Thumbnail</span>
                                @endif
                            </td>
                            <td>{{ \Illuminate\Support\Str::limit($video->title, 30) }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($video->description, 50) }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('videos.edit', $video->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('videos.destroy', $video->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus video ini?');">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center py-4">
                                <div class="text-muted">
                                    <i class="fas fa-video fa-3x mb-3"></i>
                                    <p>Belum ada video. <a href="{{ route('videos.create') }}">Tambah video pertama</a></p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
