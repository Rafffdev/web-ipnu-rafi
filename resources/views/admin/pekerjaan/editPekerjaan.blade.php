@extends('layouts.admin')

@section('title', 'Edit Pekerjaan')

@section('content')
<div class="container mt-4">
    <h3 class="fw-bold mb-3">Edit Pekerjaan Alumni</h3>

    <form action="{{ route('admin.updatePekerjaan', $pekerjaan->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Alumni</label>
            <input type="text" name="nama_alumni" class="form-control" value="{{ $pekerjaan->nama_alumni }}" required>
        </div>
        <div class="mb-3">
            <label>Nama Perusahaan</label>
            <input type="text" name="nama_perusahaan" class="form-control" value="{{ $pekerjaan->nama_perusahaan }}" required>
        </div>
        <div class="mb-3">
            <label>Posisi/Jabatan</label>
            <input type="text" name="posisi" class="form-control" value="{{ $pekerjaan->posisi }}" required>
        </div>
        <div class="mb-3">
            <label>Tahun Mulai</label>
            <input type="number" name="tahun_mulai" class="form-control" value="{{ $pekerjaan->tahun_mulai }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.pekerjaan') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection