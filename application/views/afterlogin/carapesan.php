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
					<a href="#">
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

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="breadcrumbs__title">Cara Memesan</div>
						<div class="breadcrumbs__items">
							<div class="breadcrumbs__wrap">
								<div class="breadcrumbs__item">
									<a href="<?php echo site_url('Page/index')?>" class="#breadcrumbs__item-link">Beranda</a> <span>/</span> <a href="#" class="breadcrumbs__item-link">Cara Memesan</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	
		<div class="container">
			<div class="box-tips">
				<div class="row">
					<div class="col-xs-12">
						<p class="center-text">Langkah - Langkah menyewa mobil di Bandung Rental Cars :</p>
					</div>
					<div class="col-xs-12 col-md-6 col-xl-4">
						<div class="block-tips">
							<span class="number">1</span>
							<div class="block-tips__inner">
								<h6>Pilih Mobil</h6>
								<p>Pilih mobil yang anda inginkan dan sesuai kebutuhan anda. Klik menu "Daftar Mobil" pada navbar, dan mulai pilih mobil pilihan anda. Anda juga bisa memfilter sesuai jumlah kursi yang ada pada mobil. Klik "Lihat Selengkapnya"</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-xl-4">
						<div class="block-tips">
							<span class="number">2</span>
							<div class="block-tips__inner">
								<h6>Pesan mobil yang diinginkan !</h6>
								<p>Klik button "Pesan Sekarang" untuk pergi ke halaman form pemesanan. Untuk ke halaman ini, anda harus login terlebih dahulu. Jika belum menjadi member, silahkan mendaftar member terlebih dahulu</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-xl-4">
						<div class="block-tips">
							<span class="number">3</span>
							<div class="block-tips__inner">
								<h6>Isi Form Pemesanan !</h6>
								<p>Isi form pemesanan. Lengkapi semua field pada form pemesanan. Setelah selesai, klik "Pesan" untuk mengirimkan pesanan anda.</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-xl-4">
						<div class="block-tips">
							<span class="number">4</span>
							<div class="block-tips__inner">
								<h6>Tunggu SMS konfirmasi kami</h6>
								<p>Setelah mengirimkan pesanan anda, tunggu SMS konfirmasi dari pihak kami untuk proses selanjutnya.</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-xl-4">
						<div class="block-tips">
							<span class="number">5</span>
							<div class="block-tips__inner">
								<h6>Mobil yang anda pinjam siap!!</h6>
								<p>Kami akan mengantarkan mobil yang anda pesan pada waktu dan lokasi yang sesuai dengan data yang anda inputkan saat pemesanan. Dan mobil siap anda pakai.</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-xl-4">
						<div class="block-tips">
							<span class="number">6</span>
							<div class="block-tips__inner">
								<h6>Pengembalian mobil...</h6>
								<p>Kami akan menghubungi anda, jika sudah waktunya untuk mengembalikan mobil yang anda pinjam. Jangan sampai telat ya, karena jika telat akan ada denda yang berlaku. Terimakasih:)</p>
							</div>
						</div>
					</div>
			</div>
		
		<a href="#" class="scrollup"><i class="icon-arrow-down-sign-to-navigate"></i></a>
	</footer>

	<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

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