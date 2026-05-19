<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use App\Models\Prestasi;


class UserController extends Controller
{
    
    public function index()
    {
        
        // Ambil semua data alumni
        $alumni = Alumni::orderBy('id', 'desc')->paginate(5);
        $motivasi = Alumni::select('nama','angkatan','motivasi')->get();
        $prestasi = Prestasi::select('nama','deskripsi','tahun')->get();

        // Kirim ke view user
        return view('user.index', compact(['alumni','motivasi','prestasi']));
    }
    
}
