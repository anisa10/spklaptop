
	<header>
		<h5 align="center" >Proses SPK Profile Matching</h5>
	</header>
		<div class="body">
			<form action="simpan.php" method="post" class="form-horizontal">
			<table>
			<tr><td>
					Jenis Laptop</td><td>
								<select name="nim" id="nim" onChange="changeValue(this.value)" class="form-control" >
        <option value=0>-Pilih-</option>
        <?php
    
    $result = mysql_query("SELECT * FROM proses_spk ");   
    $jsArray = "var dtMhs = new Array();\n";       
    while ($row = mysql_fetch_array($result)) {   
        echo '<option value="' . $row['id_laptop'] . '">' . $row['jenis_laptop'] . '</option>';   
        $jsArray .= "dtMhs['" . $row['id_laptop'] . "'] = {nama:'" . addslashes($row['k1']) . "',jrsn:'".addslashes($row['k2'])."',jml:'".addslashes($row['k3'])."',pendapatan:'".addslashes($row['k4'])."',status:'".addslashes($row['k5'])."',hardisk:'".addslashes($row['k6'])."'};\n";   
    }     
    ?>   
        </select>   
							</td></tr>
						<tr><td>Kriteria Harga </td><td>
								<input type="text" data-field="x_username" id="nm" name='nm' class="form-control" readonly />
							</td></tr>
							<tr><td>
							Kriteria Ukuran Layar </td><td>
							<input type="text" data-field="x_username" id="jrsn" name='jrsn' class="form-control" readonly />
							</td></tr>
							<tr><td>	
							
							Kriteria Jenis Processor </td><td>
							
								<input type="text" data-field="x_username" id="jml" name='jml' class="form-control" readonly />
								</td></tr>
							<tr><td>
							Kriteria Kapasitas Memori </td><td>
							<input type="text" data-field="x_username" id="pendapatan" name='pendapatan' class="form-control" readonly />
							</td></tr>
							<tr><td>Kriteria Tipe Memori </td><td>
							
								<input type="text" data-field="x_username" id="status" name='status' class="form-control" readonly />
							</td></tr>
							<tr><td>Kriteria Kapasitas Hardisk </td><td>
							
								<input type="text" data-field="x_username" id="hardisk" name='hardisk' class="form-control" readonly />
							</td></tr>
							<tr><td>
							<input type="submit"  value="PROSES" class="btn btn-primary" />
						</td><td>

					</form>
	
<script type="text/javascript">   
					    <?php echo $jsArray; ?> 
					    function changeValue(Id_keluarga){ 
					    document.getElementById('nm').value = dtMhs[Id_keluarga].nama; 
					    document.getElementById('jrsn').value = dtMhs[Id_keluarga].jrsn; 
						 document.getElementById('jml').value = dtMhs[Id_keluarga].jml; 
						  document.getElementById('pendapatan').value = dtMhs[Id_keluarga].pendapatan; 
						  document.getElementById('status').value = dtMhs[Id_keluarga].status; 
						   document.getElementById('hardisk').value = dtMhs[Id_keluarga].hardisk; 
					    }; 
					    </script> 