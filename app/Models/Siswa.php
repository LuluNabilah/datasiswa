<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'jenis_kelamin',
        'agama',
        'alamat',
        'avatar',
    ];
}
