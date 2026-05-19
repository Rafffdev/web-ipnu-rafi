@extends('layouts.admin')

@section('title', 'Data Pekerjaan')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="fw-bold">Data Pekerjaan Alumni</h3>
        <a href="{{ route('admin.tambahPekerjaan') }}" class="btn btn-primary">+ Tambah Pekerjaan</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>No</th>
                <th>Nama Alumni</th>
                <th>Nama Perusahaan</th>
                <th>Posisi</th>
                <th>Tahun Mulai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pekerjaan as $p)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $p->nama_alumni }}</td>
                <td>{{ $p->nama_perusahaan }}</td>
                <td>{{ $p->posisi }}</td>
                <td class="text-center">{{ $p->tahun_mulai }}</td>
                <td class="text-center">
                    <a href="{{ route('admin.editPekerjaan', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ route('admin.hapusPekerjaan', $p->id) }}" class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center text-muted">Belum ada data pekerjaan</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection