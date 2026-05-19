<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::get('/', [UserController::class, 'index'])->name('user.index');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/dataAlumni', [AdminController::class, 'dataAlumni'])->name('admin.dataAlumni');
Route::get('/admin/prestasi', [AdminController::class, 'dataPrestasi'])->name('admin.prestasi');
Route::get('/admin/pekerjaan', [AdminController::class, 'dataPekerjaan'])->name('admin.pekerjaan');
Route::get('/admin/pendidikan', [AdminController::class, 'dataPendidikan'])->name('admin.pendidikan');

// ===================== DATA ALUMNI CRUD =====================
Route::get('/admin/data-alumni/tambah', [AdminController::class, 'createAlumni'])->name('admin.tambahAlumni');
Route::post('/admin/data-alumni/simpan', [AdminController::class, 'storeAlumni'])->name('admin.simpanAlumni');
Route::get('/admin/data-alumni/edit/{id}', [AdminController::class, 'editAlumni'])->name('admin.editAlumni');
Route::post('/admin/data-alumni/update/{id}', [AdminController::class, 'updateAlumni'])->name('admin.updateAlumni');
Route::get('/admin/data-alumni/hapus/{id}', [AdminController::class, 'hapusAlumni'])->name('admin.hapusAlumni');

// ===================== PRESTASI CRUD =====================
Route::get('/admin/prestasi/tambah', [AdminController::class, 'tambahPrestasi'])->name('admin.tambahPrestasi');
Route::post('/admin/prestasi/tambah', [AdminController::class, 'simpanPrestasi'])->name('admin.simpanPrestasi');
Route::get('/admin/prestasi/edit/{id}', [AdminController::class, 'editPrestasi'])->name('admin.editPrestasi');
Route::post('/admin/prestasi/update/{id}', [AdminController::class, 'updatePrestasi'])->name('admin.updatePrestasi');
Route::get('/admin/prestasi/hapus/{id}', [AdminController::class, 'hapusPrestasi'])->name('admin.hapusPrestasi');

// ===================== PEKERJAAN CRUD =====================
Route::get('/admin/pekerjaan/tambah', [AdminController::class, 'tambahPekerjaan'])->name('admin.tambahPekerjaan');
Route::post('/admin/pekerjaan/simpan', [AdminController::class, 'simpanPekerjaan'])->name('admin.simpanPekerjaan');
Route::get('/admin/pekerjaan/edit/{id}', [AdminController::class, 'editPekerjaan'])->name('admin.editPekerjaan');
Route::post('/admin/pekerjaan/update/{id}', [AdminController::class, 'updatePekerjaan'])->name('admin.updatePekerjaan');
Route::get('/admin/pekerjaan/hapus/{id}', [AdminController::class, 'hapusPekerjaan'])->name('admin.hapusPekerjaan');

// ===================== PENDIDIKAN LANJUT CRUD =====================
Route::get('/admin/pendidikan/tambah', [AdminController::class, 'tambahPendidikan'])->name('admin.tambahPendidikan');
Route::post('/admin/pendidikan/simpan', [AdminController::class, 'simpanPendidikan'])->name('admin.simpanPendidikan');
Route::get('/admin/pendidikan/edit/{id}', [AdminController::class, 'editPendidikan'])->name('admin.editPendidikan');
Route::post('/admin/pendidikan/update/{id}', [AdminController::class, 'updatePendidikan'])->name('admin.updatePendidikan');
Route::get('/admin/pendidikan/hapus/{id}', [AdminController::class, 'hapusPendidikan'])->name('admin.hapusPendidikan');