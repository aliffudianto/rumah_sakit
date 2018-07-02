<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Medically a Medical Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>

	<!--meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Medically Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!--//meta tags ends here-->
	<!--booststrap-->
	<link href="../assets/css/bootstrap1.css" rel="stylesheet" type="text/css" media="all">

	<!--//booststrap end-->

	<!-- font-awesome icons -->
	<link href="../assets/css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<link rel="stylesheet" href="../assets/css/chocolat.css" type="text/css" media="screen" />
	<!-- gallery-->
	<link rel="stylesheet" href="../assets/css/owl.carousel.css" type="text/css" media="all">
	<!-- clients-->

	<link rel="stylesheet" href="../assets/css/flexslider.css" type="text/css" media="screen" />
	<!-- banner text slider-->
	<!--stylesheets-->
	<link href="../assets/css/style.css" rel='stylesheet' type='text/css' media="all">
	<!-- banner text slider-->

	<link href="//fonts.googleapis.com/css?family=Barlow+Condensed:300,400,500,600" rel="stylesheet">
	<!--//style sheet end here-->
</head>

<body>
	<div class="banner-w3" id="home">
		<div class="w3-agile-logo">
			<div class=" head-wl">
				<div class="agileinfo-social-grids">
					<ul>
						 <li class="active"><a href="<?php echo site_url()?>/pasien/profilepasien/<?php echo $user['username']?>"?>Welcome, <?php echo $user['nama_pasien'] ?></a></li>
					</ul>
				</div>
				<div class="w3-header-top-right">
					<div class="email-right">
						<p><span class="fa fa-envelope" aria-hidden="true"></span> <a href="mailto:mail@example.com" class="info"> info@medically.co.id</a></p>

					</div>
					<div class="w3-header-top-right-text">

						<p><span class="fa fa-phone" aria-hidden="true"></span> (031)798 456</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header-w3layouts">

			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
					<h1><a class="navbar-brand " href="home_pasien.php">Medically</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
						<li class="hidden"><a class="page-scroll" href="#page-top"></a> </li>
						<li><a class="page-scroll" href="#home">Home</a></li>
						<li><a class="page-scroll scroll" href="#about">About</a></li>
						<li><a class="page-scroll scroll" href="#service">Facilities</a></li>
						<li><a class="page-scroll scroll" href="#gallery">Laboratory</a></li>
						<li><a class="page-scroll scroll" href="#clients">Clients</a></li>
						<li><a class="page-scroll scroll" href="#contact">Contact</a></li>
						<li><a href="<?php echo site_url()?>/loginUser/logout">Logout</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>


		<div class="container">

			<!-- header -->
			<header>

				<div class="flexslider-info">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class=" w3l-info">
										<div class="col-md-8  info-lleft-side">
											<h4>Welcome To Hospital</h4>
											<p>Vivamus sed porttitor felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
												egestas.Sed lorem enim, rutrum quis diam nec.</p>
										</div>
										<div class=" col-md-4 w3layouts_more-buttn">
											<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
										</div>
									</div>

								</li>
								<li>
									<div class=" w3l-info">
										<div class="col-md-8 info-lleft-side">
											<h4>Better Health Care</h4>
											<p>Vivamus sed porttitor felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
												egestas.Sed lorem enim, rutrum quis diam nec.</p>
										</div>
										<div class=" col-md-4 w3layouts_more-buttn">
											<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
										</div>
									</div>
								</li>
								<li>
									<div class=" w3l-info">
										<div class="col-md-8 info-lleft-side">
											<h4>Get YourSelf Fixed</h4>
											<p>Vivamus sed porttitor felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
												egestas.Sed lorem enim, rutrum quis diam nec.</p>
										</div>
										<div class=" col-md-4 w3layouts_more-buttn">
											<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</section>
				</div>
			</header>
		</div>
		<div class="clearfix"> </div>
	</div>

	<!-- //header -->
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Medically</h4>
				</div>
				<div class="modal-body">
					<div class="out-info">
						<img src="../assets/images/g1.jpg" alt="" />
						<p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,
							eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellu</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->

	<!--about -->
	<div class="agileits-banner-grids text-center">
		<div class="banner-bottom-girds">
			<div class="col-md-4  col-sm-4 clr1 agileits-banner-grid">
				<span class="fa fa-heart banner-icon" aria-hidden="true"></span>
				<h4>Transplant</h4>
				<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut.</p>

			</div>
			<div class="col-md-4 col-sm-4 clr2 agileits-banner-grid">
				<span class="fa fa-ambulance banner-icon" aria-hidden="true"></span>
				<h4>Emergency</h4>
				<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut.</p>

			</div>
			<div class=" col-md-4 col-sm-4 clr3 agileits-banner-grid">
				<span class="fa fa-heartbeat banner-icon" aria-hidden="true"></span>
				<h4>Client Care</h4>
				<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut.</p>

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="about" id="about">
		<div class="container">
			<div class="imgg-info-w3">
				<div class="col-md-6 left-about-img">

					<img src="../assets/images/a1.jpg" class="img-responsive s1" alt="s1">
				</div>
				<div class="col-md-6 welcome-left wel">
					<div class="welcome-left-top">
						<h4>Who are we </h4>
						<p>Maecenas a odio tortor. Maecenas finibus odio in tellus tristique, sit amet venenatis ante imperdiet. Morbi lectus
							massa, fermentum eget mi ac, facilisis efficitur velit. Duis scelerisque iaculis nisi semper laoreet. Nunc aliquam
							nisl cursus venenatis fringilla. Donec sagittis lobortis tellus, vel eleifend neque consequat sed. sit amet venenatis
							ante imperdiet. Morbi lectus massa, fermentum eget mi ac, facilisis efficitur velit. </p>
						<div class="agileits_w3layouts_more">
							<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//about -->
	<!--services -->
	<div class="services " id="service">
		<div class="container">
			<h3 class="title tit-clr">OUR FACILITIES</h3>
			<div class="stats-info agileits w3layouts">
				<div class="col-md-3 col-sm-6 col-xs-6 agileits w3layouts stats-grid stats-grid-1">
					<div class="ser-icone"> <span class="fa fa-users font" aria-hidden="true"></span>
					</div>
					<div class=" agileits-w3layouts counter">3500</div>
					<div class="stat-info-w3ls">
						<h4 class="agileits w3layouts">Staff</h4>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 agileits w3layouts stats-grid stats-grid-2">
					<div class="ser-icone"> <span class="fa fa-medkit font" aria-hidden="true"></span>
					</div>
					<div class=" agileits-w3layouts counter">650</div>
					<div class="stat-info-w3ls">
						<h4 class="agileits w3layouts ">Branches</h4>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 stats-grid agileits w3layouts stats-grid-3">
					<div class="ser-icone"> <span class="fa fa-user-md font" aria-hidden="true"></span>
					</div>
					<div class=" agileits-w3layouts counter">1021</div>
					<div class="stat-info-w3ls">
						<h4 class="agileits w3layouts ">Doctors</h4>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 stats-grid agileits w3layouts stats-grid-4">
					<div class="ser-icone"> <span class="fa fa-heart font" aria-hidden="true"></span>
					</div>
					<div class=" agileits-w3layouts counter">1010</div>
					<div class="stat-info-w3ls">
						<h4 class="agileits w3layouts">operations</h4>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//services -->
	<!--gallery-->
	<div class="gallery titl-bottom" id="gallery">

		<h3 class="title">Laboratory</h3>
		<div class="gallery-info">
			<div class="col-md-6 col-sm-6 gallery-grids glry-grid1 ">
				<div class="gallery-grids-top w3_agile_gallery_grid ">
					<a class="b-link-stripe" href="../assets/images/g4.jpg" data-lightbox="example-set" data-title="Making your life easier. ">
							<img src="../assets/images/g4.jpg" class="img-responsive" alt="">
							<div class="b-wrapper">			
							</div>
						</a>
				</div>
				<div class="gallery-grids-top">
					<div class="col-md-6 col-sm-6 bottom-grids w3_agile_gallery_grid">
						<a class="b-link-stripe" href="../assets/images/g1.jpg" data-lightbox="example-set" data-title="Making your life easier.">
								<img src="../assets/images/g1.jpg" class="img-responsive" alt="">
								<div class="b-wrapper">			
								</div>
							</a>
					</div>
					<div class="col-md-6 col-sm-6 bottom-grids w3_agile_gallery_grid">
						<a class="b-link-stripe" href="../assets/images/g2.jpg" data-lightbox="example-set" data-title="Making your life easier.">
								<img src="../assets/images/g2.jpg" class="img-responsive" alt="">
								<div class="b-wrapper">				
								</div>
							</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 gallery-grids w3_agile_gallery_grid glry-grid2">
				<a class="b-link-stripe " href="images/g3.jpg" data-lightbox="example-set">
						<img src="../assets/images/g3.jpg" class="img-responsive" alt="">
						<div class="b-wrapper">			
						</div>
					</a>
			</div>
			<div class="col-md-3 col-sm-3 gallery-grids w3_agile_gallery_grid glry-grid3">
				<a class="b-link-stripe" href="images/g6.jpg" data-lightbox="example-set">
						<img src="../assets/images/g6.jpg" class="img-responsive" alt="">
						<div class="b-wrapper">				
						</div>
					</a>
				<a class="b-link-stripe" href="images/g5.jpg" data-lightbox="example-set">
						<img src="../assets/images/g5.jpg" class="img-responsive" alt="">
						<div class="b-wrapper">			
						</div>
					</a>
			</div>
			<div class="clearfix"></div>

		</div>

	</div>
	<!--//gallery-->
	<!-- team-->
	<div class="team agileits" id="team">
		<div class="team-info">
			<div class="container">
				<h3 class="title ">Our specialists</h3>
				<div class="team-row">
					<div class="col-md-4 col-sm-4 col-xs-4 team-grids">
						<div class="team-agile-img">
							<a href="#"><img src="../assets/images/t1.jpg" alt="img"></a>

							<div class="view-caption">
								<div class="t-info">
									<h5>Director</h5>
									<p>John willky</p>
								</div>
								<ul>
									<li><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
								</ul>
							</div>

						</div>

					</div>
					<div class="col-md-4 col-sm-4 col-xs-4 team-grids">
						<div class="team-agile-img">
							<a href="#"><img src="../assets/images/t2.jpg" alt="img"></a>
							<div class="view-caption">
								<div class="t-info">
									<h5>HOD</h5>
									<p>Lara kent</p>
								</div>
								<ul>
									<li><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
								</ul>
							</div>
						</div>

					</div>


					<div class="col-md-4 col-sm-4 col-xs-4 team-grids">
						<div class="team-agile-img">
							<a href="#"><img src="../assets/images/t3.jpg" alt="img"></a>
							<div class="view-caption">
								<div class="t-info">
									<h5>Psyhologist</h5>
									<p>Jack will</p>
								</div>
								<ul>
									<li><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
								</ul>
							</div>
						</div>

					</div>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //team -->
	<!--testimonials-->
	<div class="testimonials" id="clients">
		<h3 class="title tit-clr">OUR CLIENTS</h3>
		<div class="container">
			<div class="clients-inn">
				<div class="clients_agile_slider">
					<div id="owl-demo" class="owl-carousel owl-theme">
						<div class="item">
							<div class="agile_tesimonials_content">
								<div class="about-midd-main">
									<img class="agile-img" src="../assets/images/c1.jpg" alt="img">
									<h4>Ketty way</h4>
									<p> Lorem ipsum adipiscing elit, sed do eiusmod idunt ut labore. sed do eiusmod </p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="agile_tesimonials_content">
								<div class="about-midd-main">
									<img class="agile-img" src="../assets/images/c2.jpg" alt="img">
									<h4>Cleark Hill</h4>
									<p> Lorem ipsum adipiscing elit, sed do eiusmod idunt ut labore. sed do eiusmod </p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="agile_tesimonials_content">
								<div class="about-midd-main">
									<img class="agile-img" src="../assets/images/c3.jpg" alt="img">
									<h4>Willson Doe</h4>
									<p> Lorem ipsum adipiscing elit, sed do eiusmod idunt ut labore. sed do eiusmod </p>
								</div>
							</div>
						</div>

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //testimonials-->
	<!--subscribe-->
	<div class="subscribe text-center clr3">
		<div class="container">
			<h3 class="title">Subscribe</h3>
			<p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac,
			</p>
			<form action="#" method="post">
				<div class="user">
					<input type="email" name="Email" placeholder="Email Address" required="">
				</div>
				<input type="submit" value="Subscribe">
			</form>
		</div>
	</div>
	<!--//subscribe-->
	<!--contact-->
	<div class="contact" id="contact">
		<div class="container">
			<h3 class="title">CONTACT US</h3>

			<div class=" col-md-7 contact-address">
				<h4>Contact Address</h4>
				<div class="para-left">
					<p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat
						a, tellu
					</p>
				</div>
				<div class="contact-left">
					<div class="address-contact-left ">
						<h5>Address:</h5>
						<p><span class="fa fa-home"></span> 333 Broome St New York, NY 10002, </p>
					</div>
					<div class="address-contact-left ">
						<h5>Phones:</h5>
						<p><span class="fa fa-phone"></span> +9900887766</p>
						<p><span class="fa fa-phone"></span> +11 222 333</p>
					</div>
					<div class="address-contact-left ">
						<h5>Email:</h5>
						<p><span class="fa fa-envelope"></span> <a href="mailto:info@example.com">mail@example.com</a></p>
					</div>
				</div>
			</div>
			<div class=" col-md-5 contact-top">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555"
				 allowfullscreen=""></iframe>
			</div>

			<div class="clearfix"> </div>
			<div class="contact-form">
				<form action="#" method="post">
					<div class="col-md-6 col-sm-6 col-xs-6 form-right form-left">
						<input type="text" name="name" placeholder="Name" required="">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 form-right ">
						<input type="text" name="Last name" placeholder="Last name" required="">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 form-right form-left">
						<input type="email" name="Email" placeholder="Email" required="">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 form-right ">
						<input type="text" name="phone" placeholder="Phone" required="">
						<div class="clearfix"> </div>
					</div>
					
					<textarea name="Message" placeholder="Message" required=""></textarea>
					<input type="submit" value="SUBMIT">
				</form>
		
			</div>

		</div>
	</div>
	<!--//contact-->

	<!--footer-->

	<div class="footer">
		<nav>
			<ul class="nav-buttom">
				<li><a class="page-scroll scroll" href="#home">Home</a></li>
				<li><a class="page-scroll scroll" href="#about">About</a></li>
				<li><a class="page-scroll scroll" href="#service">Facilities</a></li>
				<li><a class="page-scroll scroll" href="#gallery">Laboratory</a></li>
				<li><a class="page-scroll scroll" href="#contact">Contact</a></li>
			</ul>
		</nav>
		<div class="container">
		<div class="colr-row col-md-6  ">
			<div class="col-md-6 col-sm-6 col-xs-6  bottom-head bottm-grid">
				<h2><a href="index.html">Medically</a></h2>
				<span class="cap">Lorem Ipsum</span>
				<div class="clearfix"> </div>
			</div>
			
			<div class="col-md-6 col-sm-6 col-xs-6 copyright bottm-grid">
				<h3>Follow us</h3>
				<div class="icons">
					<ul>
						<li><a href="#"><span class="fa fa-facebook"></span></a></li>
						<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-rss"></span></a></li>
						<li><a href="#"><span class="fa fa-vk"></span></a></li>
					</ul>

				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			</div>
			<div class="colr-row  col-md-6">
			<div class="col-md-6 col-sm-6 col-xs-6 one bottm-grid">
				<h3>About us</h3>
				<p> enim. Aliquam lorem ante, dapibus in,Aliquam lorem ante </p>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6 three bottm-grid">
				<h3>Contact</h3>
				<div class="addres up-out">
					<p><span class="fa fa-map-marker icons-left" aria-hidden="true"></span>333 Broome St New York</p>

					<p><span class="fa fa-phone icons-left" aria-hidden="true"></span>Call us:+9900887766</p>

				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //Copyright -->
			<div class="clearfix"> </div>
		</div>
		</div>
	</div>
	<footer>
		<p>&copy;2018 Medically. All Rights Reserved</a></p>
	</footer>
	<!--menu script-->
	<script type='text/javascript' src='../assets/js/jquery-2.2.3.min.js'></script>
	<script src="assets/js/bootstrap.js"></script>
	<!--//menu script-->
	<!--FlexSlider banner-->

	<script defer src="../assets/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!--End-slider-script-->
	<!-- OnScroll-Number-Increase-JavaScript -->
	<script src="../assets/js/jquery.waypoints.min.js"></script>
	<script src="../asstes/js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //OnScroll-Number-Increase-JavaScript -->
	<script src="../assets/js/jquery.chocolat.js"></script>

	<!--light-box-files -->
	<script type="text/javascript">
		$(function () {
			$('.w3_agile_gallery_grid a').Chocolat();
		});
	</script>
	<!-- //gallery -->
	<!--client carousel -->
	<script src="../assets/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 1,
				itemsDesktop: [768, 1],
				itemsDesktopSmall: [414, 1],
				lazyLoad: true,
				autoPlay: true,
				navigation: true,

				navigationText: false,
				pagination: true,

			});

		});
	</script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="../assets/js/move-top.js"></script>
	<script type="text/javascript" src="../assets/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
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
	<!-- //here ends scrolling icon -->
</body>

</html>