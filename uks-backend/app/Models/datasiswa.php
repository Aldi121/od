<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Datasiswa extends Model
{
    // Beritahu Laravel nama tabelnya
    // (karena default Laravel cari tabel "datasiswas" — salah)
    protected $table = 'datasiswa';

    // Kolom mana saja yang BOLEH diisi lewat create()
    // Tanpa ini, Laravel akan error demi keamanan
    protected $fillable = [
        'nama',
        'kelas',
        'tanggal',
        'jam_masuk',
        'keterangan',
        'penanganan',
    ];
}
