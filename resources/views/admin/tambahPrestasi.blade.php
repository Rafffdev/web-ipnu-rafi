@extends('layouts.admin')


@section('content')
<div class="container mt-4">

    <h3 class="fw-bold mb-3">Tambah Prestasi Alumni</h3>

   <form action="{{ route('admin.simpanPrestasi') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nama Prestasi</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control" required></textarea>
    </div>

    <div class="mb-3">
        <label>Tahun</label>
        <input type="number" name="tahun" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

</div>
@endsection
