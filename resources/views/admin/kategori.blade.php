@extends('admin')

@section('main')
<div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Kategori</h1>
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
      <h3 class="tile-title">Tambah Kategori Baru</h3>
      <div class="tile-body">
        <form class="form-horizontal" action="{{ route('admin.kategori.store') }}">
                @csrf
          <div class="form-group row">
          <div class="form-group row">
            <label class="control-label col-md-3">Nama Kategori</label>
            <div class="col-md-8">
              <input class="form-control" type="text" placeholder="nama kategori" name="name">
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3">Deskripsi</label>
            <div class="col-md-8">
            <h3 class="tile-title">Tambah Kategori </h3>
              <input class="form-control col-md-8" type="text" placeholder="deskripsi" name="deskripsi">
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 col-md-offset-3">
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
          </div>
          </div>
        </form>
      </div>

    </div>
  </div>

@endsection