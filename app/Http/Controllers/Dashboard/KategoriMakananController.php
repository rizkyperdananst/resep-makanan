<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Makanan;
use Illuminate\Http\Request;
use App\Models\KategoriMakanan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

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
        $kategori_makanan = KategoriMakanan::find(decrypt($id));
        $makanan = Makanan::where('kategori_makanan_id', decrypt($id));
        foreach ($makanan as $m) {
            $m;
            $gambarOld = File::delete('storage/makanans/'. $m->gambar);
            $m->delete();
        }
        $kategori_makanan->delete();

        return redirect()->route('kategori-makanan.index')->with('status', 'Data Kategori Makanan Berhasil Di Hapus');
    }
}
