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
				      <li class="active grid"><a  href="#">Barang Dijual</a>

					</li>


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


@yield('content')
	<!---->


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
