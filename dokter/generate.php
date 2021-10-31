<?php 
include_once('../header.php');
 ?>


<div class="container">
 	<div class="row">
 		<div class="col-lg-6 mx-auto">
 			<div class="card-body">
 				<h3>Tambah Dokter</h3>
 				<p class="text-muted">Tambah Data Dokter</p>
 				<hr>
 				<a href="data.php" class="btn btn-primary btn-sn mb-5">Kembali</a>
 				<br>
 				<br>	
 				<form action="add.php" method="post">
 					<div class="form-group">
 						<label for="count_add">Banyak Record yang ditambahkan</label>
 						<input type="text" name="count_add" maxlength="2" pattern="[0-9]+" class="form-control" required>
 					</div>
 					<div class="form-group pull-right">
 						<input type="submit" name="generate" value="generate" class="btn btn-success">
 					</div>

 				</form>
 			</div>
 		</div>
 	</div>
 </div>

 <?php include_once('../footer.php'); ?>