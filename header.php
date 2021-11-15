<?php 
require_once "../config/config.php";
require "assets/libs/vendor/autoload.php";
if (isset($_SESSION['admin'])|| isset($_SESSION['user'])) {?>
    <!DOCTYPE html>
	<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Sistem Informasi Puskesmas</title>

	    <!-- Bootstrap Core CSS -->
	    <link href="<?=base_url('./assets/css/bootstrap.min.css');?>" rel="stylesheet">
	    <link href="<?=base_url('./assets/css/simple-sidebar.css');?>" rel="stylesheet">	
	    <link href="<?=base_url('./assets/css/adminLTE.min.css');?>" rel="stylesheet">   
	    <link href="<?=base_url('./assets/libs/datatable/datatables.min.css');?>" rel="stylesheet">
	    <link rel="icon" type="text/css" href="<?=base_url()?>/assets/puskesmas.png">
	    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
 </head>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
		<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
       	    
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
			    

	</head>

	<body>
        <script src="<?=base_url('./assets/js/jquery.js')?>"></script>
        <script src="<?=base_url('./assets/js/jquery3.js')?>"></script>
    	<script src="<?=base_url('./assets/js/bootstrap.min.js')?>"></script>
    	<script src="<?=base_url('./assets/libs/datatable/datatables.min.js')?>"></script>
    	<script src="<?=base_url('./assets/libs/vendor/ckeditor/ckeditor/ckeditor.js')?>"></script>  	   		    	
		  		<div id="wrapper">
			        <div id="sidebar-wrapper">
			            <ul class="sidebar-nav">
			                <li class="sidebar-brand">
			                    <a href="#"><span class="text-primary"><b>SIM Puskesmas</b></span></a>
			                </li>
			                <li>
			                    <a href="<?=base_url('dashboard')?>"><i class="fas fa-clinic-medical"> Dashboard</i></a>
			                </li>
			                <li>
			                    <a href="<?=base_url('pasien/data.php')?>"><i class="fas fa-users"> Registrasi Pasien</i></a>
			                </li>
			                <?php if (isset($_SESSION['user'])) {?>
			                <li>		                	
			                		<a href="<?=base_url('rekammedis/data.php')?>"> <i class="fas fa-hospital-user"></i> Rekam Medis</i></a>
			                	 		                    
			                </li>
			                 <?php 	} ?>
			               			                	 	
			                <li>
			                    <a href="<?=base_url('farmasi/data.php')?>"><i class="fas fa-prescription-bottle-alt"></i> Apotik/Farmasi</i></a>
			                </li>
							<li>
			                    <a href="<?=base_url('bayar/data.php')?>"><i class="fas fa-money-bill"> Pembayaran</i></a>
			                </li>
			                <li>
			                    <a href="<?=base_url('dokter/data.php')?>"><i class="fas fa-user-md"> Data Dokter</i></a>
			                </li>
			                <li>
			                    <a href="<?=base_url('pegawai/data.php')?>"><i class="fas fa-user-tag"> Data Pegawai</i></a>
			                </li>
			                <li class="treeview">
				          
				          <ul class="treeview-menu">
				            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
				            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
				            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
				            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
				          </ul>
			              <!--   <li>
			                    <a href="<?=base_url('farmasi/data.php')?>">Farmasi</a>
			                </li>
			                <li>
			                    <a href="<?=base_url('rekam_medis/data.php')?>">Rekam Medik</a>
			                </li>-->
			                <li> 
			                 	
			                    <a href="<?=base_url('auth/logout.php')?>"><span class="text-danger"><i class="fas fa-sign-out-alt">Logout</i></span></a>
			                </li>
			           
			            </ul>
			        </div>
		        <div id="page-content-wrapper">
		            <div class="container-fluid">

<?php } else echo "<script>window.location='".base_url('auth/login.php')."';</script>";	?>
	
		    			       	

	
