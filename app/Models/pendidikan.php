<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    protected $table = 'pendidikans';

    protected $fillable = [
        'alumni_id',
        'nama_universitas',
        'jurusan',
        'tahun_masuk'
    ];
        public function alumni()
    {
        return $this->belongsTo(Alumni::class);
    }
}