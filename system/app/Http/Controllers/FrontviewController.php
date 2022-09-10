<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontviewController extends Controller
{
    
    public function index()
    {
        return view('frontview.index');
    }

    public function account()
    {
        return view('frontview.account');
    }


    public function produk()
    {
        return view('frontview.produk');
    }

    public function produkdetail()
    {
        return view('frontview.produkdetail');
    }

   
}
