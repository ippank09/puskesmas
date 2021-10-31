<?php 
$chk = @$_POST['checked'];

if (!isset($chk)) {
    echo "<script>alert('Tidak ada data yang dipilih');window.location='data.php';</script>";
}else{
include_once('../header.php');?>

<div class="container">
 	<div class="row">
 		<div class="col-lg-6 mx-auto">
 			<div class="card-body">
 				<h3>Edit Dokter</h3>
 				<div class="pull-right"> 
                    
                </div>
 				<hr>
 				<a href="data.php" class="btn btn-primary btn-sn mb-5">Kembali</a>
 				<br>
 				<br>	
 				<form action="proses.php" method="post">
 					<div class="form-group">
 						
 						<input type="hidden" name="total" value="<?=@$_POST['count_add'] ?>">
                        <table class="table">
                            <tr>
                                <th>#</th>
                                <th>Nama Dokter</th>
                                <th>Alamat</th>
                                <th>Jabatan</th>
                            </tr>
                            <?php 
                                $no = 1;
                               foreach($chk as $id){?>
                               <?php
                                    $sqldok = mysqli_query($con,"SELECT * FROM tb_dokter WHERE id_dokter = '$id' ") or die(mysqli_connect_error($con));
                                    while($data=mysqli_fetch_array($sqldok)){?>
                                    <tr>
                                        <td><?=$no++ ?></td>
                                        <td>
                                            <input type="hidden" name="id[]" value="<?=$data['id_dokter']?>" >
                                            <input type="text" name="nama[]" value="<?=$data['nm_dokter']?>" class="form-control" required>
                                        </td>
                                        <td>
                                            <input type="text" name="alamat[]" value="<?=$data['alamat']?>" class="form-control" required>
                                        </td>
                                        <td>
                                            <input type="text" name="jabatan[]" value="<?=$data['jabatan']?>" class="form-control" required>
                                        </td>
                                    </tr>
                                <?php 
                                    }
                                } 
                            ?>
                        </table>
 					</div>
 					<div class="form-group pull-right">
 						<input type="submit" name="edit" value="edit" class="btn btn-success">
 					</div>

 				</form>
 			</div>
 		</div>
 	</div>
 </div>

 <?php include_once('../footer.php'); 
        }
 ?>