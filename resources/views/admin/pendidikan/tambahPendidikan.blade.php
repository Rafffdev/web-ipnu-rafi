@extends('layouts.admin')

@section('title', 'Tambah Pendidikan Lanjut')

@section('content')
<div class="container mt-4">
    <h3 class="fw-bold mb-3">Tambah Pendidikan Lanjut Alumni</h3>

    <form action="{{ route('admin.simpanPendidikan') }}" method="POST">
        @csrf
        <select name="alumni_id" class="form-control" required>
            <option value="">-- Pilih Alumni --</option>
            @foreach($alumnis as $a)
                <option value="{{ $a->id }}">{{ $a->nama }}</option>
            @endforeach
        </select>
        <div class="mb-3">
            <label>Nama Universitas/Kampus</label>
            <input type="text" name="nama_universitas" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jurusan/Prodi</label>
            <input type="text" name="jurusan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tahun Masuk</label>
            <input type="number" name="tahun_masuk" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.pendidikan') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection