<?php 
include_once('../header.php');
 ?>

 <div class="container">
 	<div class="row">
 		<div class="col-lg-6 mx-auto">
 			<div class="card-body">
 				<h3>Tambah Pegawai</h3>
 				<p class="text-muted">Tambah Data Pegawai</p>
 				<hr>
 				<a href="data.php" class="btn btn-primary btn-sn mb-5">Kembali</a>
 				<br>
 				<br>	
 				<form action="proses.php" method="post">
 					<div class="form-group">
 						<label>Nama Pegawai</label>
 						<input type="text" name="nama_pegawai" class="form-control" required>
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