@extends('layouts.admin')

@section('title', 'Tambah Pekerjaan')

@section('content')
<div class="container mt-4">
    <h3 class="fw-bold mb-3">Tambah Pekerjaan Alumni</h3>

    <form action="{{ route('admin.simpanPekerjaan') }}" method="POST">
        @csrf
        <select name="alumni_id" class="form-control" required>
            <option value="">-- Pilih Alumni --</option>
            @foreach($alumnis as $a)
                <option value="{{ $a->id }}">{{ $a->nama }}</option>
            @endforeach
        </select>
        <div class="mb-3">
            <label>Nama Perusahaan</label>
            <input type="text" name="nama_perusahaan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Posisi/Jabatan</label>
            <input type="text" name="posisi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tahun Mulai</label>
            <input type="number" name="tahun_mulai" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.pekerjaan') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection