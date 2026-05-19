@extends('layouts.admin')

@section('title', 'Edit Pendidikan Lanjut')

@section('content')
<div class="container mt-4">
    <h3 class="fw-bold mb-3">Edit Pendidikan Lanjut Alumni</h3>

    <form action="{{ route('admin.updatePendidikan', $pendidikan->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Alumni</label>
            <input type="text" name="nama_alumni" class="form-control" value="{{ $pendidikan->nama_alumni }}" required>
        </div>
        <div class="mb-3">
            <label>Nama Universitas/Kampus</label>
            <input type="text" name="nama_universitas" class="form-control" value="{{ $pendidikan->nama_universitas }}" required>
        </div>
        <div class="mb-3">
            <label>Jurusan/Prodi</label>
            <input type="text" name="jurusan" class="form-control" value="{{ $pendidikan->jurusan }}" required>
        </div>
        <div class="mb-3">
            <label>Tahun Masuk</label>
            <input type="number" name="tahun_masuk" class="form-control" value="{{ $pendidikan->tahun_masuk }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.pendidikan') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection