<?php 
include_once('../header.php');
 ?>

 <div class="container">
 	<div class="row">
         <?php
         $id = @$_GET['id'];
          $query = mysqli_query($con,"SELECT * FROM tb_pegawai WHERE id_pegawai = '$id'") or die(mysqli_connect_error($con));
          $data = mysqli_fetch_array($query); 
         ?>
 		<div class="col-lg-6 mx-auto">
 			<div class="card-body">
 				<h3>Edit Pegawai</h3>
 				<p class="text-muted">Edit Data Pegawai</p>
 				<hr>
 				<a href="data.php" class="btn btn-primary btn-sn mb-5">Kembali</a>
 				<br>
 				<br>	
 				<form action="proses.php" method="post">
 					<div class="form-group">
 						<label>Nama Pegawai</label>
                        <input type="hidden" name="id" value="<?=$data['id_pegawai']?>"> 
 						<input type="text" name="nama_pegawai" value="<?=$data['nm_pegawai']?>" class="form-control" required>
 					</div>
 					<div class="form-group">
 						<label>Alamat</label>
 						<textarea class="form-control" name="alamat" required></textarea>
 					</div>
 					<div class="form-group">
 						<label>No Telp</label>
 						<input type="number" name="no_telp" class="form-control" required>
 					</div>
                     <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" required>
                     </div>
                    <div class="form-group">
                        <button type="submit" name="tambah" class="btn btn-primary btn-sm">Tambah</button>
                    </div>
 				</form>
 			</div>
 		</div>
 	</div>
 </div>