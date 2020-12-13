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
							<li class="current"><a href="<?php echo site_url('page/index');?>" data-hover="Home">Beranda</a></li>
							<li><a href="<?php echo site_url('page/daftarmobil');?>">Daftar Mobil</a></li>
							<li><a href="<?php echo site_url('Page/carapesan');?>">Cara Memesan</a></li>
							<li><a href="<?php echo site_url('Page/about');?>">Tentang Kami</a></li>
							<li><a href="#">Hubungi Kami</a></li>
							<li><a href="<?php echo site_url('page/login')?>">Masuk</a></li>
							<li><a href="<?php echo site_url('page/registrasi')?>">Daftar Member</a></li>
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
						<div class="breadcrumbs__title">Detail Mobil</div>
						<div class="breadcrumbs__items">
							<div class="breadcrumbs__wrap">
								<div class="breadcrumbs__item">
									<a href="<?php echo site_url('Page/index')?>" class="#breadcrumbs__item-link">Beranda</a> <span>/</span> <a href="#" class="breadcrumbs__item-link">Rental Mobil</a><span>/</span> <a href="#" class="breadcrumbs__item-link">Detail Mobil</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="model-details-box">
						<div class="model-details-box__inner">
							<?php foreach ($result as $hasil) {
								$img = $hasil->image;
							?>
							<div class="model-details-box__info">
								<h3><?php echo $hasil->merk_mobil;?></h3>
								<table class="details-car">
									<tr>
										<th>Detail Mobil</th>
										<th></th>
									</tr>
									<tr>
										<td>Warna :</td>
										<td><?php echo $hasil->warna;?></td>
									</tr>
									<tr>
										<td>Nomor Polisi :</td>
										<td><?php echo $hasil->no_polisi;?> &emsp; &emsp; &emsp; &emsp;</td>
									</tr>
									<tr>
										<td>Nomor Mesin :</td>
										<td><?php echo $hasil->no_mesin;?></td>
									</tr>
									<tr>
										<td>Nomor BPKB :</td>
										<td><?php echo $hasil->no_bpkb;?></td>
									</tr>
									<tr>
										<td>Jumlah Kursi :</td>
										<td><?php echo $hasil->jumlah_kursi;?></td>
									</tr>
									<tr>
										<td>Harga : </td>
										<td><?php echo $hasil->harga;?></td>
									</tr>
									<tr>
										<td>Status : </td>
										<td><?php echo $hasil->status;?></td>
									</tr>
								</table>
								<br><a href="" class="btn btn-mini" data-remodal-target="modal">Pesan Sekarang</a>
								
							</div>

							<div class="model-slider-wrapper">
								<ul id="lightSlider" class="model-slider">
									<li data-thumb="<?php echo base_url('assets/images/model-thumb-1.jpg')?>">
										<img src="<?php echo base_url();?>assets/images/Mobil/<?php echo $img ?>" alt="" />
									</li>
								</ul>
							</div>
						<?php } ?>
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

	<div class="remodal" data-remodal-id="modal">
		<!-- // order-details-form  -->
		<form action="#" class="order-details-form" name="contactform" method="post" novalidate>	
			<div class="inner-form">
				<h3>Masuk Terlebih Dahulu</h3>
				<div align="right" >
					<h8>*Klik diluar kotak untuk keluar</h8>
				</div>
			</div>
		</form>					
	</div>
	
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