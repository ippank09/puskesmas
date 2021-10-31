<?php 	
include_once('../header.php');
 ?>

<div class="container">
	<div class="row">
		<div class="col-lg-6 mx-auto">
			<div class="card-body">
				<h3>Tambah Pasien</h3>
				<p class="text-muted">Tambah Data Pasien</p>
				<hr>
				<a href="data.php" class="btn btn-primary btn-sm mb-5">Kembali</a>
				<form action="proses.php" method="post">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" class="form-control" required>
					</div>

					<div class="form-group">
						<label>No KTP</label>
						<input type="number" name="ktp" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="jk">Jenis Kelamin</label>
						<br>
						<label class="radio-inline"><input type="radio" name="jk" value="L">Laki-Laki</label>
						<label class="radio-inline"><input type="radio" name="jk" value="P">Perempuan</label>
					</div>

					<div class="form-group">
						<label>Umur</label>
						<input type="number" name="umur" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Golongan Darah</label>
						<select name="gol_darah" class="form-control" required>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="AB">AB</option>
							<option value="O">O</option>
						</select>
					</div>

					<div class="form-group">
						<label>Alamat</label>
						<br>
						<textarea name="alamat" class="form-control" required></textarea>
					</div>

					<div class="form-group">
						<label>Pembayaran</label>
						<select name="jenis_biaya" class="form-control" required>
							<option value="">---PILIH----</option>
							<option value="bpjs">BPJS</option>
							<option value="umum">Umum</option>
						</select>
					</div>

					<input type="submit" name="tambah" value="simpan" class="btn btn-primary btn-sm">
				</form>
			</div>
		</div>
	</div>
</div>