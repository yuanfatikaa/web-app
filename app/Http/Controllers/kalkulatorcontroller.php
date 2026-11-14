<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    // Fungsi bawaan kalkulator lain (jika ada)
    public function home()
    {
        // ...
    }

    // Fungsi untuk menghitung luas segitiga
    public function segitiga(Request $request)
    {
        $alas = $request->input('alas', 0);
        $tinggi = $request->input('tinggi', 0);

        // Rumus perhitungan luas segitiga yang bersih
        $luas = 0.5 * $alas * $tinggi;

        return view('kalkulator.segitiga', compact('alas', 'tinggi', 'luas'));
    }
}