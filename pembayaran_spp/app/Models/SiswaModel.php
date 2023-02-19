<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    use HasFactory;

    protected $table = "siswa";
    protected $fillable = [
        'nisn',
        'nama',
        'id_kelas',
        'alamat',
        'no_telp',
        'jk',
        'id_spp',
    ];
}
