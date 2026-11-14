<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web extends Controller
{
    public function home() {
        return "<h1>Ini adalah Controllers Web</h1>";
    }

    public function profil($nama = null) {
        if ($nama) {
            return "<h2>Laman Profil " . $nama . "</h2>";
        }
        return "<h2>Ini adalah Laman Profil Utama</h2>";
    }

    public function biodata() { 
        $data['nama'] = 'Devana putri yuanfatika'; 
        $data['alamat'] = 'Kediri'; 
        return view('biodata', $data); 
    }
}