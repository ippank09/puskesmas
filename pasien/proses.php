<?php 	
require_once "../config/config.php";
require "../assets/libs/vendor/autoload.php";

		use Ramsey\Uuid\Uuid;
		use Ramsey\Uuid\Uuid\Exception\UnsatisfiedDependencyException;

	if (isset($_POST['tambah'])) {
			$uuid = Uuid::uuid4()->toString();
			$nama_pasien = trim(mysqli_real_escape_string($con,$_POST['nama']));
			$ktp = trim(mysqli_real_escape_string($con,$_POST['ktp']));
			$jk = trim(mysqli_real_escape_string($con,$_POST['jk']));
			$umur = trim(mysqli_real_escape_string($con,$_POST['umur']));
			$gol_darah = trim(mysqli_real_escape_string($con,$_POST['gol_darah']));
			$alamat = trim(mysqli_real_escape_string($con,$_POST['alamat']));
			$jenis_biaya = trim(mysqli_real_escape_string($con,$_POST['jenis_biaya']));

			mysqli_query($con,"INSERT INTO tb_pasien (id_pasien,nm_pasien,no_ktp,jenis_kelamin,umur,gol_darah,alamat,jenis_biaya) VALUES ('$uuid','$nama_pasien','$ktp','$jk','$umur','$gol_darah','$alamat','$jenis_biaya')") or die(mysqli_connect_error($con));
			echo "<script>window.location='data.php';</script>";

		}elseif ($_POST['edit']) {
			$uuid = Uuid::uuid4()->toString();
			$id = $_POST['id'];
			$nama_pasien = trim(mysqli_real_escape_string($con,$_POST['nama']));
			$ktp = trim(mysqli_real_escape_string($con,$_POST['ktp']));
			$jk = trim(mysqli_real_escape_string($con,$_POST['jk']));
			$umur = trim(mysqli_real_escape_string($con,$_POST['umur']));
			$gol_darah = trim(mysqli_real_escape_string($con,$_POST['gol_darah']));
			$alamat = trim(mysqli_real_escape_string($con,$_POST['alamat']));
			$jenis_biaya = trim(mysqli_real_escape_string($con,$_POST['jenis_biaya']));

			mysqli_query($con,"UPDATE tb_pasien SET nm_pasien='$nama_pasien', no_ktp='$ktp',jenis_kelamin='$jk',umur='$umur',gol_darah='$gol_darah',alamat='$alamat',jenis_biaya='$jenis_biaya' WHERE id_pasien='$id'");

			echo "<script>window.location='data.php';</script>";
		}	
 ?>