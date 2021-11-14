<?php 
include_once('../header.php');
 ?>

 <div class="box">
 	<h1>Data Pegawai</h1>
    <h4>
        <small>Data</small>
        <div class="pull-right">
           <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a> 
           <a href="add.php" class="btn btn-succes btn-xs"><i class="glyphicon glyphicon-plus">Tambah Data</i></a>
        </div>             
    </h4>
    <form method="post" name="proses">
        <div class="table-responsive">
            <table class="table table-stripped table-bordered table-hover" id="pegawai">
                <thead>
                    <tr>
                        
                        <th>No</th>
                        <th>No Invoice</th>
                        <th>Tanggal</th>
                        <th>Nama Pasien</th>
                        <th>Keterangan</th>
                        <th align="center">
                        	<i class="glyphicon glyphicon-cog"></i>
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                       $no=1;
                       $query = "SELECT * FROM tb_bayar";
                       $sql = mysqli_query($con,$query) or die(mysqli_connect_error($con));
                       
                       while ($data = mysqli_fetch_array($sql)) {?>          
                       <tr>     
                           <td><?=$no++ ?></td>
                           <td><?=$data['no_bayar'] ?></td>
                           <td><?=$data['tgl_bayar'] ?></td>
                           <td><?=$data['nm_pasien']?></td>
                           <td>Obat<?=$data['nm_obat'] ?></td>
                           <td>
                               <a href="edit.php?id=<?=$data['id_pegawai']?>" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-edit">Edit</i></a>
                               <a href="" class="btn btn-danger btn-xs" onclick="hapus()"><i class="glyphicon glyphicon-remove">Hapus</i></a>
                           </td>
                           <tr>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td>Dokter</td>
                           </tr>                             
                           
                       
                     </tr>
                     <?php } ?>
                </tbody>
            </table>
        </div>
    </form>
        <div class="box pull-right">
           
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