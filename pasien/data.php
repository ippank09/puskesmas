<?php 
include_once('../header.php');

?>

<div class="box">
    <h1>Data Calon Pasien</h1>
    <h4>
        <small>Data</small>
        <div class="pull-right">
           <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a> 
           <a href="add.php" class="btn btn-succes btn-xs"><i class="glyphicon glyphicon-plus">Tambah Data</i></a>
        </div>             
    </h4>
    <form method="post" name="proses">
        <div class="table-responsive">
            <table class="table table-stripped table-bordered table-hover" id="pasien">
                <thead>
                    <tr>
                        <th>
                            <center>
                                <input type="checkbox" id="select_all" value="">
                            </center>
                        </th>
                        <th>No</th>
                        <th>Nama Pasien</th>
                        <th>NO. KTP</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
                        <th>Gol. Darah</th>
                        <th>Alamat</th>
                        <th>Pembiayaan</th>
                        <th><i class="glyphicon glyphicon-cog" align="center"></i>Pengaturan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                       $no=1;
                       $query = "SELECT * FROM tb_pasien";
                       $sql = mysqli_query($con,$query) or die(mysqli_connect_error($con));
                       
                       while ($data = mysqli_fetch_array($sql)) {?>          
                       <tr>
                           <td align="center"><input type="checkbox" name="checked[]" class="check" value="<?=$data['id_pasien'] ?>">
                           </td>
                           <td><?=$no++ ?></td>
                           <td><?=$data['nm_pasien'] ?></td>
                           <td><?=$data['no_ktp'] ?></td>
                           <td><?=$data['jenis_kelamin'] ?></td>
                           <td><?=$data['umur'] ?></td>
                           <td><?=$data['gol_darah'] ?></td>
                           <td><?=$data['alamat'] ?></td>
                            <td><?=$data['jenis_biaya'] ?></td>
                            <td align="center">
                                <a href="edit.php?id=<?=$data['id_pasien'] ?>"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href=""><i class="glyphicon glyphicon-print"></i></a>
                                <button class="btn btn-danger btn-xs" onclick="hapus()"><i class="glyphicon glyphicon-trash">Hapus</i></button>
                            </td> 
                       </tr>    
                       <?php } ?>
                     
                </tbody>
            </table>
        </div>
    </form>
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