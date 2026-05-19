@extends('layouts.admin')

@section('title', 'Data Pendidikan Lanjut')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="fw-bold">Data Pendidikan Lanjut Alumni</h3>
        <a href="{{ route('admin.tambahPendidikan') }}" class="btn btn-primary">+ Tambah Pendidikan</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>No</th>
                <th>Nama Alumni</th>
                <th>Nama Universitas</th>
                <th>Jurusan</th>
                <th>Tahun Masuk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pendidikan as $p)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $p->nama_alumni }}</td>
                <td>{{ $p->nama_universitas }}</td>
                <td>{{ $p->jurusan }}</td>
                <td class="text-center">{{ $p->tahun_masuk }}</td>
                <td class="text-center">
                    <a href="{{ route('admin.editPendidikan', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ route('admin.hapusPendidikan', $p->id) }}" class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center text-muted">Belum ada data pendidikan lanjut</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection