<?php 
date_default_timezone_set('Asia/Jakarta');
session_start();

include_once "conn.php";

$con = mysqli_connect('localhost','root','','puskesmas');
if (mysqli_connect_errno()) {
	echo mysqli_connect_error();
}

function base_url($url=null){
	$base_url="https://herokuapp.com";
	if ($url!=null) {
		return $base_url."/".$url;
	}else{
		return $base_url;
	}
}

 ?>