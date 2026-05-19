@extends('layouts.admin')

@section('title', 'Prestasi')
@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="fw-bold">Data Prestasi Alumni</h3>
        <a href="{{ route('admin.tambahPrestasi') }}" class="btn btn-primary">
            + Tambah Prestasi
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>No</th>
                <th>Nama Prestasi</th>
                <th>Deskripsi</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @php $no = 1; @endphp

            @foreach($prestasi as $p)
            <tr>
                <td class="text-center">{{ $no++ }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->deskripsi }}</td>
                <td class="text-center">{{ $p->tahun }}</td>
                <td class="text-center">
                    <a href="{{ route('admin.editPrestasi', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ route('admin.hapusPrestasi', $p->id) }}"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus?')">
                       Hapus
                    </a>
                </td>
            </tr>
            @endforeach

            @if($prestasi->isEmpty())
            <tr>
                <td colspan="5" class="text-center text-muted">Belum ada data prestasi</td>
            </tr>
            @endif
        </tbody>
    </table>

</div>
@endsection
