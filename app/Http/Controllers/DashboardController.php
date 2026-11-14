<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view('home'); 
    }

    public function product()
    {
        return view('product');
    }

    public function detailProduct($harga)
    {
        return view('detail-product', compact('harga'));
    }

    public function about()
    {
        return view('about');
    }
}