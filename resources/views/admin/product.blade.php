@extends('admin')

@section('main')
<head>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


        <style type="text/css">
          .btn-file {
              position: relative;
              overflow: hidden;
          }
          .btn-file input[type=file] {
              position: absolute;
              top: 0;
              right: 0;
              min-width: 100%;
              min-height: 100%;
              font-size: 100px;
              text-align: right;
              filter: alpha(opacity=0);
              opacity: 0;
              outline: none;
              background: white;
              cursor: inherit;
              display: block;
          }

          #img-upload{
              width: 100px;
              margin-top: 5px;
          }


          table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            width: 40px;
            height: 40px;
            align-content: center;
                }
        </style>

          <script type="text/javascript">
            $(document).ready( function() {
              $(document).on('change', '.btn-file :file', function() {
            var input = $(this),
              label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [label]);
            });

            $('.btn-file :file').on('fileselect', function(event, label) {

                var input = $(this).parents('.input-group').find(':text'),
                    log = label;

                if( input.length ) {
                    input.val(log);
                } else {
                    if( log ) alert(log);
                }

            });


            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#img-upload').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imgInp").change(function(){
                readURL(this);
            });


          });


          $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
          })

        //   $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
        //     $("#success-alert").slideUp(500);
        //     });


            window.setTimeout(function() {
                $(".alert").fadeTo(3000, 500).slideUp(500, function(){
                    $(".alert").slideUp(500);
                    $(this).remove();
                });
            }, 4000);


          </script>
</head>
<div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> produk</h1>
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
      <h3 class="tile-title">Tambah Produk Baru</h3>
      <div class="tile-body">
        <form class="form-horizontal" method="post" action="{{ route ('admin.produk.store') }}" enctype="multipart/form-data">
          {{ csrf_field()}}
          <div class="form-group row">
            <label class="control-label col-md-3">id Produk</label>
            <div class="col-md-8">
              <input class="form-control" type="text" placeholder="id produk" name="kode_barang">
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3">Nama Produk</label>
            <div class="col-md-8">
              <input class="form-control" type="text" placeholder="nama kategori" name="nama_barang">
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3">Deskripsi</label>
            <div class="col-md-8">
              <input class="form-control col-md-8" type="text" placeholder="deskripsi" name="deskripsi_barang">
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3">Harga Produk</label>
            <div class="col-md-8">
              <input class="form-control" type="text" placeholder="nama kategori" name="harga_barang">
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3">Stok Produk</label>
            <div class="col-md-8">
              <input class="form-control" type="text" placeholder="nama kategori" name="stok_barang">
            </div>
          </div>
           <div class="form-group row">
            <label class="control-label col-md-3">Gambar Produk</label>
            <div class="col-md-8">
  <div class="input-group col-xs-12">
                                  <span class="btn btn-file btn-light">
                                            Upload<input type="file" id="imgInp" name="gambar_barang">
                                    </span>
                                  <input type="text" class="form-control file-upload-info" readonly placeholder="Upload Image">
                                </div>
                                <img id='img-upload'/>
                            
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 col-md-offset-3">
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a>
            </div>
          </div>
          </div>
        </form>
      </div>

    </div>
  </div>

@endsection