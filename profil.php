<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<title>Sistem Pendukung Keputusan Pemilihan Laptop</title>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/style.css" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript">
		$("#modal-login").modal("show");
	</script>
	<style type="text/css">
		<!--
		.style2 {
			font-family: "Times New Roman", Times, serif;
			font-size: 16px;
		}

		.style7 {
			font-size: 16px;
			font-family: "Trebuchet MS";
		}
		-->
	</style>
</head>

<body>



	<p align="center">
		<img src="img/head.jpg" alt="" width="90%">
	</p>

	<div class="navbar" id="menu">
		<?php include_once("menu.php"); ?>
	</div>
	<div class="page">
		<br>
		<div class="row">



			<div class="col-sm-8">
				<div class="alert alert-info">
					<marquee>Selamat Datang di Aplikasi Sistem Pendukung Keputusan Pemilihan Laptop
					</marquee>
				</div>
				<div><span class="style7">


						<p> PROFIL</p>
						Toko Nabila Computer merupakan salah satu toko yang menjual berbagai macam komputer, laptop dan perangkat pendukung komputer lainnya yang terletak di Jl Raya Andalas No 101 Kec. Padang Timur, Sumatera Barat. Owner toko ini bernama Akbar yang berusia 46 tahun. Toko Nabila Computer telah berdiri sejak tahun 2008 hingga saat ini. Sehingga Nabila Computer telah berdiri selama 10 tahun. Tidak hanya di kota Padang, Akbar juga membuka cabang di kota lain tepatnya di daerah VI suku kota Solok.
						Toko Nabila Computer mempekerjakan satu orang karyawan dan satu orang teknisi. Setiap tahunnya toko ini menerima anak magang dari berbagai SMK di Kota Padang.

						<br>


						<br>
					</span> </div>
			</div>
			<div class="col-sm-3 col-sm-offset-1 blog-sidebar">

				<div class="sidebar-module">
					<?php

					include "sidebar.php";
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-footer">
		<h6>&copy 2018 All Right Reserved | Repost by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>StokCoding.com</a></h6>
	</div>

</body>

</html>
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
		$('.flexslider').flexslider({
			animation: "slide",
			controlNav: "thumbnails"
		});
	});
</script>