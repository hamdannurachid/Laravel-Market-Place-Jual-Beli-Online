@extends('admin.index')
@section('main')
<div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Form Samples</h1>
          <p>Sample forms</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>
        </ul>
</div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Tambah Kategori</button>
<hr/>

@if ($message = Session::get('success'))
        <div class="alert alert-success" id="success-alert">
            <p>{{ $message }}</p>
        </div>
@endif



<div class="row">
            <div class="col-md-12">
                <div class="tile">
                  <h3 class="tile-title">List Kategori</h3>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Kategori</th>
                        <th>Detail</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($kategori as $kat)
                      <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $kat->name }}</td>
                        <td>{{ $kat->detail }}</td>
                        <td>
                                <form action="{{ route('kategori.destroy', $kat->id) }}" method="POST">

                                        <a class="btn btn-info" href="{{ route('kategori.show',$kat->id) }}">Show</a>

                                        <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" href="{{ route('kategori.edit',$kat->id) }}">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                  {!! $kategori->render() !!}
                </div>
              </div>







      </div>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Kategori Baru</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{ route('kategori.store') }}" method="POST">
                        @csrf
                <div class="modal-body">

                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Nama Kategori:</label>
                      <input type="text" class="form-control" id="recipient-name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Detail Kategori:</label>
                      <textarea class="form-control" id="message-text" name="detail"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
              </div>
            </div>
          </div>


@endsection

<script>
        $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
            $("#success-alert").slideUp(500);
        });$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
            $("#success-alert").slideUp(500);
        });
        </script>
