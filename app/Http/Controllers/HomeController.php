<?php

namespace App\Http\Controllers;

use App\Models\KategoriMakanan;
use App\Models\Makanan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $makanans = Makanan::orderBy('id', 'desc')->limit('3')->get();
        $kategori_makanan = KategoriMakanan::orderBy('kategori_makanan', 'asc')->get();

        return view('home', compact('makanans', 'kategori_makanan'));
    }

    public function show($id)
    {
        $m = Makanan::find($id);
        $makanans = Makanan::orderBy('id', 'desc')->get();

        return view('makanan', compact('m', 'makanans'));
    }

    public function kategori_makanan($id)
    {
        $km = KategoriMakanan::find($id);
        $makanans = Makanan::where('kategori_makanan_id', $km->id)->get();
        // dd($makanans);

        return view('data-kategori-makanan', compact('km', 'makanans'));
    }
}
