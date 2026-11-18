<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
class Dashboard extends Controller
{ 
    public function home() { 
        $data['judul']='Laman Home'; 
        $data['isi']='Lorem ipsum dolor sit amet'; 
        return view('dashboard',$data); 
    }
}
