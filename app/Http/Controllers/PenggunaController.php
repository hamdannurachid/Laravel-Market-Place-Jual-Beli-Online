<?php

namespace App\Http\Controllers;
use App\ProductUser;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        // return view('pengguna/banner');
        return view('pengguna/beranda');
    }

    public function show_kategori()
    {
        return view('pengguna/home');
    }

    public function show(ProductUser $product)
    {
        $data = \App\ProductUser::all();
        return view('pengguna.list_product', compact('data'));
    }


}
