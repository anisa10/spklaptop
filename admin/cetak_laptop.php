<body onLoad="print()">
	<h2 align="center">
		Laporan Data Laptop</h2>
<?php

include("library/koneksi.php");
echo"<table class='table' width=70% align=center border=1>
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
$q=mysql_query("select * from datalaptop order by id_laptop asc");
$no=0;
while($r=mysql_fetch_array($q)){
$no++;
echo"<tr>
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
echo"</table>";

?>
	