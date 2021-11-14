<?php
require_once "../config/config.php";
      $id = @$_GET['id'];
      mysqli_query($con,"DELETE FROM tb_pegawai WHERE id_pegawai='$id'") or die(mysqli_error($con));
      echo "<script>window.location='data.php';</script>";               
?>