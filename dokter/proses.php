<?php 
require_once '../config/config.php';
require "../assets/libs/vendor/autoload.php";

		use Ramsey\Uuid\Uuid;
		use Ramsey\Uuid\Uuid\Exception\UnsatisfiedDependencyException;
 
 if (isset($_POST['tambah'])) {
 	
  $total = $_POST['total'];
  for ($i=1; $i <=$total ; $i++) { 
    $uuid = Uuid::uuid4()->toString();
    $nama = trim(mysqli_real_escape_string($con,$_POST['nama-'.$i]));
    $alamat = trim(mysqli_real_escape_string($con,$_POST['alamat-'.$i]));
    $jabatan = trim(mysqli_real_escape_string($con,$_POST['jabatan-'.$i]));

    $sql =  mysqli_query($con, "INSERT INTO tb_dokter(id_dokter,nm_dokter,alamat,jabatan) VALUES('$uuid','$nama','$alamat','$jabatan')") or die(mysqli_connect_error($con));
  }
  


  if ($sql) {
    echo "<script>alert('".$total." data berhasil ditambahkan');window.location='data.php'</script>";
  }else{
    echo "<script>alert('data gagal ditambahkan!'); window.location='add.php'</script>";
  }

 		
 }elseif (isset($_POST['edit'])) {
  for ($i=0; $i < count($_POST['id']) ; $i++) { 
    $id = $_POST['id'][$i];
    $nama = $_POST['nama'][$i];
    $alamat = $_POST['alamat'][$i];
    $jabatan = $_POST['jabatan'][$i];

   mysqli_query($con, "UPDATE  tb_dokter SET nm_dokter='$nama', alamat='$alamat', jabatan='$jabatan' WHERE id_dokter='$id'") or die(mysqli_connect_error($con));
  }
 
    echo "<script>alert('data berhasil diedit!'); window.location='data.php'</script>";
 
 }

