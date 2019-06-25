<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        return view('pengguna/banner');
    }

    public function show_kategori()
    {
        return view('pengguna/home');
    }
}
