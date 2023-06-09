<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Makanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KategoriMakanan;
use Illuminate\Support\Facades\File;

class MakananController extends Controller
{
    public function index()
    {
        $makanans = Makanan::orderBy('id', 'desc')->get();

        return view('dashboard.makanan.index', compact('makanans'));
    }

    public function create()
    {
        $kategori_makanan = KategoriMakanan::orderBy('kategori_makanan', 'asc')->get();

        return view('dashboard.makanan.create', compact('kategori_makanan'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'gambar' => 'required|image|file|max:5120|mimes:jpg,jpeg,png',
            'kategori_makanan_id' => 'required|integer',
            'nama' => 'required',
            'resep' => 'required'
        ]);
        
        $namereplace = str_replace(" ", "", $request->nama);
        $nama = strtolower($namereplace);

        $extension = $request->file('gambar')->getClientOriginalExtension();
        $namaGambar = $nama. '-' .rand(). '.' . $extension;
        $path = $request->file('gambar')->storeAs('makanans', $namaGambar, 'public');
        
        $makanan = Makanan::create([
            'gambar' => $namaGambar,
            'kategori_makanan_id' => $request->kategori_makanan_id,
            'nama' => $request->nama,
            'resep' => $request->resep
        ]);

        return redirect()->route('makanan.index')->with('status', 'Data Makanan Berhasil Di Tambahkan');
    }

    public function show($id)
    {
        $m = Makanan::find(decrypt($id));

        return view('dashboard.makanan.detail', compact('m'));
    }

    public function edit($id)
    {
        $m = Makanan::find(decrypt($id));
        $kategori_makanan = KategoriMakanan::orderBy('kategori_makanan', 'asc')->get();

        return view('dashboard.makanan.edit', compact('m', 'kategori_makanan'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'gambar' => 'nullable|image|file|max:5120|mimes:jpg,jpeg,png',
            'kategori_makanan_id' => 'required|integer',
            'nama' => 'required',
            'resep' => 'required'
        ]);
        
        $namereplace = str_replace(" ", "", $request->nama);
        $nama = strtolower($namereplace);

        $makanan = Makanan::find(decrypt($id));

        if($request->file('gambar')) {
            $gambarOld = 'storage/makanans/'. $makanan->gambar;
            if(File::exists($gambarOld)) {
                File::delete($gambarOld);

                $extension = $request->file('gambar')->getClientOriginalExtension();
                $namaGambar = $nama. '-' .rand(). '.' . $extension;
                $path = $request->file('gambar')->storeAs('makanans', $namaGambar, 'public');
            }
        } else {
            $namaGambar = $makanan->gambar;
        }

        $makanan = Makanan::find(decrypt($id))->update([
            'gambar' => $namaGambar,
            'kategori_makanan_id' => $request->kategori_makanan_id,
            'nama' => $request->nama,
            'resep' => $request->resep
        ]);

        return redirect()->route('makanan.index')->with('status', 'Data Makanan Berhasil Di Update');
    }

    public function destroy($id)
    {
        $makanan = Makanan::find(decrypt($id));
        $gambarOld = File::delete('storage/makanans/'. $makanan->gambar);
        $makanan->delete();

        return redirect()->route('makanan.index')->with('status', 'Data Makanan Berhasil Di Hapus');
    }
}
