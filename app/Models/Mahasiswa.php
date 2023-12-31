<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim', 'nama_mhs', 'tempat_lahir', 'tgl_lahir', 'alamat', 'prodi_id'
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
}
