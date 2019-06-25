@extends('pengguna.index')

@section('content')

<div class="container">
		<div class="product">
		<h2 class="new">NEW ARRIVALS</h2>
		<div class="pink">

            @foreach($data as $datas)
                   <div class="col-md-3 box-in-at">
                        <div class=" grid_box portfolio-wrapper">
                                         {{-- <a href="single.html" > <img src="{{asset('markito-web/images/fa.jpg')}}" class="img-responsive" alt=""> --}}
                                            <a href="">
                                            <img class="img-responsive" src="{{ url('uploads/product/'.$datas->gambar_barang) }}" alt="image"/ style="width:300px; height:350px;">
                                             <div class="zoom-icon">

                                                <ul class="in-by">
                                                    <li><h5>{{ $datas->nama_barang }}</h5></li>

                                                </ul>


                                                <ul class="in-by-color">
                                                        <li><p>{{ $datas->deskripsi_barang }}</p></li>

                                                    </ul>

                                    </div> </a>
                               </div>
                            <!---->
                                    <div class="grid_1 simpleCart_shelfItem">
                                        <a href="#" class="cup item_add"><span class=" item_price" > Rp. {{ $datas->harga_barang }} <i> </i> </span></a>
                                    </div>
                                <!---->
                            </div>
                            @endforeach
                            </div>









				<div class="clearfix"></div>
		</div>
		</div>
		<!---->
	</div>
@endsection
