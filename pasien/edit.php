<?php 
include_once('../header.php');
 ?>

 <div class="container">
	<div class="row">
		<?php 
			$id = $_GET['id'];
			$sql = mysqli_query($con,"SELECT * FROM tb_pasien WHERE id_pasien = '$id'") or die(mysqli_connect_error($con));
			$data = mysqli_fetch_array($sql);
		 ?>
		<div class="col-lg-6 mx-auto">
			<div class="card-body">
				<h3>Edit Pasien</h3>
				<p class="text-muted">Edit Data Pasien</p>
				<hr>
				<a href="data.php" class="btn btn-primary btn-sm mb-5">Kembali</a>
				<form action="proses.php" method="post">
					<div class="form-group">
						<label>Nama</label>
						<input type="hidden" name="id" value="<?=$data['id_pasien'] ?>" name="">
						<input type="text" name="nama" value="<?=$data['nm_pasien'] ?>" class="form-control" required>
					</div>

					<div class="form-group">
						<label>No KTP</label>
						<input type="number" name="ktp" value="<?=$data['no_ktp'] ?>" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="jk">Jenis Kelamin</label>
						<br>
						<label class="radio-inline"><input type="radio" name="jk" value="L" <?=$data['jenis_kelamin'] == "L" ? "checked" : null ?>>Laki-Laki</label>
						<label class="radio-inline"><input type="radio" name="jk" value="P" <?=$data['jenis_kelamin'] =="P" ? "checked" : null ?>>Perempuan</label>
					</div>

					<div class="form-group">
						<label>Umur</label>
						<input type="number" name="umur" value="<?=$data['umur'] ?>" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Golongan Darah</label>
						<select name="gol_darah" class="form-control" required>
							<option value="">--PILIH--</option>
							<option value="A" <?=$data['gol_darah'] == "A" ? "Selected" : ""?>>A</option>
							<option value="B" <?=$data['gol_darah'] == "B" ? "Selected" : ""?>>B</option>
							<option value="AB" <?=$data['gol_darah'] == "AB" ? "Selected" : ""?>>AB</option>
							<option value="O" <?=$data['gol_darah'] == "O" ? "Selected" : ""?>>O</option>
						</select>
					</div>

					<div class="form-group">
						<label>Alamat</label>
						<br>
						<textarea name="alamat"  class="form-control" required><?=$data['alamat'] ?></textarea>
					</div>

					<div class="form-group">
						<label>Pembayaran</label>
						<select name="jenis_biaya" class="form-control" required>
							<option value="">---PILIH----</option>
							<option value="bpjs" <?=$data['jenis_biaya'] == "bpjs" ? "Selected" : "" ?>>BPJS</option>
							<option value="umum" <?=$data['jenis_biaya'] == "umum" ? "Selected" : "" ?>>Umum</option>
						</select>
					</div>

					<input type="submit" name="edit" value="edit" class="btn btn-primary btn-sm">
				</form>
			</div>
		</div>
	</div>
</div>