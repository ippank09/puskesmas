<?php 
include_once('../header.php');
ob_start();
 ?>

 <div class="box">
	<h1>Data Obat</h1> 	
	<h4>
		<small>Data Stok Obat</small>
		<div class="pull-right">
			<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh">Refresh</i></a>
			<a href="add.php" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-plus">Tambah Data</i></a>
		</div>
	</h4>
	<div>
		<form class="form-inline" action="" method="post">
			<div class="form-group">
				<input type="text" name="pencarian" class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
			</div>
			</form>
			<div class="table-responsive">
				<table class="table table-stripped table-bordered table-hover" id="farmasi">
					<thead>
						<tr>
							
							<th>No</th>
							<th>Nama Obat</th>
							<th>Keterangan Obat</th>
							<th>Stok Obat</th>
							<th align="center"><i class="glyphicon glyphicon-cog">Pengaturan</i></th>
						</tr>
					</thead>
					<tbody>
						<?php 
					
						$batas=3;
						$hal=@$_GET['hal'];
						if (empty($hal)) {
							$posisi = 0;
							$hal = 1;
						}else{
							$posisi = ($hal-1) * $batas;
						}
						$no = 1;
						if ($_SERVER['REQUEST_METHOD'] == "POST") {
							$cari = trim(mysqli_real_escape_string($con,$_POST['pencarian']));
							if ($cari !='') {
								$sql_cari = "SELECT * FROM tb_farmasi WHERE nm_obat LIKE '$cari'";
								$query = $sql_cari;
								$queryjml = $sql_cari;
							}else{
								$query = "SELECT * FROM tb_farmasi LIMIT $posisi, $batas";
								$queryjml = "SELECT * FROM tb_farmasi";
								$no = $posisi + 1;
							}
						}else{
								$query = "SELECT * FROM tb_farmasi LIMIT $posisi, $batas";
								$queryjml = "SELECT * FROM tb_farmasi";
								$no = $posisi + 1;
						}
						
							$sql_farmasi = mysqli_query($con,$query)or die(mysqli_connect_error($con));
							if (mysqli_num_rows($sql_farmasi) > 0) {	 					
								while($data = mysqli_fetch_array($sql_farmasi)) { ?>
								<tr>
							
								
							</td>		
							<td><?=$no++ ?></td>
							<td><?=$data['nm_obat'] ?></td>
							<td><?=$data['ket_obat'] ?></td>
							<td><?=$data['stok_obat'] ?></td>
							<td class="text-center">
								<a href="edit.php?id=<?=$data['id_obat'] ?>" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-edit">Edit</i></a>
								 <a href="hapus.php?id=<?=$data['id_obat'] ?>" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash">Hapus</i></a>
							</td>
						</tr>	
									
							<?php	
							}		
							}else{
								echo "<tr><td colspan=\"4\" align=\"center\">Data tidak ditemukan</td></tr>";
							}
							?>
					
					</tbody>
				</table>
			</div>
			<?php 
				if (@$_POST['pencarian'] =='') {?>
				<div style="float:left">
					<?php 
						$jml = mysqli_num_rows(mysqli_query($con,$queryjml));
						echo "Jumlah Data : <b>$jml</b>";
					?>		
				</div>				
			 		<div style="float:right;">
			 			<ul class="pagination pagination-sm" style="margin:0">
			 				<?php 
			 					$jml_hal = ceil($jml/$batas);
			 					for ($i=1; $i <= $jml_hal ; $i++) { 
			 						if ($i != $hal) {
			 							echo "<li><a href=\"?hal=$i\">$i</a></li>";
			 						}else{
			 							echo "<li class=\"active\"><a>$i</a></li>";
			 						}
			 					}
			 				 ?>
			 			</ul>
			 		</div>
			 		<?php  
			 	}else{ 
			 		echo "<div style=\"float:left;\">";
					$jml = mysqli_num_rows(mysqli_query($con,$queryjml));
			 		echo "Data Hasil Pencarian : <b>$jml</jml>";
					echo "</div>";
			 		} ?>
		
	</div>
 </div>

 <script type="text/javascript">
 function hapus(){
    var conf = confirm('Yakin akan menghapus data?');
    if (conf) {
      document.proses.action = 'hapus.php';
      document.proses.submit();
    }
    
   }   
</script>   