<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Home::latest()->paginate(1);
        $data_berita = Berita::latest()->paginate(6);
        
        return view("home.app", compact('data','data_berita'));
    }
    public function profile()
    {
        return view('home.profile');
    }
    public function artikel()
    {
        return view('home.artikel');
    }
    public function rfc()
    {
        return view('home.rfc');
    }
    public function layanan()
    {
        return view('home.layanan');
    }
    public function panduan()
    {
        $data = Home::all();
        return view('home.panduan', compact('data'));
    }
    public function kontak()
    {
        return view('home.kontak');
    }
}
