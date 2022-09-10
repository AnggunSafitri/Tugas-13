<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientAdminController extends Controller
{
    
    public function index()
    {
        $data['list_client'] = Client::all();
        return view('backview.client.index', $data);
    }

    
    public function create()
    {
        return view('backview.client.create');
    }

    
    public function store(Request $request)
    {
        $client = New Client;
        $client->nama_kategori = request('nama_kategori');
        $client->save();

        return redirect('admin/kategori')->with('success', 'Data Berhasil Di simpan');

    }

   
    public function show(Client $client)
    {
        $data['client'] = $client;
        return view('backview.client.show', $data);
    }

    public function edit(Client $client)
    {
        $data['client'] = $client;
        return view('backview.client.edit', $data);
    }

   
    public function update(Client $client)
    {
        $client->nama_kategori = request('nama_kategori');
        $client->save();

        return redirect('admin/kategori')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy($client)
    {
        Client::destroy($client);

        return back()->with('danger', 'Data Berhasil Di Hapus');
    }

    public function confirClient(Client $client)
    {
        $client->confir_password = request('confir_password');
        $client->password = request('confir_password');
        $client->level = 2;
        $client->save();
        return back()->with('success', 'Data Berhasil Di Konfirmasi');
    }
}
