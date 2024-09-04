<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function total()
    {
        $totalHarga = 4500000;
        return view('blog.penjualan')->with('transaksi', $totalHarga);
    }
}