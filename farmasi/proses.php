<?php 
require_once '../config/config.php';
require "../assets/libs/vendor/autoload.php";

		use Ramsey\Uuid\Uuid;
		use Ramsey\Uuid\Uuid\Exception\UnsatisfiedDependencyException;
 
 if (isset($_POST['tambah'])) {
 	$uuid = Uuid::uuid4()->toString();
 	$nama = trim(mysqli_real_escape_string($con,$_POST['nama_obat']));
 	$ket = trim(mysqli_real_escape_string($con,$_POST['keterangan']));
 	$stok = trim(mysqli_real_escape_string($con,$_POST['stok']));

 	mysqli_query($con, "INSERT INTO tb_farmasi (id_obat,nm_obat,ket_obat,stok_obat) VALUES('$uuid','$nama','$ket','$stok')") or die(mysqli_connect_error($con));

 		echo "<script>window.location='data.php';</script>";	
 }elseif ($_POST['edit']) {
   $id = $_POST['id'];
 	  $uuid = Uuid::uuid4()->toString();
    $nama = trim(mysqli_real_escape_string($con,$_POST['nama_obat']));
    $ket = trim(mysqli_real_escape_string($con,$_POST['keterangan']));
    $stok = trim(mysqli_real_escape_string($con,$_POST['stok']));

    mysqli_query($con, "UPDATE tb_farmasi SET nm_obat='$nama', ket_obat='$ket', stok_obat='$stok' WHERE id_obat='$id'");

    echo "<script>window.location='data.php';</script>";  
 }

