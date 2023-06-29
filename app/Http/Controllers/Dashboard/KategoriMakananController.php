<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\KategoriMakanan;
use Illuminate\Http\Request;

class KategoriMakananController extends Controller
{
    public function index()
    {
        $kategori_makanan = KategoriMakanan::orderBy('id', 'desc')->get();

        return view('dashboard.kategori-makanan.index', compact('kategori_makanan'));
    }

    public function create()
    {
        return view('dashboard.kategori-makanan.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'kategori_makanan' => 'required',
        ]);

        $kategori_makanan = KategoriMakanan::create($validate);

        return redirect()->route('kategori-makanan.index')->with('status', 'Data Kategori Makanan Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $km = KategoriMakanan::find(decrypt($id));

        return view('dashboard.kategori-makanan.edit', compact('km'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'kategori_makanan' => 'required',
        ]);

        $kategori_makanan = KategoriMakanan::find(decrypt($id))->update($validate);

        return redirect()->route('kategori-makanan.index')->with('status', 'Data Kategori Makanan Berhasil Di Update');
    }

    public function destroy($id)
    {
        $kategori_makanan = KategoriMakanan::find(decrypt($id))->delete();

        return redirect()->route('kategori-makanan.index')->with('status', 'Data Kategori Makanan Berhasil Di Hapus');
    }
}
