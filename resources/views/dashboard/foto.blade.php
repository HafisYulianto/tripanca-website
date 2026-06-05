@extends('layouts.dashboard')

@section('title', 'Kelola Foto')

@section('content')
<div class="main-content">
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Kelola Galeri Foto</h2>
        <a href="{{ route('photos.create') }}" class="btn btn-primary btn-lg">
            <i class="fas fa-plus"></i> Tambah Foto Baru
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
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($photos as $photo)
                        <tr>
                            <td>
                                @if($photo->image)
                                    <img src="{{ asset('storage/' . $photo->image) }}" alt="Gambar Foto" style="max-width: 100px; max-height: 60px; object-fit: cover;">
                                @endif
                            </td>
                            <td>{{ Str::limit($photo->title, 30) }}</td>
                            <td>{{ Str::limit($photo->description, 50) }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('photos.edit', $photo->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('photos.destroy', $photo->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus foto ini?');">
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
                                    <i class="fas fa-image fa-3x mb-3"></i>
                                    <p>Belum ada foto. <a href="{{ route('photos.create') }}">Tambah foto pertama</a></p>
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
