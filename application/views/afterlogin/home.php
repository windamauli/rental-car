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
					<a href="home_log_out.html">
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

		<!-- Slider -->
		<div class="slider-wrapper theme-default">
			<div id="slider" class="nivoSlider"> 
				<img src="<?php echo base_url('assets/images/bg.jpg')?>" title="#htmlcaption1" data-thumb="<?php echo base_url('assets/images/bg.jpg')?>" alt="" /> 
				<img src="<?php echo base_url('assets/images/bg2.jpg')?>" title="#htmlcaption2" data-thumb="<?php echo base_url('assets/images/bg2.jpg')?>" alt="" /> 
				<img src="<?php echo base_url('assets/images/bg1.jpg')?>" title="#htmlcaption3" data-thumb="<?php echo base_url('assets/images/bg1.jpg')?>" alt="" />
			</div>
			<div id="htmlcaption1" class="nivo-caption">
				<div class="nivo-caption__inner">
					<div class="text">
						<h1 class="showtext showtext__h1">Mulai <br>Rencana Perjalanan Anda<br> Disini</h1>
						
					</div>
				</div>
			</div>
			<div id="htmlcaption2" class="nivo-caption">
				<div class="nivo-caption__inner left-side">
					<div class="text">
						<h1 class="showtext showtext__h1">Pesan Mobil<br> yang Anda<br> Inginkan !</h1>
					</div>
				</div>
			</div>
			<div id="htmlcaption3" class="nivo-caption">
				<div class="nivo-caption__inner">
					<div class="text">
						<h1 class="showtext showtext__h1">Pilih Mobil<br> Sesuai<br> Keinginan Anda !</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- Slider -->

		<div class="book-form-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<form id="book-form" class="book-form" action="#">
							<span class="book-form__title">
								Pesan Sekarang Juga!
								<small>Untuk Bandung & Sekitarnya</small>
							</span>
								
							<div class="book-form__btn">
								<a href="<?php echo site_url('Pageafterlogin/daftarmobil')?>" type="submit" class="btn">PILIH MOBIL</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<br> <br> <br>

		<div class="parallax_box">
		<figure class="thumbnail move_img wow slideInLeft" data-wow-delay="0.5s"></figure>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 col-lg-push-6"> 
					<h1>Mulai perencanaan perjalanan Anda di sini</h1>
					<a href="<?php echo site_url('Page/kontak')?>" class="btn invert">KONTAK KAMI</a>
					
				</div>
			</div>
		</div>
	</div>

	
	<div class="services-box">
		<div class="container">
			<div class="box-list-posts swiper-container-services swiper-container">
				<div class="swiper-wrapper">
					<?php foreach ($result as $hasil) { 
						$img = $hasil->image;
					?>
					<div class="swiper-slide">
						<div class="post-column">
							<figure class="thumbnail"><img src="<?php echo base_url();?>assets/images/Mobil/<?php echo $img ?>" alt="" /></figure>
							<div class="post-column__content">
								<h3><?php echo $hasil->merk_mobil; ?></h3>
								<h7 style="color: white;" ><?php echo $hasil->harga;?></h7><h7 style="color: white;"> / Hari </h7><br><br>
								<a href="<?php echo site_url('Pageafterlogin/detail/' . $hasil->id_mobil)?>" class="btn btn__marker"><i class="icon-arrows"></i></a>
							</div>
						</div>
					</div>
					<?php }?>
				</div>
				<div class="swiper-pagination swiper-pagination-services"></div>
			</div> 
			<!-- // box-list-posts  -->
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
								<li><a href="#""><i class="icon-google-plus"></i></a></li>
								<li><a href="#"><i class="icon-linkedin-logo"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<a href="#" class="scrollup"><i class="icon-arrow-down-sign-to-navigate"></i></a>
	</footer>
<div class="remodal" data-remodal-id="modal">

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


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
</body>

</html>