<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    
    public function index()
    {
        $data['list_kategori'] = Kategori::all();
        return view('backview.kategori.index', $data);
    }

    
    public function create()
    {
        return view('backview.kategori.create');
    }

    
    public function store(Request $request)
    {
        $kategori = New Kategori;
        $kategori->nama_kategori = request('nama_kategori');
        $kategori->save();

        return redirect('admin/kategori')->with('success', 'Data Berhasil Di simpan');

    }

   
    public function show(Kategori $kategori)
    {
        $data['kategori'] = $kategori;
        return view('backview.kategori.show', $data);
    }

    public function edit(Kategori $kategori)
    {
        $data['kategori'] = $kategori;
        return view('backview.kategori.edit', $data);
    }

   
    public function update(Kategori $kategori)
    {
        $kategori->nama_kategori = request('nama_kategori');
        $kategori->save();

        return redirect('admin/kategori')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy($kategori)
    {
        Kategori::destroy($kategori);

        return back()->with('danger', 'Data Berhasil Di Hapus');
    }
}
