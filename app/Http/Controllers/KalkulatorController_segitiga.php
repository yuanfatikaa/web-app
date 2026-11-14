<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function segitiga(Request $request)
    {
        // Ambil nilai alas dan tinggi dari parameter URL (parsing data), default 0 jika kosong
        $alas = $request->input('alas', 0);
        $tinggi = $request->input('tinggi', 0);

        // Hitung luas segitiga
        $luas = 0.5 * $alas * $tinggi;

        // Kirim data ke view
        return view('kalkulator.segitiga', compact('alas', 'tinggi', 'luas'));
    }
}