<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $fillable = [
        'nik',
        'nama_lengkap',
        'email',
        'no_telepon',
        'jenis_kelamin',
        'jabatan',
        'departemen',
        'tanggal_masuk',
        'gaji_pokok',
        'status',
    ];
}