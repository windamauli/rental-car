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
					<a href="index.html">
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
						<div class="breadcrumbs__title">Rental Mobil <br> </div>

						<div class="breadcrumbs__items">
							<div class="breadcrumbs__wrap">
								<div class="breadcrumbs__item">
									<a href="" class="#breadcrumbs__item-link">Beranda</a> <span>/</span> <a href="#" class="breadcrumbs__item-link">Rental Mobil</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<h3 align="center" style="color: blue;"><?php echo $this->session->flashdata('message');?></h3>

		<!-- // order-details-form  -->
		<form action="<?php echo site_url('Pageafterlogin/pesan');?>" class="order-details-form" name="contactform" method="post" novalidate>
			<div class="inner-form">
				 
				<h3>Isi form pemesanan dibawah ini : </h3>
				<div class="inner-form__elements">
					<div class="inner-half">

						<br><br>
						
						<div class="location">
							<input type="text" name="lokasi_pengambilan" placeholder="Lokasi Pengambilan Mobil">
							<i class="icon-placeholder-for-map"></i>
						</div>
					
						<div class="location-drop-off">
							<input type="text" name="lokasi_pengembalian" placeholder="Kolasi Pengembalian Mobil">
							<i class="icon-placeholder-for-map"></i>
						</div>
									
						<div class="inner-half__width">
							<div class="input-date">
							<label>Waktu Pengambilan :</label>
								<input type="datetime-local" name="waktu_pengambilan" placeholder="Pick-up date">
							</div>
						</div>
						<div class="inner-half__width">
							<div class="input-date">
								<label>Waktu Pengembalian :</label>
								<input type="datetime-local" name="waktu_pengembalian" placeholder="Drop-off date">
									
							</div>
						</div>
						<!-- <div class="inner-half__width">
							<div class="input-date">
								<label>Tanggal Pemesanan :</label>
								<input type="date" name="tanggal_pemesanan" placeholder="Drop-off date">
									
							</div>
						</div> -->
									

							
						</div>
							<div class="inner-half">
								<br><br>
								<?php foreach ($result as $hasil) { ?>
								<div class="inner-half__width">
									<div class="first-name">
										<label>Merk Mobil Pilihan Anda : </label>
									</div>
									<div class="first-name">
										<input type="text" name="id_mobil" value="<?php echo $hasil->id_mobil;?> " placeholder="<?php echo $hasil->merk_mobil; ?> ">
									</div>
									
								</div>

								<div class="inner-half__width">
									<div class="first-name">
										<label>No Polisi Mobil Pilihan Anda : </label>
									</div>
									<div class="first-name">
										<input type="text" name="" placeholder="<?php echo $hasil->no_polisi; ?> ">
									</div>
								</div>

								<div class="inner-half__width">
									<div class="first-name">
										<label>Jumlah Kursi : </label>
									</div>
									<div class="first-name">
										<input type="text" name="" placeholder="<?php echo $hasil->jumlah_kursi; ?> ">
									</div>
								</div>

								<?php } ?>


								<div class="inner-half__width">
									<div class="first-name">
										<label>Nama Penyewa : </label>
									</div>
									<div class="first-name">
										<input type="text" name="nama_pemesan" placeholder="">
									</div>
								</div>

								<div class="inner-half__width">
									<div class="first-name">
										<label>No. Telepon Penyewa : </label>
									</div>
									<div class="first-name">
										<input type="text" name="notlp_pemesan" placeholder="">
									</div>
								</div>
								
							</div>
						</div>
						<button type="submit" class="btn">PESAN</button> 
					</div>
				</form>
				<!-- // order-details-form  -->
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
</body>

</html>