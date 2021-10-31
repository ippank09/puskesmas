<?php 

include_once('../header.php');
 ?>

 <div class="container">
 	<div class="row">
 		<?php 
 			$id = @$_GET['id'];
 			$sql = mysqli_query($con, "SELECT * FROM tb_farmasi WHERE id_obat='$id'") or die(mysqli_connect_error($con));
 			$data = mysqli_fetch_array($sql);
 					 ?>
 		<div class="col-lg-6 mx-auto">
 			<div class="card-body">
 				<h3>Tambah Obat</h3>
 				<p class="text-muted">Tambah Data Obat</p>
 				<hr>
 				<a href="data.php" class="btn btn-primary btn-sn mb-5">Kembali</a>
 				<br>
 				<br>	
 				<form action="proses.php" method="post">
 					
 					<div class="form-group">
 						
 						<label>Nama Obat</label>
 						<input type="hidden" name="id" value="<?=$data['id_obat'] ?>">
 						<input type="text" name="nama_obat" value="<?=$data['nm_obat'] ?>" class="form-control" required>
 					</div>
 					<div class="form-group">
 						<label>Keterangan</label>
 						<textarea class="form-control" name="keterangan" value="" required><?=$data['ket_obat'] ?></textarea>
 					</div>
 					<div class="form-group">
 						<label>Stok / Jumlah</label>
 						<input type="number" name="stok" value="<?=$data['stok_obat'] ?>" class="form-control" required>
 					</div>
                    <div class="form-group">
                        <button type="submit" name="edit" value="edit" class="btn btn-primary btn-sm">Edit</button>
                    </div>
 				</form>
 			</div>
 		</div>
 	</div>
 </div>
 