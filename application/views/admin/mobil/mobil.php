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
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
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

	</header><br><br>
	<!-- // Header -->
	<!-- Content  -->
	<main id="page-content">
		
		<h3 align="center">Halaman Admin</h3><br>

		<h3 align="center">Data Mobil</h3><br>
		<section class="isotop-box">
			<div class="container">
				<div class="row">
					<div>
					<ul class="nav nav-pills">


					  	<li class="nav-item dropdown show">
					   		<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">Pilih data yang ingin anda lihat </a>
					    	<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
					      		<a class="dropdown-item" href="<?php echo site_url('PageAdmin/user');?>">Pengguna</a>
					      		<a class="dropdown-item" href="<?php echo site_url('PageAdmin/owner');?>">Pemilik Mobil</a>
					      		<a class="dropdown-item" href="<?php echo site_url('PageAdmin/mobil');?>">Mobil</a>
					      		<a class="dropdown-item" href="<?php echo site_url('PageAdmin/pemesanan');?>">Pemesanan</a>
					      		<a class="dropdown-item" href="<?php echo site_url('PageAdmin/peminjaman');?>">Peminjaman</a>
					      		<a class="dropdown-item" href="<?php echo site_url('PageAdmin/pengembalian');?>">Pengembalian</a>
					      		<a class="dropdown-item" href="<?php echo site_url('PageAdmin/laporan');?>">Laporan</a>

					    	</div>
					 	</li>

					 	<li class="nav-item">
						   <a class="nav-link active" href="<?php echo site_url('Page/index'); ?>">Keluar</a>
						</li>

					</ul>
				</div>

						
				<br><br><br><table class="table table-hover">
					<tbody>
						<tr>
						    <th width="250px">Id</th>
							<th width="250px">Nama Pemilik</th>
						    <th width="250px">Merk Mobil</th>
						    <th width="250px">Warna</th>
						    <th width="250px">No. Polisi</th>
						    <th width="250px">No. Mesin</th>
						    <th width="250px">No. BPKB</th>
						    <th width="250px">Jumlah Kursi</th>
						    <th width="250px">Status</th>
						    <th width="250px">Harga</th>
						    <th width="250px">Foto Mobil</th>
						    <th align="right"></th>
						</tr>
						<?php foreach ($resultmobil as $hasilmobil) { ?>
					    <tr class="table-active">
					   		<th scope="row"><?php echo $hasilmobil->id_mobil; ?></th>
					
					    	<td><?php echo $hasilmobil->nama_owner; ?></td>
					    	
					    	<td><?php echo $hasilmobil->merk_mobil; ?></td>
					    	<td><?php echo $hasilmobil->warna; ?></td>
					    	<td><?php echo $hasilmobil->no_polisi; ?></td>
					    	<td><?php echo $hasilmobil->no_mesin; ?></td>
					    	<td><?php echo $hasilmobil->no_bpkb; ?></td>
					    	<td><?php echo $hasilmobil->jumlah_kursi; ?></td>
					    	<td><?php echo $hasilmobil->status; ?></td>
					    	<td><?php echo $hasilmobil->harga; ?></td>
					    	<td>
					    		<img src="<?php echo base_url();?>assets/images/Mobil/<?php echo $hasilmobil->image ?>" alt="" />
					    	</td>

					    	<td>
					    		<a href="<?php echo site_url('PageAdmin/formUpdateMobil/' .$hasilmobil->id_mobil);?>">Update</a> 
				
					    		<?php echo anchor('PageAdmin/deleteMobil/'. $hasilmobil->id_owner,'Delete'); ?>
					    		
					    	</td>
					    </tr>
					    <?php } ?>
					    
					</tbody>
				</table>

				<div align="left">
					<a href="<?php echo site_url('PageAdmin/formInsertMobil');?>">+ Tambah Data</a>
				</div>

			</div>
			
			</div>
		</section>

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