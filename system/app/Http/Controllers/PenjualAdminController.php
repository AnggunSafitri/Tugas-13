<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjual;

class PenjualAdminController extends Controller
{
    
    public function index()
    {
        $data['list_penjual'] = Penjual::all();
        return view('backview.penjual.index', $data);
    }

    
    public function create()
    {
        return view('backview.penjual.create');
    }

    
    public function store(Request $request)
    {
        $penjual = New Penjual;
        $penjual->nama_penjual = request('nama_penjual');
        $penjual->save();

        return redirect('admin/penjual')->with('success', 'Data Berhasil Di simpan');

    }

    public function show(Penjual $penjual)
    {
        $data['penjual'] = $Penjual;
        return view('backview.penjual.show', $data);
    }

    public function edit(Penjual $penjual)
    {
        $data['penjual'] = $Penjual;
        return view('backview.penjual.edit', $data);
    }

   
    public function update(Penjual $penjual)
    {
        $penjual->nama_penjual = request('nama_penjual');
        $penjual->save();

        return redirect('admin/penjual')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy($penjual)
    {
        Penjual::destroy($penjual);

        return back()->with('danger', 'Data Berhasil Di Hapus');
    }

    public function confirPenjual(Penjual $penjual)
    {
        $penjual->confir_password = request('confir_password');
        $penjual->password = request('confir_password');
        $penjual->level = 2;
        $penjual->save();
        return back()->with('success', 'Data Berhasil Di Konfirmasi');
    }
}
