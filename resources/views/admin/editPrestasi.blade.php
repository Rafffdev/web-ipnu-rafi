@extends('layouts.admin')

@section('content')
<div class="container mt-4">

    <h3 class="fw-bold mb-3">Edit Prestasi</h3>

    <form action="{{ route('admin.updatePrestasi', $prestasi->id) }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Prestasi</label>
            <input type="text" name="nama" class="form-control" value="{{ $prestasi->nama }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="3" required>{{ $prestasi->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Tahun</label>
            <input type="number" name="tahun" class="form-control" value="{{ $prestasi->tahun }}" required>
        </div>

        <a href="{{ route('admin.prestasi') }}" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-success">Update</button>
    </form>

</div>
@endsection
    