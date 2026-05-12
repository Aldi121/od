<?php

namespace App\Http\Controllers;

use App\Models\Datasiswa;     // pakai Model yang kita buat
use Illuminate\Http\Request;  // untuk akses data yang dikirim

class datasiswaController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validasi: pastikan semua field terisi
        $validated = $request->validate([
            'nama'       => 'required|string',
            'kelas'      => 'required|string',
            'tanggal'    => 'required|string',
            'jam_masuk'  => 'required|string',
            'keterangan' => 'required|string',
            'penanganan' => 'required|string',
        ]);

        // 2. Simpan ke database lewat Model
        $data = Datasiswa::create($validated);

        // 3. Kirim balasan JSON ke form.html
        return response()->json([
            'message' => 'Data berhasil disimpan',
            'data'    => $data,
        ], 201);
        // 201 = HTTP status "Created" (berhasil dibuat)
    }
}
