@extends('home')

@section('main')
	<div class="banner">
		<div class="container">
		  <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
			 <article style="position: absolute; width: 100%; opacity: 0;">
				   	<div class="banner-wrap">

						<div class="banner-top">
						<a href="single.html">
						<div class="banner-top-in">
							<img src="{{ asset ('markito-web/images/ba.png') }}" class="img-responsive" alt="">
						</div></a>
						<div class="cart-at grid_1 simpleCart_shelfItem">
								<div class="item_add"><span class="item_price" >123 $ <i> </i> </span></div>
							<div class="off">
								<label>35% off !</label>
								<p>White Blended Cotton "still fresh" t-shirt</p>
							</div>
						</div>
						<div class="clearfix"> </div>

						</div>


						  <div class="banner-top banner-bottom">
						 <a href="single.html">
						<div class="banner-top-in at">
							<img src="{{ asset ('markito-web/images/ba2.png') }}" class="img-responsive" alt="">
						</div></a>
						<div class="cart-at grid_1 simpleCart_shelfItem">
								<div class="item_add"><span class="item_price" >123 $ <i> </i> </span></div>
							<div class="off">
								<label>35% off !</label>
								<p>White Blended Cotton "still fresh" t-shirt</p>
							</div>
						</div>
						<div class="clearfix"> </div>

						</div>

				   		 <div class="clearfix"> </div>

				   	 </div>
			</article>
			 <article style="position: absolute; width: 100%; opacity: 0;">
				   		<div class="banner-wrap">

						<div class="banner-top">
						<a href="single.html">
						<div class="banner-top-in">
							<img src="{{ asset ('markito-web/images/ba11.png') }}" class="img-responsive" alt="">
						</div></a>
						<div class="cart-at grid_1 simpleCart_shelfItem">
								<div class="item_add"><span class="item_price" >123 $ <i> </i> </span></div>
							<div class="off">
								<label>35% off !</label>
								<p>White Blended Cotton "still fresh" t-shirt</p>
							</div>
						</div>
						<div class="clearfix"> </div>

						</div>


						  <div class="banner-top banner-bottom">
						  <a href="single.html">
						<div class="banner-top-in at">
							<img src="{{ asset ('markito-web/images/ba21.png') }}" class="img-responsive" alt="">
						</div></a>
						<div class="cart-at grid_1 simpleCart_shelfItem">
								<div class="item_add"><span class="item_price" >123 $ <i> </i> </span></div>
							<div class="off">
								<label>35% off !</label>
								<p>White Blended Cotton "still fresh" t-shirt</p>
							</div>
						</div>
						<div class="clearfix"> </div>

						</div>

				   		 <div class="clearfix"> </div>

				   	 </div>
			</article>
			 <article style="position: absolute; width: 100%; opacity: 0;">
				   		<div class="banner-wrap">

						<div class="banner-top">
						<a href="single.html">
						<div class="banner-top-in">
							<img src="{{ asset ('markito-web/images/ba12.png') }}" class="img-responsive" alt="">
						</div></a>
						<div class="cart-at grid_1 simpleCart_shelfItem">
								<div class="item_add"><span class="item_price" >123 $ <i> </i> </span></div>
							<div class="off">
								<label>35% off !</label>
								<p>White Blended Cotton "still fresh" t-shirt</p>
							</div>
						</div>
						<div class="clearfix"> </div>

						</div>


						   <div class="banner-top banner-bottom">
						  <a href="single.html">
						<div class="banner-top-in at">
							<img src="{{ asset ('markito-web/images/ba22.png') }}" class="img-responsive" alt="">
						</div></a>
						<div class="cart-at grid_1 simpleCart_shelfItem">
								<div class="item_add"><span class="item_price" >123 $ <i> </i> </span></div>
							<div class="off">
								<label>35% off !</label>
								<p>White Blended Cotton "still fresh" t-shirt</p>
							</div>
						</div>
						<div class="clearfix"> </div>

						</div>
				   		 <div class="clearfix"> </div>

				   	 </div>
			</article>
			</div>
			 <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="wmuActive">2</a></li>
                </ul>
		</div>
		<!---->
		  <script src="{{ asset('markito-web/js/jquery.wmuSlider.js') }}"></script>
			  <script>
       			$('.example1').wmuSlider({
					 pagination : true,
					 nav : false,
				});
   		     </script>

		</div>
	</div>
@endsection