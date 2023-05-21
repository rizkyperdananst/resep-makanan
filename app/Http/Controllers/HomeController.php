<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $makanans = Makanan::orderBy('id', 'desc')->limit('4')->get();

        return view('home', compact('makanans'));
    }

    public function show($id)
    {
        $m = Makanan::find($id);
        $makanans = Makanan::orderBy('id', 'desc')->get();

        return view('makanan', compact('m', 'makanans'));
    }
}
