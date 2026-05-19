@extends('layouts.admin')

@section('title', 'Data alumni')

@section('content')
<div class="container mt-4">
    <h2>Data Alumni</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.tambahAlumni') }}" class="btn btn-primary mb-3">+ Tambah Alumni</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Angkatan</th>
                <th>Jurusan</th>
                <th>Pekerjaan</th>
                <th>Pendidikan</th>
                <th>Alamat</th>
                <th>Motivasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($alumni as $a)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $a->nama }}</td>
                    <td>{{ $a->email }}</td>
                    <td>{{ $a->angkatan }}</td>
                    <td>{{ $a->jurusan }}</td>

                    <!-- PEKERJAAN -->
                    <td>
                        @forelse($a->pekerjaans as $p)
                            {{ $p->nama_perusahaan }} ({{ $p->posisi }}) <br>
                        @empty
                            -
                        @endforelse
                    </td>

                    <!-- PENDIDIKAN -->
                    <td>
                        @forelse($a->pendidikans as $pd)
                            {{ $pd->nama_universitas }} ({{ $pd->jurusan }}) <br>
                        @empty
                            -
                        @endforelse
                    </td>

                    <td>{{ $a->alamat }}</td>
                    <td>{{ $a->motivasi }}</td>

                    <td>
                        <a href="{{ route('admin.editAlumni', $a->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('admin.hapusAlumni', $a->id) }}" class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" class="text-center">Belum ada data alumni</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection