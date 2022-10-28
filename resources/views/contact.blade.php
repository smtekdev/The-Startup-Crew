<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Contact Us - Digital Agency</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link
		href="../css?family=Open+Sans:400,700%7CRoboto:400,500,700,900%7CPlayfair+Display:400,700,700i,900,900i%7CWork+Sans:400,500,600,700"
		rel="stylesheet">

	<link rel="stylesheet" href="assets/css/signatra-font.css">
	<link rel="icon" type="image/png" href="favicon.ico">

	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/iconfont.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/css/swiper.min.css">
	<link rel="stylesheet" href="assets/css/rev-settings.css">

	<link rel="stylesheet" href="assets/css/plugins.css">

	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="stylesheet" href="assets/css/responsive.css">

<style>
.nav-menus-wrapper .nav-menu {
padding-right:34px !important;
}
</style>


<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-firestore.js"></script>

</head>

<body>
	<!--[if lt IE 10]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->




    @include('components.header')

	<div class="xs-inner-banner inner-banner2" style="background-image:url('assets/images/banner/6.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-md-7 mx-auto">
					<div class="inner-banner">
						<h2 class="inner-banner-title">Contact Us</h2>
						<ul class="breadcumbs list-inline">
							<li><a href="index.html">Home</a></li>
							<li>Contact</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


	<section class="xs-section-padding contact-info-area" data-scrollax-parent="true">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-lg-6">
					<div class="contact-info2">
						<div class="agency-section-title">
							<h3 class="sub-title">AGENCY</h3>
							<h4 class="main-title">Innovative <em>Agency</em></h4>
						</div>
						<p>Whether you’re curious to learn more about our products and services, or to discuss business
							and partnership opportunities, or even careers or press—we’re ready to answer any and all
							questions</p>
						<ul class="contact-info-list">
							<li>
								<strong>Address</strong>
								<div class="list-content">
									<a href="#" target="_blank">2619 Wilshire Blvd,
Los Angeles, CA 900575</a>
								</div>
							</li>
							<li>
								<strong>Phone</strong>
								<div class="list-content">
									<a href="#">(213) 457-3188</a>
								</div>
							</li>
							<li>
								<strong>Email</strong>
								<div class="list-content">
									<a href="#"><span class="__cf_email__"
											data-cfemail="acddd9c9ded5ecdbc9cedfc5d8c982cfc3c1">[email&#160;protected]</span></a>
								</div>
							</li>
						</ul>
						<ul class="social-list version-2">
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="contact-info-image-wraper">
						<div class="contact-info-image">
							<img src="assets/images/contact-info-image.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="doodle-parallax">
			<img src="assets/images/doodle/parallax-7.png" data-scrollax="properties: { translateY: '50%' }"
				class="single-doodle one" alt="">
			<img src="assets/images/doodle/parallax-8.png" data-scrollax="properties: { translateY: '-50%' }"
				class="single-doodle two" alt="">
		</div>
	</section>

	<!-- <div class="xs-map">
<div id="xs-map"></div>
</div> -->

	<div class="agency-contactus">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<div class="agency-section-title text-center style4">
						<h4 class="main-title">Have any <em>Query ?</em></h4>
						<p>Should you have any queries, please feel free to contact us.</p>
						<span class="line"></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mx-auto">
					<div class="from-wraper">


                        @if (Session()->has('message_sent'))
                        <div class="alert alert-success" role="alert">
                            {{Session()->get('message_sent')}}
                        </div>
                        @endif
						<form  action="{{route('contact')}}" id="xs-contact-form" enctype="multipart/form-data" class="contact-form style2" method="post">
							@csrf
                            <div class="row">
								<div class="col-lg-6">
									<input type="text"  placeholder=" Name *" name="name" id="xs_contact_name"
										class="form-control first-name">
								</div>
								<!--<div class="col-lg-6">
									<input type="text" placeholder="Last Name *" name="lastname"
										id="xs_contact_last_name" class="form-control last-name">
								</div>-->
							</div>
							<div class="row">
								<div class="col-lg-6">
									<input type="number" placeholder="Phone Number *" name="phonenumber"
										id="xs_contact_number" class="form-control phone">
								</div>
								<div class="col-lg-6">
									<input type="email" placeholder="Email *" name="lastname" id="xs_contact_email"
										class="form-control email-address">
								</div>
							</div>
							<input type="text" placeholder="Subject *" name="subject" id="xs_contact_subject"
								class="form-control subject">
							<textarea name="massage" id="x_contact_massage" placeholder="Your Message... *"
								class="form-control message" cols="30" rows="10"></textarea>
							<div class="btn-wraper">
								<button type="submit" name="submit" id="xs_contact_submit" class="btn btn-primary submit-form"
									value="Submit"> submit </button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>




	<div class="zoom-anim-dialog mfp-hide modal-language" id="modal-popup-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="language-content">
					<p>Switch The Language</p>
					<ul class="flag-lists">
						<li><a href="#"><img src="assets/images/flags/006-united-states.svg"
									alt=""><span>English</span></a></li>
						<li><a href="#"><img src="assets/images/flags/002-canada.svg" alt=""><span>English</span></a>
						</li>
						<li><a href="#"><img src="assets/images/flags/003-vietnam.svg"
									alt=""><span>Vietnamese</span></a></li>
						<li><a href="#"><img src="assets/images/flags/004-france.svg" alt=""><span>French</span></a>
						</li>
						<li><a href="#"><img src="assets/images/flags/005-germany.svg" alt=""><span>German</span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<div class="zoom-anim-dialog mfp-hide modal-searchPanel" id="modal-popup-2">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="xs-search-panel">
					<form action="#" method="POST" class="xs-search-group">
						<input type="search" class="form-control" name="search" id="search" placeholder="Search">
						<button type="submit" class="search-button"><i class="icon icon-search"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>


	<div class="xs-sidebar-group cart-group">
		<div class="xs-overlay black-bg"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading media">
					<div class="media-body">
						<a href="#" class="close-side-widget">
							X
						</a>
					</div>
				</div>
				<div class="xs-empty-content">
					<h3 class="widget-title">Shopping cart</h3>
					<h4 class="xs-title">No products in the cart.</h4>
					<p class="empty-cart-icon">
						<i class="icon icon-shopping-cart"></i>
					</p>
					<p class="xs-btn-wraper">
						<a class="btn btn-primary" href="#">Return To Shop</a>
					</p>
				</div>
			</div>
		</div>
	</div>


	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay black-bg"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
					<a href="#" class="close-side-widget">
						<i class="icon icon-cross"></i>
					</a>
				</div>
				<div class="sidebar-textwidget">
					<div class="sidebar-logo-wraper">
						<!-- <a href="index.html">
<img src="assets/images/color-logo.png" alt="sidebar logo">
</a> -->
					</div>
					<p>Far far away, behind the word moun tains, far from the countries Vokalia and Consonantia, there
						live the blind texts. Separated they live in Bookmarksgrove right at the coast of </p>
					<ul class="sideabr-list-widget">
						<li>
							<div class="media">
								<div class="d-flex">
									<img src="assets/images/location.png" alt="">
								</div>
								<div class="media-body">
									<p>759 Pinewood Avenue</p>
									<span>Marquette, Michigan</span>
								</div>
							</div>
						</li>
						<li>
							<div class="media">
								<div class="d-flex">
									<img src="assets/images/mail.png" alt="">
								</div>
								<div class="media-body">
									<a href="#"><span class="__cf_email__"
											data-cfemail="bdd4d3dbd2fdd9d2d0dcd4d393ded2d0">[email&#160;protected]</span></a>
									<span>Online Support</span>
								</div>
							</div>
						</li>
						<li>
							<div class="media">
								<div class="d-flex">
									<img src="assets/images/phone.png" alt="">
								</div>
								<div class="media-body">
									<a href="#">906-624-2565</a>
									<span>Mon-Fri 8am-5pm</span>
								</div>
							</div>
						</li>
					</ul>
					<div class="subscribe-form-wraper">
						<p>Get Subscribed!</p>
						<form action="#" method="POST" class="subscribe-form">
							<label for="sub-input"></label>
							<div class="form-group">
								<input type="email" name="email" id="sub-input" placeholder="Enter your mail here"
									class="form-control">
								<button class="sub-btn" type="submit"><i class="icon icon-arrow-right"></i></button>
							</div>
						</form>
					</div>
					<ul class="social-list version-2">
						<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a></li>
					</ul>
					<div class="text-center">
						<a href="#" class="btn btn-primary">Purchase Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
    @include('components.footer')


	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/Popper.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/scrollax.js"></script>
	<script src="assets/js/jquery.ajaxchimp.min.js"></script>
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/swiper.min.js"></script>
	<script src="../maps/api/js?v=3&key=AIzaSyDeZubzJTQgtjreqsdaGMGXxaxP-pv6pSk"></script>
	<script src="assets/js/jquery.easypiechart.min.js"></script>
	<script src="assets/js/delighters.js"></script>
	<script src="assets/js/typed.js"></script>
	<script src="assets/js/jquery.parallax.js"></script>
	<script src="assets/js/jquery.themepunch.tools.min.js"></script>
	<script src="assets/js/jquery.themepunch.revolution.min.js"></script>
	<script src="assets/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="assets/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="assets/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="assets/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="assets/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="assets/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="assets/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="assets/js/extensions/revolution.extension.video.min.js"></script>
	<script src="assets/js/skrollr.min.js"></script>
	<script src="assets/js/shuffle-letters.js"></script>
	<script src="assets/js/main.js"></script>

<script src="firebase.js"></script>

</body>

</html>
