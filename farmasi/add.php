<?php 
include_once('../header.php');
 ?>

 <div class="container">
 	<div class="row">
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
 						<input type="text" name="nama_obat" class="form-control" required>
 					</div>
 					<div class="form-group">
 						<label>Keterangan</label>
 						<textarea class="form-control" name="keterangan" required></textarea>
 					</div>
 					<div class="form-group">
 						<label>Stok / Jumlah</label>
 						<input type="number" name="stok" class="form-control" required>
 					</div>
                    <div class="form-group">
                        <button type="submit" name="tambah" class="btn btn-primary btn-sm">Tambah</button>
                    </div>
 				</form>
 			</div>
 		</div>
 	</div>
 </div>