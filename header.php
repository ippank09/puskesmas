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
	    <link href="<?=base_url('./assets/libs/DataTable/datatables.min.css');?>" rel="stylesheet">
	    <link rel="icon" type="text/css" href="<?=base_url()?>/assets/puskesmas.png">
	    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
 </head>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

       <!----- side bar new ---->
	    

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
			    

	</head>

	<body>
        <script src="<?=base_url('./assets/js/jquery.js')?>"></script>
        <script src="<?=base_url('./assets/js/jquery3.js')?>"></script>
    	<script src="<?=base_url('./assets/js/bootstrap.min.js')?>"></script>
    	
    	<script src="<?=base_url('./assets/libs/vendor/ckeditor/ckeditor/ckeditor.js')?>"></script>  	   		    	
		  		<div id="wrapper">
			        <div id="sidebar-wrapper">
			            <ul class="sidebar-nav">
			                <li class="sidebar-brand">
			                    <a href="#"><span class="text-primary"><b>SIM Puskesmas</b></span></a>
			                </li>
			                <li>
			                    <a href="<?=base_url('dashboard')?>">Dashboard</a>
			                </li>
			                <li>
			                    <a href="<?=base_url('pasien/data.php')?>">Registrasi Pasien</a>
			                </li>
			                <?php if (isset($_SESSION['user'])) {?>
			                <li>		                	
			                		<a href="<?=base_url('petani/data.php')?>">Data Rekam Medis</a>
			                	 		                    
			                </li>
			                 <?php 	} ?>
			               			                	 	
			                <li>
			                    <a href="<?=base_url('farmasi/data.php')?>">Apotik/Farmasi</a>
			                </li>
			                <li>
			                    <a href="<?=base_url('dokter/data.php')?>">Data Dokter</a>
			                </li>
			                <li>
			                    <a href="<?=base_url('pegawai/data.php')?>">Data Pegawai</a>
			                </li>
			                <li class="treeview">
				          <a href="#">
				            <i class="fa fa-pie-chart"></i>
				            <span>Charts</span>
				            <span class="pull-right-container">
				              <i class="fa fa-angle-left pull-right"></i>
				            </span>
				          </a>
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
			                 	
			                    <a href="<?=base_url('auth/logout.php')?>"><span class="text-danger">Logout</span></a>
			                </li>
			           
			            </ul>
			        </div>
		        <div id="page-content-wrapper">
		            <div class="container-fluid">

<?php } else echo "<script>window.location='".base_url('auth/login.php')."';</script>";	?>
	
		    			       	

	
