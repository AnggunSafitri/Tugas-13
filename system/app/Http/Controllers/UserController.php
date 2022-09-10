<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data['list_user'] = User::all();
        return view('backview.user.index', $data);
    }

    public function create()
    {
        return view('backview.user.create');
    }

    public function store(Request $request)
    {
        $user = New User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('admin/user')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show(User $user)
    {
        $data['user'] = $user;
        return view('backview.user.show', $data);
    }

    public function edit(User $user)
    {
        $data['user'] = $user;
        return view('backview.user.edit', $data);
    }

    public function update(User $user)
    {
        $user->nama= request('nama');
        $user->username= request('username');
        $user->email= request('email');
        $user->save();
        return redirect('admin/user')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy($user)
    {
        User::destroy($user);
        return redirect('admin/user')->with('danger', 'Data Berhasil Dihapus');
    }
}
