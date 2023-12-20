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


						<p> DATA LAPTOP</p>
						<?php

						include("./admin/library/koneksi.php");
						echo "<table class='table table-bordered table-striped' width=70% align=center border=1>
<tr>
	<th>No.</th>
	<th>Jenis Laptop</th>
	<th>Harga</th>
	<th>Ukuran Layar</th>
	<th>Processor</th>
	<th>Kapasitas Memori</th>
	<th>Jenis Memori</th>
	<th>Hardisk</th>
	<th>Kebutuhan</th>
</tr>";
						$q = mysql_query("select * from datalaptop order by id_laptop asc");
						$no = 0;
						while ($r = mysql_fetch_array($q)) {
							$no++;
							echo "<tr>
	<td>$no</td>
	<td>$r[jenis_laptop]</td>
	<td>$r[harga]</td>
	<td>$r[ukuran]</td>
	<td>$r[processor]</td>
	<td>$r[kapasitas]</td>
	<td>$r[memori]</td>
	<td>$r[hardisk]</td>
	<td>$r[kebutuhan]</td>
	
</tr>";
						}
						echo "</table>";

						?> <br>


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