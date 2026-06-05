@extends('layouts.dashboard')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <h1>Edit Visi Misi</h1>
            <a href="{{ route('kelolavisimisi.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>

        <form action="{{ route('kelolavisimisi.update', $visimisi->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="card">
                <div class="card-header">
                    <h5>Informasi Utama</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $visimisi->title) }}">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Subjudul</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle', $visimisi->subtitle) }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $visimisi->description) }}</textarea>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h5>Visi</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="visi_title" class="form-label">Judul Visi</label>
                        <input type="text" class="form-control" id="visi_title" name="visi_title" value="{{ old('visi_title', $visimisi->visi_title) }}">
                    </div>
                    <div class="mb-3">
                        <label for="visi_content" class="form-label">Konten Visi</label>
                        <textarea class="form-control" id="visi_content" name="visi_content" rows="3">{{ old('visi_content', $visimisi->visi_content) }}</textarea>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h5>Misi</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="misi_title" class="form-label">Judul Misi</label>
                        <input type="text" class="form-control" id="misi_title" name="misi_title" value="{{ old('misi_title', $visimisi->misi_title) }}">
                    </div>
                    <div class="mb-3">
                        <label for="misi_content" class="form-label">Konten Misi</label>
                        <textarea class="form-control" id="misi_content" name="misi_content" rows="3">{{ old('misi_content', $visimisi->misi_content) }}</textarea>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h5>Detail Item (4 Item)</h5>
                </div>
                <div class="card-body">
                    <!-- Item 1 -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="item1_icon" class="form-label">Ikon 1 (Kelas Font Awesome)</label>
                            <input type="text" class="form-control" id="item1_icon" name="item1_icon" value="{{ old('item1_icon', $visimisi->item1_icon) }}" placeholder="fas fa-tint">
                        </div>
                        <div class="col-md-3">
                            <label for="item1_title" class="form-label">Judul 1</label>
                            <input type="text" class="form-control" id="item1_title" name="item1_title" value="{{ old('item1_title', $visimisi->item1_title) }}">
                        </div>
                        <div class="col-md-6">
                            <label for="item1_content" class="form-label">Konten 1</label>
                            <textarea class="form-control" id="item1_content" name="item1_content" rows="1">{{ old('item1_content', $visimisi->item1_content) }}</textarea>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="item2_icon" class="form-label">Ikon 2 (Kelas Font Awesome)</label>
                            <input type="text" class="form-control" id="item2_icon" name="item2_icon" value="{{ old('item2_icon', $visimisi->item2_icon) }}" placeholder="fas fa-leaf">
                        </div>
                        <div class="col-md-3">
                            <label for="item2_title" class="form-label">Judul 2</label>
                            <input type="text" class="form-control" id="item2_title" name="item2_title" value="{{ old('item2_title', $visimisi->item2_title) }}">
                        </div>
                        <div class="col-md-6">
                            <label for="item2_content" class="form-label">Konten 2</label>
                            <textarea class="form-control" id="item2_content" name="item2_content" rows="1">{{ old('item2_content', $visimisi->item2_content) }}</textarea>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="item3_icon" class="form-label">Ikon 3 (Kelas Font Awesome)</label>
                            <input type="text" class="form-control" id="item3_icon" name="item3_icon" value="{{ old('item3_icon', $visimisi->item3_icon) }}" placeholder="fas fa-users">
                        </div>
                        <div class="col-md-3">
                            <label for="item3_title" class="form-label">Judul 3</label>
                            <input type="text" class="form-control" id="item3_title" name="item3_title" value="{{ old('item3_title', $visimisi->item3_title) }}">
                        </div>
                        <div class="col-md-6">
                            <label for="item3_content" class="form-label">Konten 3</label>
                            <textarea class="form-control" id="item3_content" name="item3_content" rows="1">{{ old('item3_content', $visimisi->item3_content) }}</textarea>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="item4_icon" class="form-label">Ikon 4 (Kelas Font Awesome)</label>
                            <input type="text" class="form-control" id="item4_icon" name="item4_icon" value="{{ old('item4_icon', $visimisi->item4_icon) }}" placeholder="fas fa-rocket">
                        </div>
                        <div class="col-md-3">
                            <label for="item4_title" class="form-label">Judul 4</label>
                            <input type="text" class="form-control" id="item4_title" name="item4_title" value="{{ old('item4_title', $visimisi->item4_title) }}">
                        </div>
                        <div class="col-md-6">
                            <label for="item4_content" class="form-label">Konten 4</label>
                            <textarea class="form-control" id="item4_content" name="item4_content" rows="1">{{ old('item4_content', $visimisi->item4_content) }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('kelolavisimisi.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection