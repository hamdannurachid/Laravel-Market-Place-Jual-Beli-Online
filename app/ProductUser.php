<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductUser extends Model
{
    protected $table = 'barang';

    protected $fillable = ['kode_barang','nama_barang', 'deskripsi_barang', 'harga_barang', 'stok_barang', 'gambar_barang' ];
}
