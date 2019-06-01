<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Markito A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<link href="{{ asset('markito-web/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('markito-web/js/jquery.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{ asset('markito-web/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Markito Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Amaranth:400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->

<script type="text/javascript" src="{{ asset('markito-web/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('markito-web/js/easing.js') }}"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
<!-- start menu -->
<link href="{{ asset('markito-web/css/megamenu.css') }}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{ asset('markito-web/js/megamenu.js') }}"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>

<script src="{{ asset('markito-web/js/simpleCart.min.js') }}"> </script>
</head>
<body>
<!--header-->
<div class="header" >
	<div class="top-header" >
		<div class="container">
		<div class="top-head" >
			<div class="header-para">
				<ul class="social-in">
					<li><a href="#"><i> </i></a></li>
					<li><a href="#"><i class="ic"> </i></a></li>
					<li><a href="#"><i class="ic1"> </i></a></li>

				</ul>
			</div>

			<ul class="header-in">
				<li ><a href="products.html" >  brands</a></li>
				<li><a href="404.html">about us</a> </li>
				<li><a href="contact.html">   contact us</a></li>
				<li ><a href="#" >   how to use</a></li>
			</ul>
			<div class="search-top">
				<div class="search">
					<form>
						<input type="text" value="search about something ?" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'search about something ?';}" >
						<input type="submit" value="" >
					</form>
				</div>
				<div class="world">
					<ul >
						<li><a href="#"><span> </span></a> </li>
						<li><select class="in-drop">
							  <option>EN</option>
							  <option>DE</option>
							  <option>ES</option>
							</select>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
		<!---->

		<div class="header-top">
		<div class="container">
		<div class="head-top">
			<div class="logo">
				<a href="index.html"><img src="{{ asset ('markito-web/images/logo.png') }}" alt="" ></a>
			</div>
		<div class="top-nav">
			  <ul class="megamenu skyblue">
				      <li class="active grid"><a  href="#">fashion</a>

					</li>
					<li><a   href="#">furniture & decor</a>
</li>
				    <li class="grid"><a  href="#">mobiles & tablets</a>

			    </li>
						 <li class="grid"><a  href="health.html">health & beauty</a>

			    </li>
				<li><a  href="#">tvs, gaming & cameras</a>

			  </ul>
				</div>
					{{-- <div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="{{ asset ('markito-web/images/cart.png') }}" alt=""/></h3>
						</a>
						<p><a href="" class="simpleCart_empty">Login</a></p>
						<p><a href="" class="simpleCart_empty">Register</a></p>
                        <div class="clearfix"> </div>

                    </div> --}}

                    <div class="cart box_1">
						{{-- <button type="button" class="btn btn-primary">Primary</button> --}}







                            @if (Route::has('login'))
                            <div class="total">

                                @auth
                                    {{-- <a href="{{ url('/') }}">Home</a> --}}
                                    <nav class="main-nav float-right d-none d-lg-block">
                                            <ul>
                                                    <li class="nav-item dropdown">
                                                            <a href="">
                                                                    <h3>
                                                                        <img src="{{ asset ('markito-web/images/cart.png') }}" alt=""/></h3>
                                                                    </a>
                                                    </li>

                                    <li class="nav-item dropdown dropdown-menu-right">

                                        <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-danger active " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                            {{ Auth::user()->name }} <span class="far fa-address-book"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="" href="">
                                                {{ __('Profil Saya') }}
                                            </a>
                                            <br>
                                            <a class="" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>

                                    </li>

                                </ul>

                            </nav>

                                @else
                                    <a href="{{ route('login') }}" class="btn btn-info active" role="button" aria-pressed="true">Login</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-danger active" role="button" aria-pressed="true">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif

                    </div>





				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
</div>
<!--banner-->

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
<div class="content">
	<div class="container">
		<div class="content-top">
		<h2 class="new">NEW ARRIVALS</h2>
		<div class="pink">
			<!-- requried-jsfiles-for owl -->
		<link href="{{ asset('markito-web/css/owl.carousel.css') }}" rel="stylesheet">
		<script src="{{ asset('markito-web/js/owl.carousel.js') }}"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel({
						items : 4,
						lazyLoad : true,
						autoPlay : true,
						pagination : true,
					});
				});
			</script>
		<!-- //requried-jsfiles-for owl -->
			<div id="owl-demo" class="owl-carousel text-center">
			<div class="item">
				<div class=" box-in">
			<div class=" grid_box">
							 <a href="single.html" > <img src="{{ asset ('markito-web/images/pi.jpg') }}" class="img-responsive" alt="">
							 	<div class="zoom-icon">

									<ul class="in-by">
										<li><h5>sizes:</h5></li>
										<li><span>S</span></li>
										<li><span>XS</span></li>
										<li><span>M</span></li>
										<li><span> L</span></li>
										<li><span>XL</span></li>
										<li><span> XXL</span></li>
									</ul>


						<ul class="in-by-color">
							<li><h5>colors:</h5></li>
							<li><span > </span></li>
							<li><span class="color"> </span></li>
							<li><span class="color1"> </span></li>
							<li><span class="color2"> </span></li>
							<li><span class="color3"> </span></li>

						</ul>

						</div> </a>
		           </div>
					<!---->
						<div class="grid_1 simpleCart_shelfItem">
							<a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>
						</div>
					<!---->
				</div>
			</div>
<div class="item">
				<div class=" box-in">
			<div class=" grid_box">
							 <a href="single.html" > <img src="{{ asset ('markito-web/images/pi11.jpg') }}" class="img-responsive" alt="">
							 	<div class="zoom-icon">

									<ul class="in-by">
										<li><h5>sizes:</h5></li>
										<li><span>S</span></li>
										<li><span>XS</span></li>
										<li><span>M</span></li>
										<li><span> L</span></li>
										<li><span>XL</span></li>
										<li><span> XXL</span></li>
									</ul>


						<ul class="in-by-color">
							<li><h5>colors:</h5></li>
							<li><span > </span></li>
							<li><span class="color"> </span></li>
							<li><span class="color1"> </span></li>
							<li><span class="color2"> </span></li>
							<li><span class="color3"> </span></li>

						</ul>

						</div> </a>
		           </div>
				  <!---->
						<div class="grid_1 simpleCart_shelfItem">
							<a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>
						</div>
					<!---->
					<!---
				<a class="cup" href="single.html">123 $<i> </i> </a>
				-->
				</div>
			</div>

			<div class="item">
				<div class=" box-in">
			<div class=" grid_box">
							 <a href="single.html" > <img src="{{ asset ('markito-web/images/pi12.jpg') }}" class="img-responsive" alt="">
							 	<div class="zoom-icon">

									<ul class="in-by">
										<li><h5>sizes:</h5></li>
										<li><span>S</span></li>
										<li><span>XS</span></li>
										<li><span>M</span></li>
										<li><span> L</span></li>
										<li><span>XL</span></li>
										<li><span> XXL</span></li>
									</ul>


						<ul class="in-by-color">
							<li><h5>colors:</h5></li>
							<li><span > </span></li>
							<li><span class="color"> </span></li>
							<li><span class="color1"> </span></li>
							<li><span class="color2"> </span></li>
							<li><span class="color3"> </span></li>

						</ul>

						</div> </a>
		           </div>
				   <!---->
						<div class="grid_1 simpleCart_shelfItem">
							<a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>
						</div>
					<!---->
				</div>
			</div>

			<div class="item">
				<div class=" box-in">
			<div class=" grid_box">
							 <a href="single.html" > <img src="{{ asset ('markito-web/images/pi13.jpg') }}" class="img-responsive" alt="">
							 	<div class="zoom-icon">

									<ul class="in-by">
										<li><h5>sizes:</h5></li>
										<li><span>S</span></li>
										<li><span>XS</span></li>
										<li><span>M</span></li>
										<li><span> L</span></li>
										<li><span>XL</span></li>
										<li><span> XXL</span></li>
									</ul>


						<ul class="in-by-color">
							<li><h5>colors:</h5></li>
							<li><span > </span></li>
							<li><span class="color"> </span></li>
							<li><span class="color1"> </span></li>
							<li><span class="color2"> </span></li>
							<li><span class="color3"> </span></li>

						</ul>

						</div> </a>
		           </div>

				<!---->
						<div class="grid_1 simpleCart_shelfItem">
							<a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>
						</div>
					<!---->
				</div>
			</div>

			<div class="item">
				<div class=" box-in">
			<div class=" grid_box">
							 <a href="single.html" > <img src="{{ asset ('markito-web/images/pi11.jpg') }}" class="img-responsive" alt="">
							 	<div class="zoom-icon">

									<ul class="in-by">
										<li><h5>sizes:</h5></li>
										<li><span>S</span></li>
										<li><span>XS</span></li>
										<li><span>M</span></li>
										<li><span> L</span></li>
										<li><span>XL</span></li>
										<li><span> XXL</span></li>
									</ul>


						<ul class="in-by-color">
							<li><h5>colors:</h5></li>
							<li><span > </span></li>
							<li><span class="color"> </span></li>
							<li><span class="color1"> </span></li>
							<li><span class="color2"> </span></li>
							<li><span class="color3"> </span></li>

						</ul>

						</div> </a>
		           </div>
				<!---->
						<div class="grid_1 simpleCart_shelfItem">
							<a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>
						</div>
					<!---->
				</div>
			</div>

			<div class="item">
				<div class=" box-in">
			<div class=" grid_box">
							 <a href="single.html" > <img src="{{ asset ('markito-web/images/pi13.jpg') }}" class="img-responsive" alt="">
							 	<div class="zoom-icon">

									<ul class="in-by">
										<li><h5>sizes:</h5></li>
										<li><span>S</span></li>
										<li><span>XS</span></li>
										<li><span>M</span></li>
										<li><span> L</span></li>
										<li><span>XL</span></li>
										<li><span> XXL</span></li>
									</ul>


						<ul class="in-by-color">
							<li><h5>colors:</h5></li>
							<li><span > </span></li>
							<li><span class="color"> </span></li>
							<li><span class="color1"> </span></li>
							<li><span class="color2"> </span></li>
							<li><span class="color3"> </span></li>

						</ul>

						</div> </a>
		           </div>
				<!---->
						<div class="grid_1 simpleCart_shelfItem">
							<a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>
						</div>
					<!---->
				</div>
			</div>
<div class="item">
				<div class=" box-in">
			<div class=" grid_box">
							 <a href="single.html" > <img src="{{ asset ('markito-web/images/pi.jpg') }}" class="img-responsive" alt="">
							 	<div class="zoom-icon">

									<ul class="in-by">
										<li><h5>sizes:</h5></li>
										<li><span>S</span></li>
										<li><span>XS</span></li>
										<li><span>M</span></li>
										<li><span> L</span></li>
										<li><span>XL</span></li>
										<li><span> XXL</span></li>
									</ul>


						<ul class="in-by-color">
							<li><h5>colors:</h5></li>
							<li><span > </span></li>
							<li><span class="color"> </span></li>
							<li><span class="color1"> </span></li>
							<li><span class="color2"> </span></li>
							<li><span class="color3"> </span></li>

						</ul>

						</div> </a>
		           </div>
				<!---->
						<div class="grid_1 simpleCart_shelfItem">
							<a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>
						</div>
					<!---->
				</div>
			</div>
<div class="item">
				<div class=" box-in">
			<div class=" grid_box">
							 <a href="single.html" > <img src="{{ asset ('markito-web/images/pi12.jpg') }}" class="img-responsive" alt="">
							 	<div class="zoom-icon">

									<ul class="in-by">
										<li><h5>sizes:</h5></li>
										<li><span>S</span></li>
										<li><span>XS</span></li>
										<li><span>M</span></li>
										<li><span> L</span></li>
										<li><span>XL</span></li>
										<li><span> XXL</span></li>
									</ul>


						<ul class="in-by-color">
							<li><h5>colors:</h5></li>
							<li><span > </span></li>
							<li><span class="color"> </span></li>
							<li><span class="color1"> </span></li>
							<li><span class="color2"> </span></li>
							<li><span class="color3"> </span></li>

						</ul>

						</div> </a>
		           </div>
				<!---->
						<div class="grid_1 simpleCart_shelfItem">
							<a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>
						</div>
					<!---->
				</div>
			</div>
<div class="item">
				<div class=" box-in">
			<div class=" grid_box">
							 <a href="single.html" > <img src="{{ asset ('markito-web/images/pi11.jpg') }}" class="img-responsive" alt="">
							 	<div class="zoom-icon">

									<ul class="in-by">
										<li><h5>sizes:</h5></li>
										<li><span>S</span></li>
										<li><span>XS</span></li>
										<li><span>M</span></li>
										<li><span> L</span></li>
										<li><span>XL</span></li>
										<li><span> XXL</span></li>
									</ul>


						<ul class="in-by-color">
							<li><h5>colors:</h5></li>
							<li><span > </span></li>
							<li><span class="color"> </span></li>
							<li><span class="color1"> </span></li>
							<li><span class="color2"> </span></li>
							<li><span class="color3"> </span></li>

						</ul>

						</div> </a>
		           </div>
				<!---->
						<div class="grid_1 simpleCart_shelfItem">
							<a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>
						</div>
					<!---->
				</div>
			</div>
				<div class="clearfix"> </div>
			</div>

		</div>

		 </div>

		<!---->
	<div class="content-middle">
		<h2 class="middle">BEST SALES</h2>
		<div class="col-best">
			<div class="col-md-4">
				<a href="single.html"><div class="col-in">
					<div class="col-in-left">
						<img src="{{ asset ('markito-web/images/ni.jpg') }}" class="img-responsive" alt="">
					</div>
					</a>
					<div class="col-in-right grid_1 simpleCart_shelfItem">
						<h5>fuel t-shirt  mod : 9509</h5>
						<ul class="star">
							<li><a href="#"><i> </i> </a> </li>
							<li><a href="#"><i> </i> </a> </li>
							<li><a href="#"><i> </i> </a> </li>
							<li><i class="in-star"> </i>  </li>
						</ul>
						<!---->
						<a href="#" class="item_add"><span class="white item_price" >123 $ <i> </i> </span></a>
						<!---->
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4">
				<a href="single.html"><div class="col-in">
					<div class="col-in-left">
						<img src="{{ asset ('markito-web/images/ni1.jpg') }}" class="img-responsive" alt="">
					</div>
					</a>
					<div class="col-in-right grid_1 simpleCart_shelfItem">
						<h5>fuel t-shirt  mod : 9509</h5>
						<ul class="star">
							<li><i> </i>  </li>
							<li><i> </i>  </li>
							<li><i> </i>  </li>
							<li><i class="in-star"> </i>  </li>
						</ul>
						<!---->
						<a href="#" class="item_add"><span class="white item_price" >123 $ <i> </i> </span></a>
						<!---->
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4">
				<a href="single.html"><div class="col-in">
					<div class="col-in-left">
						<img src="{{ asset ('markito-web/images/ni.jpg') }}" class="img-responsive" alt="">
					</div>
					</a>
					<div class="col-in-right grid_1 simpleCart_shelfItem">
						<h5>fuel t-shirt  mod : 9509</h5>
						<ul class="star">
							<li><i> </i>  </li>
							<li><i> </i>  </li>
							<li><i> </i>  </li>
							<li><i class="in-star"> </i>  </li>
						</ul>
						<!---->
						<a href="#" class="item_add"><span class="white item_price" >123 $ <i> </i> </span></a>
						<!---->
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!---->

			<div class="content-bottom">
				<div class="col-md-8 latter">
					<h6>NEWSLETTER</h6>
					<p>sign up now to our newsletter discount! to get the Welcome discount</p>

					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 latter-right">

						<form>
						<div class="join">
							<input type="text" value="your email here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'your email here';}">
							<i> </i>
						</div>
							<input type="submit" value="join us">
						</form>

				</div>
				<div class="clearfix"> </div>
			</div>

	<!---->
	<div class="bottom-content">

			<div class="col-md-4">
				<img src="{{ asset ('markito-web/images/ad1.png') }}" class="img-responsive" alt="">
			</div>
			<div class="col-md-4">
				<img src="{{ asset ('markito-web/images/ad1.png') }}" class="img-responsive" alt="">
			</div>
			<div class="col-md-4">
				<img src="{{ asset ('markito-web/images/ad1.png') }}" class="img-responsive" alt="">
			</div>
			<div class="clearfix"> </div>
		</div>

	</div>
</div>
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-left">
				<a href="index.html"><img src="{{ asset ('markito-web/images/logo.png') }}" alt=""></a>
				<p class="footer-class">© 2015 Markito All Rights Reserved | Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
			<div class="col-md-2 footer-middle">
				<ul>
					<li><a href="404.html">about us</a> </li>
					<li><a href="contact.html">   contact us</a></li>
					<li ><a href="products.html" >  our stores</a></li>
				</ul>
			</div>
			<div class="col-md-4 footer-left-in">
				<ul class="term">
					<li><a href="#">terms and conditions</a> </li>
					<li><a href="#">  markito in the press</a></li>
					<li ><a href="#" >  testimonials</a></li>
				</ul>
				<ul class="term">
					<li><a href="#">join us</a> </li>
					<li><a href="#">  markito videos</a></li>

				</ul>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 footer-right">
				<h5>WE SUPPORT</h5>
				<ul>
					<li><a href="#"><i> </i></a> </li>
					<li><a href="#"><i class="we"> </i></a></li>
					<li ><a href="#" ><i class="we-in"> </i></a></li>
					<li ><a href="#" ><i class="we-at"> </i></a></li>
					<li ><a href="#" ><i class="we-at-at"> </i></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear'
					 		};
							*/

							$().UItoTop({ easingType: 'easeOutQuart' });

						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

	</div>

</body>
</html>
