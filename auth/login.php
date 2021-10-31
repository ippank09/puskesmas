<?php 
ob_clean();
require_once '../config/config.php';
if (isset($_SESSION['admin']) || isset($_SESSION['user'])) {
  echo "<script>window.location='".base_url()."';</script>";
} else{


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Sistem informasi puskesmas</title>
<link rel="stylesheet"  href="../assets/css/bootstrap.min.css">
<link rel="stylesheet"  href="../assets/css/bootstrap.css">
<link rel="stylesheet"  href="../assets/css/AdminLTE.min.css">
<link rel="stylesheet" href="../assets/css/ionicons.min.css">
<link rel="icon" type="text/css" href="<?=base_url()?>/assets/puskesmas.png">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"
 </head>
 <body class="hold-transition login-page">
 	<div class="login-box">
 		<div class="login-logo">
 			<img src="">
 		</div>
 		<div class="login-box-body">
 			<p class="login-box-msg">Masukkan Username Dan Password Anda</p>


 			<?php 
            if (isset($_POST['login'])) {
              $user = trim(mysqli_real_escape_string($con,$_POST['user']));
              $pass = sha1(trim(mysqli_real_escape_string($con,$_POST['pass'])));
              $sql_login = mysqli_query($con,"SELECT * FROM admin WHERE username='$user' AND password='$pass'") or die(mysqli_connect_error($con));
              $data = mysqli_fetch_array($sql_login);
              if (mysqli_num_rows($sql_login) > 0) {
                $_SESSION['admin'] = $user;
                echo "<script>window.location='".base_url()."'</script>";
                if ($data['level']=="admin") {
                  $_SESSION['user']=$data['username'];
                }

              }else { ?>
                  <div class="row">
                                        <div class="col-lg-6 col-lg-offset-3">
                                             <div class="alert alert-danger alert-dismissable" role="alert">
                                                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                  <strong>Login Gagal!</strong>Username/Password Salah
                                              </div>
                                          </div>
                                      </div>          
                                   <?php   
                            }
                  }
       			 ?>

 	<form action="" method="post">
 		<div class="form-group has-feedback">
 			<input type="text" name="user" class="form-control" placeholder="Username">
 			<span class="glyphicon glyphicon-user form-control-feedback"></span>
 		</div>
 		<div class="form-group has-feedback">
 			<input type="password" name="pass" class="form-control" placeholder="Password">
 			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
 		</div>
 		<div class="row">
 			<div class="col-xs-8">
 				
 			</div>
 			<div class="col-xs-4">
 				<button type="submit" name="login" value="login" class="btn btn-primary btn-block btn-flat">
 					Login
 				</button>
 			</div>
 		</div>
 	</form>		 

 		</div>
 	</div>
 		

 <!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>		
 </body>
 </html>
 <?php } ?>