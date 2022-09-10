<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Penjual;

class RegisterController extends Controller
{
    
    public function registerClient()
    {
        return view('backview.register-client');
    }

    public function storeClient(Request $request)
    {
        $client = New Client();
        $client->nama = request('nama');
        $client->username = request('username');
        $client->confir_password = request('confir_password');
        $client->email = request('email');
        $client->no_hp = request('no_hp');
        $client->level = 1;
        $client->save();

        return redirect('login')->with('success', 'Data Anda Berhasil Terkirim');
    }



    public function registerPenjual()
    {
        return view('backview.register-penjual');
    }

    public function storePenjual(Request $request)
    {
        $penjual = New Penjual();
        $penjual->nama = request('nama');
        $penjual->nama_toko = request('nama_toko');
        $penjual->username = request('username');
        $penjual->confir_password = request('confir_password');
        $penjual->email = request('email');
        $penjual->no_hp = request('no_hp');
        $penjual->level = 1;
        $penjual->save();

        return redirect('login')->with('success', 'Data Anda Berhasil Terkirim');
    }

   
}
