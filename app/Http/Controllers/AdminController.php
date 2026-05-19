<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Alumni;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Prestasi;


class AdminController extends Controller
{
   public function dashboard()
{
    // cek login admin
    if (!Session::has('user') || Session::get('user')['username'] !== 'Admin') {
        return redirect()->route('login');
    }

    // Ambil jumlah data
    $jumlahAlumni = Alumni::count();
    $jumlahPrestasi = Prestasi::count();

    // Kirim ke view
    return view('admin.dashboard', compact(
        'jumlahAlumni',
        'jumlahPrestasi'
        
    ));
}

    public function dataAlumni(){
        $alumni = Alumni::all();
        return view('admin.dataAlumni', compact('alumni'));

    }
        public function prestasi()
    {
        return view('admin.prestasi');
    }


 

public function createAlumni()
{
    return view('admin.tambahAlumni');
}

public function storeAlumni(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'angkatan' => 'required',
        'jurusan' => 'required',
        'email' => 'required|email|unique:alumnis,email',
        'alamat' => 'required',
        'motivasi' => 'required'
    ]);

    Alumni::create([
        'nama' => $request->nama,
        'angkatan' => $request->angkatan,
        'jurusan' => $request->jurusan,
        'email' => $request->email,
        'alamat' => $request->alamat,
        'motivasi' => $request->motivasi
    ]);

    return redirect()->route('admin.dataAlumni')->with('success', 'Data berhasil ditambahkan!');
}

public function editAlumni($id)
{
    $alumni = Alumni::find($id);
    if (!$alumni) {
        return redirect()->route('admin.dataAlumni')->with('error', 'Data tidak ditemukan!');
    }

    return view('admin.editAlumni', compact('alumni'));
}

public function updateAlumni(Request $request, $id)
{
    $alumni = Alumni::find($id);
    if (!$alumni) {
        return redirect()->route('admin.dataAlumni')->with('error', 'Data tidak ditemukan!');
    }

    $alumni->update([
        'nama' => $request->nama,
        'tahun_lulus' => $request->tahun_lulus,
        'jurusan' => $request->jurusan,
        'alamat' => $request->alamat,
        'motivasi' => $request->motivasi
    ]);

    return redirect()->route('admin.dataAlumni')->with('success', 'Data berhasil diperbarui!');
}

public function hapusAlumni($id)
{
    $alumni = Alumni::find($id);
    if ($alumni) {
        $alumni->delete();
    }

    return redirect()->route('admin.dataAlumni')->with('success', 'Data berhasil dihapus!');
}


public function dataPrestasi()
{
    $prestasi = Prestasi::all();
    return view('admin.prestasi', compact('prestasi'));
}

public function tambahPrestasi()
{
    return view('admin.tambahPrestasi');
}

public function simpanPrestasi(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'deskripsi' => 'required',
        'tahun' => 'required|numeric'
    ]);

    Prestasi::create([
        'nama' => $request->nama,
        'deskripsi' => $request->deskripsi,
        'tahun' => $request->tahun
    ]);

    return redirect()->route('admin.prestasi')->with('success', 'Prestasi berhasil ditambahkan!');
}

public function editPrestasi($id)
{
    $prestasi = Prestasi::findOrFail($id);
    return view('admin.editPrestasi', compact('prestasi'));
}

public function updatePrestasi(Request $request, $id)
{
    $prestasi = Prestasi::findOrFail($id);

    $prestasi->update([
        'nama' => $request->nama,
        'deskripsi' => $request->deskripsi,
        'tahun' => $request->tahun
    ]);

    return redirect()->route('admin.prestasi')->with('success', 'Prestasi berhasil diupdate!');
}

public function hapusPrestasi($id)
{
    $prestasi = Prestasi::find($id);

    if ($prestasi) {
        $prestasi->delete();
    }

    return redirect()->route('admin.prestasi')->with('success', 'Prestasi berhasil dihapus!');
}

    // ===================== PEKERJAAN =====================
public function dataPekerjaan() {
    $pekerjaan = Pekerjaan::all();
    return view('admin.pekerjaan.pekerjaan', compact('pekerjaan'));
}

public function tambahPekerjaan() {
     $alumnis = Alumni::all();
    return view('admin.pekerjaan.tambahPekerjaan', compact('alumnis'));
}

public function simpanPekerjaan(Request $request) {
    $request->validate([
        'alumni_id' => 'required',
        'nama_perusahaan' => 'required',
        'posisi' => 'required',
        'tahun_mulai' => 'required|numeric'
    ]);
    Pekerjaan::create($request->all());
    return redirect()->route('admin.pekerjaan')->with('success', 'Data pekerjaan berhasil ditambahkan!');
}

public function editPekerjaan($id) {
    $pekerjaan = Pekerjaan::findOrFail($id);
    return view('admin.pekerjaan.editPekerjaan', compact('pekerjaan'));
}

public function updatePekerjaan(Request $request, $id) {
    $pekerjaan = Pekerjaan::findOrFail($id);
    $pekerjaan->update($request->all());
    return redirect()->route('admin.pekerjaan')->with('success', 'Data pekerjaan berhasil diupdate!');
}

public function hapusPekerjaan($id) {
    Pekerjaan::findOrFail($id)->delete();
    return redirect()->route('admin.pekerjaan')->with('success', 'Data pekerjaan berhasil dihapus!');
}

// ===================== PENDIDIKAN LANJUT =====================
public function dataPendidikan() {
    $pendidikan = Pendidikan::all();
    return view('admin.pendidikan.pendidikan', compact('pendidikan'));
}

public function tambahPendidikan() {
    $alumnis = Alumni::all();
    return view('admin.pendidikan.tambahPendidikan', compact('alumnis'));
}
public function simpanPendidikan(Request $request) {
    $request->validate([
        'alumni_id' => 'required',
        'nama_universitas' => 'required',
        'jurusan' => 'required',
        'tahun_masuk' => 'required|numeric'
    ]);
    Pendidikan::create($request->all());
    return redirect()->route('admin.pendidikan')->with('success', 'Data pendidikan lanjut berhasil ditambahkan!');
}

public function editPendidikan($id) {
    $pendidikan = Pendidikan::findOrFail($id);
    return view('admin.pendidikan.editPendidikan', compact('pendidikan'));
}

public function updatePendidikan(Request $request, $id) {
    $pendidikan = Pendidikan::findOrFail($id);
    $pendidikan->update($request->all());
    return redirect()->route('admin.pendidikan')->with('success', 'Data pendidikan lanjut berhasil diupdate!');
}

public function hapusPendidikan($id) {
    Pendidikan::findOrFail($id)->delete();
    return redirect()->route('admin.pendidikan')->with('success', 'Data pendidikan lanjut berhasil dihapus!');
}
}