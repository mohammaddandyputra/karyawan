<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $fillable = [
        'nama_karyawan', 'alamat', 'email', 'tempat_lahir', 'tanggal_lahir', 'gender', 'keahlian',
    ];
}
