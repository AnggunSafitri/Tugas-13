<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjual;

class PenjualController extends Controller
{
    
    public function index()
    {
        $data['penjual'] = auth()->guard('penjual')->user();
        return view('penjual.index', $data);
    }

   
}
