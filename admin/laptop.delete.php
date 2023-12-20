<?php
	include("library/koneksi.php");

	$inf	= $_GET['inf'];
	$sql	= mysql_query("delete from datalaptop where id_laptop='$inf'");
	
	echo "<script language=javascript>
			window.alert('Hapus Berhasil');
			window.location='media.php?menu=laptop&act=view';
			</script>";
?>