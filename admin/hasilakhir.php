<?php
if($_GET[proses]=="simpan"){
mysql_query("delete from hasil");
}
?>
<div class="panel panel-default">
	<div class="panel-heading">
		Data Laptop
	</div>
	
	<div class="panel-body">
		<div class="table-responsive">
		<div>
		<p><b>Hasil Akhir :</b></p>
		<?php
		if($_GET[act]!="lihat"){
		?>
		</div>
		
		<table class="table table-striped table-bordered table-hover">
									<thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jenis Laptop</th>
                                            <th>NCF</th>
                                            <th>NSF</th>
                                            <th>NT</th>
                                            <th>Perhitungan</th>
                                        </tr>
                                    </thead>
			 <?php 
			 /*
			 ?>
			 <tbody>
    
    
  <?php

  $queryutama = mysql_query("SELECT  *  FROM  karyawan order by idkaryawan"); 
    $no = 1;
    while ($data = mysql_fetch_array($queryutama)) {
									
?>
           <tr>
           <td><?php echo $no;  ?></td> 
           <td><?php echo $data[nama];  ?></td>
           <td><?php echo $data['k1']; ?></td>
           <td><?php echo $data['k2']; ?></td>
           <td><?php echo $data['k3']; ?></td>
           <td><?php echo $data['k4']; ?></td>
           <td><?php echo $data['k5']; ?></td>
           <td><?php echo $data['k6']; ?></td>
		   <td></td>
		   <td></td>
          
<?php 
$no++;	
}  
?>
</tr></tbody>
									<?php
									*/
									$p1=5;
									$p2=5;
									$p3=3;
									$p4=3;
									$p5=3;
									$p6=3;
									$p7=3;
									/*
									?>
									<thead>
                                        <tr>
                                            <th colspan=2>Angka Profile Matching</th>
                                            <th><?php echo"$p1"; ?></th>
                                            <th><?php echo"$p2"; ?></th>
                                            <th><?php echo"$p3"; ?></th>
                                            <th><?php echo"$p4"; ?></th>
                                            <th><?php echo"$p5"; ?></th>
                                            <th><?php echo"$p6"; ?></th>
                                            
                                        </tr>
                                    </thead>
									<?php 
									*/
									?>
									
									<?php

  $queryutama2 = mysql_query("SELECT  *  FROM  proses_spk order by id_laptop asc"); 
    $no2 = 1;
    while ($data2 = mysql_fetch_array($queryutama2)) {
$kur1=$data2[k1]-$p1;
$kur2=$data2[k2]-$p2;
$kur3=$data2[k3]-$p3;
$kur4=$data2[k4]-$p4;
$kur5=$data2[k5]-$p5;
$kur6=$data2[k6]-$p6;
$kur7=$data2[k7]-$p7;
$plus=0;
$min=0;
//$juml=$kur1+$kur2+$kur3+$kur4+$kur5+$kur6;

if($kur1>="0"){$plus=$plus+$kur1;}else{$min=$min+$kur1;}
if($kur2>="0"){$plus=$plus+$kur2;}else{$min=$min+$kur2;}
if($kur3>="0"){$plus=$plus+$kur3;}else{$min=$min+$kur3;}
if($kur4>="0"){$plus=$plus+$kur4;}else{$min=$min+$kur4;}
if($kur5>="0"){$plus=$plus+$kur5;}else{$min=$min+$kur5;}
if($kur6>="0"){$plus=$plus+$kur6;}else{$min=$min+$kur6;}
if($kur7>="0"){$plus=$plus+$kur7;}else{$min=$min+$kur7;}									
/*
?>

           <tr>
           <td><?php echo $no2;  ?></td> 
           <td><?php echo $data2[nama];  ?></td>
           <td><?php echo"$kur1"; ?></td>
           <td><?php echo"$kur2"; ?></td>
           <td><?php echo"$kur3"; ?></td>
           <td><?php echo"$kur4"; ?></td>
           <td><?php echo"$kur5"; ?></td>
           <td><?php echo"$kur6"; ?></td>
		   
<?php
*/ 
$no2++;	
}  
?>

									
             						<tbody>
									<?php

  $queryutama3 = mysql_query("SELECT  *  FROM  proses_spk order by id_laptop asc"); 
    $no3 = 1;
    while ($data3 = mysql_fetch_array($queryutama3)) {
$kur1=$data3[k1]-$p1;
$kur2=$data3[k2]-$p2;
$kur3=$data3[k3]-$p3;
$kur4=$data3[k4]-$p4;
$kur5=$data3[k5]-$p5;
$kur6=$data3[k6]-$p6;
$kur7=$data3[k7]-$p7;

if($kur1=="0"){$b1=5;}elseif($kur1=="1"){$b1=4.5;}elseif($kur1=="-1"){$b1=4;}elseif($kur1=="2"){$b1=3.5;}elseif($kur1=="-2"){$b1=3;}elseif($kur1=="3"){$b1=2.5;}elseif($kur1=="-3"){$b1=2;}elseif($kur1=="4"){$b1=1.5;}elseif($kur1=="-4"){$b1=1;}

if($kur2=="0"){$b2=5;}elseif($kur2=="1"){$b2=4.5;}elseif($kur2=="-1"){$b2=4;}elseif($kur2=="2"){$b2=3.5;}elseif($kur2=="-2"){$b2=3;}elseif($kur2=="3"){$b2=2.5;}elseif($kur2=="-3"){$b2=2;}elseif($kur2=="4"){$b2=1.5;}elseif($kur2=="-4"){$b2=1;}

if($kur3=="0"){$b3=5;}elseif($kur3=="1"){$b3=4.5;}elseif($kur3=="-1"){$b3=4;}elseif($kur3=="2"){$b3=3.5;}elseif($kur3=="-2"){$b3=3;}elseif($kur3=="3"){$b3=2.5;}elseif($kur3=="-3"){$b3=2;}elseif($kur3=="4"){$b3=1.5;}elseif($kur3=="-4"){$b3=1;}

if($kur4=="0"){$b4=5;}elseif($kur4=="1"){$b4=4.5;}elseif($kur4=="-1"){$b4=4;}elseif($kur4=="2"){$b4=3.5;}elseif($kur4=="-2"){$b4=3;}elseif($kur4=="3"){$b4=2.5;}elseif($kur4=="-3"){$b4=2;}elseif($kur4=="4"){$b4=1.5;}elseif($kur4=="-4"){$b4=1;}

if($kur5=="0"){$b5=5;}elseif($kur5=="1"){$b5=4.5;}elseif($kur5=="-1"){$b5=4;}elseif($kur5=="2"){$b5=3.5;}elseif($kur5=="-2"){$b5=3;}elseif($kur5=="3"){$b5=2.5;}elseif($kur5=="-3"){$b5=2;}elseif($kur5=="4"){$b5=1.5;}elseif($kur5=="-4"){$b5=1;}

if($kur6=="0"){$b6=5;}elseif($kur6=="1"){$b6=4.5;}elseif($kur6=="-1"){$b6=4;}elseif($kur6=="2"){$b6=3.5;}elseif($kur6=="-2"){$b6=3;}elseif($kur6=="3"){$b6=2.5;}elseif($kur6=="-3"){$b6=2;}elseif($kur6=="4"){$b6=1.5;}elseif($kur6=="-4"){$b6=1;}

if($kur7=="0"){$b7=5;}elseif($kur7=="1"){$b7=4.5;}elseif($kur7=="-1"){$b7=4;}elseif($kur7=="2"){$b7=3.5;}elseif($kur7=="-2"){$b7=3;}elseif($kur7=="3"){$b7=2.5;}elseif($kur7=="-3"){$b7=2;}elseif($kur7=="4"){$b7=1.5;}elseif($kur7=="-4"){$b7=1;}

$cf=($b1+$b3+$b5)/7;
$sf=($b2+$b4+$b6+$b7)/7;

$nt=($cf*0.6)+($sf*0.4);

if($_GET[proses]=="simpan"){
mysql_query("insert into hasil values('','$data3[id_laptop]','$cf','$sf','$nt')");
}
								
?>

           <tr>
           <td><?php echo $no3;  ?></td> 
           <td><?php echo $data3[jenis_laptop];  ?></td>
           <td><?php echo number_format($cf,2); ?></td>
           <td><?php echo number_format($sf,2); ?></td>
           <td><?php echo number_format($nt,2); ?></td>
			<td align=center><a href="media.php?menu=hasilakhir&act=lihat&id=<?php echo"$data3[id_laptop]"; ?>" class="btn btn-info">Lihat</a></td>
		   
<?php 
$no3++;	
}  
?>
</tr></tbody>                               
                                        </tr>
                                    </thead>
									

			</table>
				<div style="margin:5px;">
<a href="media.php?menu=hasilakhir&proses=simpan" class="btn btn-info">Proses Hasil</a>
</div>
			<?php
			if($_GET[proses]=="simpan"){
				echo "<script type='text/javascript'>alert('Data Tersimpan..!!');
			</script>";
			echo "<meta http-equiv='refresh' content='0; url=media.php?menu=hasil2'>";

}
			}else{
			?>
			
			
			 <?php 
			 /*
			 ?>
			 <tbody>
    
    
  <?php

  $queryutama = mysql_query("SELECT  *  FROM  karyawan order by idkaryawan"); 
    $no = 1;
    while ($data = mysql_fetch_array($queryutama)) {
									
?>
           <tr>
           <td><?php echo $no;  ?></td> 
           <td><?php echo $data[nama];  ?></td>
           <td><?php echo $data['k1']; ?></td>
           <td><?php echo $data['k2']; ?></td>
           <td><?php echo $data['k3']; ?></td>
           <td><?php echo $data['k4']; ?></td>
           <td><?php echo $data['k5']; ?></td>
           <td><?php echo $data['k6']; ?></td>
		   <td></td>
		   <td></td>
          
<?php 
$no++;	
}  
?>
</tr></tbody>
									<?php
									*/
									$p1=5;
									$p2=5;
									$p3=3;
									$p4=3;
									$p5=3;
									$p6=3;
									$p7=3;
									/*
									?>
									<thead>
                                        <tr>
                                            <th colspan=2>Angka Profile Matching</th>
                                            <th><?php echo"$p1"; ?></th>
                                            <th><?php echo"$p2"; ?></th>
                                            <th><?php echo"$p3"; ?></th>
                                            <th><?php echo"$p4"; ?></th>
                                            <th><?php echo"$p5"; ?></th>
                                            <th><?php echo"$p6"; ?></th>
                                            
                                        </tr>
                                    </thead>
									<?php 
									*/
									?>
									
									<?php

  $queryutama2 = mysql_query("SELECT  *  FROM  proses_spk order by id_laptop"); 
    $no2 = 1;
    while ($data2 = mysql_fetch_array($queryutama2)) {
$kur1=$data2[k1]-$p1;
$kur2=$data2[k2]-$p2;
$kur3=$data2[k3]-$p3;
$kur4=$data2[k4]-$p4;
$kur5=$data2[k5]-$p5;
$kur6=$data2[k6]-$p6;
$kur7=$data2[k7]-$p7;
$plus=0;
$min=0;
//$juml=$kur1+$kur2+$kur3+$kur4+$kur5+$kur6;

if($kur1>="0"){$plus=$plus+$kur1;}else{$min=$min+$kur1;}
if($kur2>="0"){$plus=$plus+$kur2;}else{$min=$min+$kur2;}
if($kur3>="0"){$plus=$plus+$kur3;}else{$min=$min+$kur3;}
if($kur4>="0"){$plus=$plus+$kur4;}else{$min=$min+$kur4;}
if($kur5>="0"){$plus=$plus+$kur5;}else{$min=$min+$kur5;}
if($kur6>="0"){$plus=$plus+$kur6;}else{$min=$min+$kur6;}
if($kur7>="0"){$plus=$plus+$kur7;}else{$min=$min+$kur7;}									
/*
?>

           <tr>
           <td><?php echo $no2;  ?></td> 
           <td><?php echo $data2[nama];  ?></td>
           <td><?php echo"$kur1"; ?></td>
           <td><?php echo"$kur2"; ?></td>
           <td><?php echo"$kur3"; ?></td>
           <td><?php echo"$kur4"; ?></td>
           <td><?php echo"$kur5"; ?></td>
           <td><?php echo"$kur6"; ?></td>
		   
<?php
*/ 
$no2++;	
}  

  $queryutama3 = mysql_query("SELECT  *  FROM  proses_spk order by id_laptop"); 
    $no3 = 1;
    while ($data3 = mysql_fetch_array($queryutama3)) {
$kur1=$data3[k1]-$p1;
$kur2=$data3[k2]-$p2;
$kur3=$data3[k3]-$p3;
$kur4=$data3[k4]-$p4;
$kur5=$data3[k5]-$p5;
$kur6=$data3[k6]-$p6;
$kur7=$data3[k7]-$p7;

if($kur1=="0"){$b1=5;}elseif($kur1=="1"){$b1=4.5;}elseif($kur1=="-1"){$b1=4;}elseif($kur1=="2"){$b1=3.5;}elseif($kur1=="-2"){$b1=3;}elseif($kur1=="3"){$b1=2.5;}elseif($kur1=="-3"){$b1=2;}elseif($kur1=="4"){$b1=1.5;}elseif($kur1=="-4"){$b1=1;}

if($kur2=="0"){$b2=5;}elseif($kur2=="1"){$b2=4.5;}elseif($kur2=="-1"){$b2=4;}elseif($kur2=="2"){$b2=3.5;}elseif($kur2=="-2"){$b2=3;}elseif($kur2=="3"){$b2=2.5;}elseif($kur2=="-3"){$b2=2;}elseif($kur2=="4"){$b2=1.5;}elseif($kur2=="-4"){$b2=1;}

if($kur3=="0"){$b3=5;}elseif($kur3=="1"){$b3=4.5;}elseif($kur3=="-1"){$b3=4;}elseif($kur3=="2"){$b3=3.5;}elseif($kur3=="-2"){$b3=3;}elseif($kur3=="3"){$b3=2.5;}elseif($kur3=="-3"){$b3=2;}elseif($kur3=="4"){$b3=1.5;}elseif($kur3=="-4"){$b3=1;}

if($kur4=="0"){$b4=5;}elseif($kur4=="1"){$b4=4.5;}elseif($kur4=="-1"){$b4=4;}elseif($kur4=="2"){$b4=3.5;}elseif($kur4=="-2"){$b4=3;}elseif($kur4=="3"){$b4=2.5;}elseif($kur4=="-3"){$b4=2;}elseif($kur4=="4"){$b4=1.5;}elseif($kur4=="-4"){$b4=1;}

if($kur5=="0"){$b5=5;}elseif($kur5=="1"){$b5=4.5;}elseif($kur5=="-1"){$b5=4;}elseif($kur5=="2"){$b5=3.5;}elseif($kur5=="-2"){$b5=3;}elseif($kur5=="3"){$b5=2.5;}elseif($kur5=="-3"){$b5=2;}elseif($kur5=="4"){$b5=1.5;}elseif($kur5=="-4"){$b5=1;}

if($kur6=="0"){$b6=5;}elseif($kur6=="1"){$b6=4.5;}elseif($kur6=="-1"){$b6=4;}elseif($kur6=="2"){$b6=3.5;}elseif($kur6=="-2"){$b6=3;}elseif($kur6=="3"){$b6=2.5;}elseif($kur6=="-3"){$b6=2;}elseif($kur6=="4"){$b6=1.5;}elseif($kur6=="-4"){$b6=1;}


if($kur7=="0"){$b7=5;}elseif($kur7=="1"){$b7=4.5;}elseif($kur7=="-1"){$b7=4;}elseif($kur7=="2"){$b7=3.5;}elseif($kur7=="-2"){$b7=3;}elseif($kur7=="3"){$b7=2.5;}elseif($kur7=="-3"){$b7=2;}elseif($kur7=="4"){$b7=1.5;}elseif($kur7=="-4"){$b7=1;}

$cf=($b1+$b3+$b5)/7;
$sf=($b2+$b4+$b6+$b7)/7;

$nt=($cf*0.6)+($sf*0.4);

if($_GET[id]=="$data3[id_laptop]"){
echo"<p><b>Penilaian Laptop ($data3[jenis_laptop])</b></p>";
echo"<li>NCF = ($b1+$b3+$b5)/6 = ";echo number_format($cf,2); echo"</li>";
echo"<li>NSF = ($b2+$b4+$b6)/6 = ";echo number_format($sf,2); echo"</li>";
echo"<p><b>NT = (";echo number_format($cf,2);echo"*0.6)+(";echo number_format($sf,2);echo"*0.4) = ";echo number_format($nt,2); echo"</b></p>";
}								

$no3++;	
}  
?>

			
			
			<?php
			}
			?>
		</div>
	</div>
</div>