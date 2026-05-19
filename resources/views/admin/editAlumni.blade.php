@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>Edit Data Alumni</h2>

    <form action="{{ route('admin.updateAlumni', $alumni->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ $alumni->nama }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ $alumni->email }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Angkatan</label>
            <input type="text" name="angkatan" value="{{ $alumni->angkatan }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jurusan</label>
            <input type="text" name="jurusan" value="{{ $alumni->jurusan }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan" value="{{ $alumni->pekerjaan }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <input type="text" name="alamat" value="{{ $alumni->alamat }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Motivasi</label>
            <input type="text" name="motivasi" value="{{ $alumni->motivasi }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.dataAlumni') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
