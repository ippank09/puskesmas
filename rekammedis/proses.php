<?php
require_once '../config/config.php';
require "../assets/libs/vendor/autoload.php";


        use Ramsey\Uuid\Uuid;
        use  Ramsey\Uuid\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['tambah'])){
    $uuid = Uuid::uuid4()->toString();
    $rm = trim(mysqli_real_escape_string($con,$_POST['no_rm']));
    $nama = trim(mysqli_real_escape_string($con,$_POST['pasien']));
    $jk = trim(mysqli_real_escape_string($con,$_POST['jk']));
}        