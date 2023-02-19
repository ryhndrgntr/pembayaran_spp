<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetugasModel extends Model
{
    use HasFactory;

    protected $table = "petugas";
    protected $fillable = [
        'username',
        'password',
        'nama_petugas',
        'level',
    ];
    public $timestamp = true;
}