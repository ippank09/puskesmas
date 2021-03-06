<?php 
include_once('../header.php');
 ?>

 <div class="box">
 	<h1>Data Rekam Medis</h1>
    <h4>
        <small>Data</small>
        <div class="pull-right">
           <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a> 
           <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus">Tambah Data</i></a>
        </div>             
    </h4>
    <form method="post" name="proses">
        <div class="table-responsive">
            <table class="table table-stripped table-bordered table-hover" id="pegawai">
                <thead>
                    <tr>
                        
                        <th>No</th>
                        <th>No Rekam Medis</th>
                        <th>Nama Pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>Golongan Darah</th>
                        <th>Keluhan</th>
                        <th>Dokter</th>
                        <th>Diagnosa</th>
                        <th>Resep</th>
                        <th>Tgl Periksa</th>
                        <th align="center">
                        	<i class="glyphicon glyphicon-cog"></i>
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                       $no=1;
                       $query = "SELECT * FROM tb_rekammedis";
                       $sql = mysqli_query($con,$query) or die(mysqli_connect_error($con));
                       
                       while ($data = mysqli_fetch_array($sql)) {?>          
                       <tr>     
                           <td><?=$no++ ?></td>
                           <td><?=$data['id_rm'] ?></td>
                           <td><?=$data['id_pasien'] ?></td>
                           <td><?=$data['jenis_kelamin']?></td>
                           <td><?=$data['gol_darah']?></td>
                           <td><?=$data['keluhan']?></td>
                           <td><?=$data['diagnosa'] ?></td>
                           <td><?=$data['resep']?></td>
                           <td><?=$data['id_dokter']?></td>
                           <td><?=$data['tgl_periksa'] ?></td>
                           <td width="130px">
                               <a href="edit.php?id=<?=$data['id_rm'] ?>" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-edit"></i>Edit</a>
                               <a href="hapus.php?id=<?=$data['id_rm']?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i>Hapus</a>
                       
                           </td>
                       
                     </tr>
                     <?php } ?>
                </tbody>
            </table>
        </div>
    </form>
        <div class="box pull-right">
            <br>
            <button class="btn btn-xs btn-warning " ><i class="glyphicon glyphicon-edit">Edit</i></button>
             <button class="btn btn-xs btn-danger" ><i class="glyphicon glyphicon-trash"> Hapus</i></button>
        </div>
</div>

 </div>
 <script type="text/javascript">
 function hapus(){
    var conf = confirm('Yakin akan menghapus data?');
    if (conf) {
      document.proses.action = 'hapus.php';
      document.proses.submit();
    }
    
   } 

</script>   
<?php include_once('../footer.php'); ?>