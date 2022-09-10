<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Penjual;

class KategoriPenjualController extends Controller
{
    
    public function index()
    {
        $data['penjual'] = auth()->guard('penjual')->user();

        $data['list_kategori'] = Kategori::all();
        return view('penjual.kategori.index', $data);
    }

    
    public function create()
    {
        $data['penjual'] = auth()->guard('penjual')->user();

        return view('penjual.kategori.create', $data);
    }

    
    public function store(Request $request)
    {
        $kategori = New Kategori;
        $kategori->nama_kategori = request('nama_kategori');
        $kategori->save();

        return redirect('penjual/kategori')->with('success', 'Data Berhasil Di simpan');

    }

   
    public function show(Kategori $kategori)
    {
        $data['penjual'] = auth()->guard('penjual')->user();

        $data['kategori'] = $kategori;
        return view('penjual.kategori.show', $data);
    }

    public function edit(Kategori $kategori)
    {
        $data['penjual'] = auth()->guard('penjual')->user();

        $data['kategori'] = $kategori;
        return view('penjual.kategori.edit', $data);
    }

   
    public function update(Kategori $kategori)
    {
        $kategori->nama_kategori = request('nama_kategori');
        $kategori->save();

        return redirect('penjual/kategori')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy($kategori)
    {
        Kategori::destroy($kategori);

        return back()->with('danger', 'Data Berhasil Di Hapus');
    }
}
