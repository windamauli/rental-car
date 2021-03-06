<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="html 5 template">
	<meta name="author" content="tonytemplates.com">
	<link rel="icon" href="<?php echo base_url('favicon.ico')?>">
	<title>Bandung Rental Cars</title>
	
	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url('assets/css/plugins/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/plugins/jquery.smartmenus.bootstrap.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/plugins/nivo-slider.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/plugins/swiper.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/plugins/intlTelInput.min.css'); ?>" rel="stylesheet" >
	<link href="<?php echo base_url('assets/css/plugins/remodal.min.css'); ?>" rel="stylesheet" >
	<link href="<?php echo base_url('assets/css/plugins/animate.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/main-style.css'); ?>" rel="stylesheet">
	
	<link href="<?php echo base_url('iconfont/style.css'); ?>" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>

<body class="page__home">

	<!-- Header -->
	<header class="site-header">
		
		<div class="header-container_wrap container">
			<div class="header-container__flex">
				<div class="logo">
					<a href="home_log_in.html">
						<i class="icon-logo"></i>
						<span>Bandung </span> Rental Cars
					</a>
				</div>
				<div class="social-list">
					<span class="social-list__text">Find us here:</span>
					<ul class="social-list__icons">
						<li><a href="#"><i class="icon-facebook-logo"></i></a></li>
						<li><a href="#"><i class="icon-twitter-letter-logo"></i></a></li>
						<li><a href="#"><i class="icon-google-plus"></i></a></li>
						<li><a href="#"><i class="icon-linkedin-logo"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="header-navigation-wrap stickUp"> 
			<!-- Navbar fixed top -->
			<div class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="menu-navigation navbar-collapse collapse">

					<!-- Left nav -->
						<ul class="menu-navigation__list nav navbar-nav">
							<li class="current"><a href="<?php echo site_url('Page/home');?>" data-hover="Home">Beranda</a></li>
							<li><a href="<?php echo site_url('Pageafterlogin/daftarmobil');?>">Daftar Mobil</a></li>
							<li><a href="<?php echo site_url('Pageafterlogin/carapesan');?>">Cara Memesan</a></li>
							<li><a href="<?php echo site_url('Pageafterlogin/about');?>">Tentang Kami</a></li>
							<li><a href="<?php echo site_url('Pageafterlogin/kontak');?>">Hubungi Kami</a></li>
							<li><a href="<?php echo site_url('Page/index');?>">Keluar</a></li>
							<li><a href="<?php echo site_url('Pageafterlogin/profile');?>">Profile</a></li>
						</ul>

					</div><!--/.nav-collapse -->
				</div><!--/.container -->
			</div>
		</div>

	</header>
	<!-- // Header -->
	<!-- Content  -->
	<main id="page-content">

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="breadcrumbs__title">Tentang Kami</div>
						<div class="breadcrumbs__items">
							<div class="breadcrumbs__wrap">
								<div class="breadcrumbs__item">
									<a href="" class="#breadcrumbs__item-link">Beranda</a> <span>/</span> <a href="#" class="breadcrumbs__item-link">Tentang Kami</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="image_box">
			<div class="image_box__inner">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">

							<div class="image_box__description">
								<figure class="thumbnail"><img src="<?php echo base_url('assets/images/about.png');?>" alt=""></figure>
								<span class="text-link">Rental Mobil terbaik di Bandung dan Sekitarnya</span>
								<p>Apakah anda mencari rental mobil dengan harga terjangkau namun fasilitas yang memuaskan? Untuk kalian yang berdomisili di Bandung dan sekitarnya, dan membutuhkan kendaraan mobil, kami menyediakan apa yang anda butuhkan tersebut.  </p>
								<p>Dengan menyewa mobil melalui situs Bandung Rental Cars anda dapat menghemat waktu, karena kami menyediakan pelayanan pemesanan untuk peminjaman mobil dengan mudah dan cepat. Mobil - mobil yang ditawarkan pun sangat beragam, anda dapat memilih mobil sesuai kebutuhan anda maupun jumlah kursi yang anda inginkan.</p>
								<p>Bandung Rental Cars menyediakan penyewaan mobil dalam jangka waktu yang pendek dan singkat cocok untuk anda yang sedang berwisata ke Bandung maupun sekitarnya namun tidak ingin repot mencari transportasi umum. Harga yang kami tawarkan pun cuku murah. Tidak percaya? Silahkan buktikan sendiri!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="container">
			<div class="row info-box">
				<div class="col-xs-12">
					<article>
						<h1>Mulai perncanaan perjalanan anda disini!</h1>
						<span class="text-link">Berkeliling Kota Bandung tanpa repot mencari transporatasi umum dan dengan harga yang pas dikantong</span>
						<a href="fleet.html" class="btn">PESAN</a>
						<a href="contacts.html" class="btn invert">KONTAK KAMI</a>
					</article>	
				</div>
			</div>
		</div>

	</main>
	<!-- // Content  -->
	<!-- Footer -->
	<footer class="site-footer">
		<section class="site-footer__top-panel">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<div class="top-panel__info">
							<i class="icon-Cancellation"></i>
							<strong>Free cancellation</strong> 
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<div class="top-panel__info">
							<i class="icon-commerce"></i>
							<strong>No credit card fees</strong>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<div class="top-panel__info">
							<i class="icon-phone"></i>
							<strong>24/7 Call Center</strong>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="site-footer__bottom-panel">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="copyright">&copy; 2017 | <a href="#">Privacy Policy</a> | <a href="#">Rental policy</a></div><br>
						<span class="phone_number"><i class="icon-telephone"></i> 1-800-123-4567</span>
					</div>
					<div class="col-xs-12 col-md-6"> 
						<div class="social-list">
							<ul class="social-list__icons">
								<li><a href="#"><i class="icon-facebook-logo"></i></a></li>
								<li><a href="#"><i class="icon-twitter-letter-logo"></i></a></li>
								<li><a href="#"><i class="icon-google-plus"></i></a></li>
								<li><a href="#"><i class="icon-linkedin-logo"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<a href="#" class="scrollup"><i class="icon-arrow-down-sign-to-navigate"></i></a>
	</footer>


	<!-- //Footer -->
	<!-- Google map -->
	<script src="<?php echo base_url('assets/js/jquery.1.12.4.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/wow.min.js')?>"></script>
	<script src="<?Php echo base_url('assets/js/plugins/jquery.smartmenus.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/jquery.smartmenus.bootstrap.js')?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/jquery.nivo.slider.js')?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/swiper.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/intlTelInput.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/remodal.js')?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/stickup.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/tool.js')?>"></script>
	<script src="<?php echo base_url('assets/js/custom.js')?>"></script>

</html>