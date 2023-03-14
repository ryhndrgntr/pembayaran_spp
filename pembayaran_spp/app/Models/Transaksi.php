<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = "pembayaran";
    protected $primaryKey = "id_pembayaran";
    protected $fillable = [
        'id_petugas',
        'tgl_bayar',
        'bulan_dibayar',
        'tahun_dibayar',
        'id_spp',
        'jumlah_bayar',
        'id_siswa',
        'is_admin'
    ];
    public $timestamp = true;
}
