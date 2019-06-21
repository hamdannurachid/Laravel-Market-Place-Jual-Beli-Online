@extends('admin')

@section('main')
<head>
<style type="text/css">
  .avatar {
    width: 70px;
    height: 70px;
  }
</style>
</head>
<div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> List Produk</h1>
      <p>A free and open source Bootstrap 4 admin template</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    </ul>
  </div>
  <div class="row">
<div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Daftar Produk </h3>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Gambar</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Deskripsi Barang</th>
                  <th>Harga</th>
                  <th>Stok</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
               @foreach($data as $datas)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>
                      <img class="avatar" src="{{ url('uploads/product/'.$datas->gambar_barang) }}" alt="image"/>
                    </td>
                    <td>{{ $datas->kode_barang }}</td>
                    <td>{{ $datas->nama_barang }}</td>
                    <td>{{ $datas->deskripsi_barang }}</td>
                    <td>{{ $datas->harga_barang }}</td>
                    <td>{{ $datas->stok_barang }}</td>

                  </tr>
                  @endforeach               
              </tbody>
            </table>
          </div>
        </div>
  </div>

@endsection