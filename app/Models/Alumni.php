<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'angkatan',
        'jurusan',
        'email',
        'no_telp',
        'alamat',
        'motivasi'
    ];

        public function pendidikans()
    {
        return $this->hasMany(Pendidikan::class);
    }
    public function pekerjaans()
    {
        return $this->hasMany(Pekerjaan::class);
    }
}
