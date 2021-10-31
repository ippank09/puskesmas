<?php 
include_once('../header.php');
 ?>


<div class="container">
 	<div class="row">
 		<div class="col-lg-6 mx-auto">
 			<div class="card-body">
 				<h3>Tambah Dokter</h3>
 				<div class="pull-right">
                    <a href="data.php" class="btn btn-info btn-xs">Data</a>
                    <a href="generate.php" class="btn btn-info btn-xs">Tambah Data Lagi</a>
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
                                for ($i=1; $i<=@$_POST['count_add'] ; $i++) {?> 
                                    <tr>
                                        <td><?=$i?></td>
                                        <td>
                                            <input type="text" name="nama-<?=$i?>" class="form-control" required>
                                        </td>
                                        <td>
                                            <input type="text" name="alamat-<?=$i?>" class="form-control" required>
                                        </td>
                                        <td>
                                            <input type="text" name="jabatan-<?=$i?>" class="form-control" required>
                                        </td>
                                    </tr>
                                <?php } ?>
                            
                        </table>
 					</div>
 					<div class="form-group pull-right">
 						<input type="submit" name="tambah" value="tambah" class="btn btn-success">
 					</div>

 				</form>
 			</div>
 		</div>
 	</div>
 </div>

 <?php include_once('../footer.php'); ?>