<?php 
include_once('../header.php');
 ?>

 <div class="box">
 	<h1>Data Dokter</h1>
    <h4>
        <small>Data</small>
        <div class="pull-right">
           <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a> 
           <a href="generate.php" class="btn btn-succes btn-xs"><i class="glyphicon glyphicon-plus">Generate Data</i></a>
        </div>             
    </h4>
    <form method="post" name="proses">
        <div class="table-responsive">
            <table class="table table-stripped table-bordered table-hover" id="pasien">
                <thead>
                    <tr>
                        
                        <th>No</th>
                        <th>Nama Dokter</th>
                        <th>Alamat</th>
                        <th>jabatan</th>
                        <th>
                        	<center>
                        	<input type="checkbox"   id="select_all" value=""></center>
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                       $no=1;
                       $query = "SELECT * FROM tb_dokter";
                       $sql = mysqli_query($con,$query) or die(mysqli_connect_error($con));
                       
                       while ($data = mysqli_fetch_array($sql)) {?>          
                       <tr>
                           
                           <td><?=$no++ ?></td>
                           <td><?=$data['nm_dokter'] ?></td>
                           <td><?=$data['alamat'] ?></td>
                           <td><?=$data['jabatan'] ?></td>
                           <td align="center"><input type="checkbox" id="checked" name="checked[]" class="check" value="<?=$data['id_dokter'] ?>">
                           </td>
                       
                     </tr>
                     <?php } ?>
                </tbody>
            </table>
        </div>
    </form>
        <div class="box pull-right">
            <button class="btn btn-warning btn-sm" onclick="edit()"><i class="glyphicon glyphicon-edit">Edit</i></button>
             <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"> Hapus</i></button>
        </div>
</div>

 </div>
 <script type="text/javascript">
 $(document).ready(function(){
 	$("#select_all").on('click', function(){
 		if (this.checked) {
 			$('.check').each(function(){
 				this.checked = true;
 			})
 		}else{
 			$('.check').each(function(){
 				this.checked = false;
 			})
 		}
 	});

 	$('.check').on('click', function(){
 		if ($('.check:checked').length==$('.check').length) {
 			$('#select_all').prop('checked',true)
 		}else{
 			$('#select_all').prop('checked',false)
 				}
 		  })
 })

    function edit(){
        var conf = confirm('Yakin akan menghapus data?');
        if (conf) {
        document.proses.action = 'edit.php';
        document.proses.submit();
        }
    }

    function hapus(){
        var conf = confirm('Yakin akan menghapus data?');
    if (conf) {
      document.proses.action = 'hapus.php';
      document.proses.submit();
    }
    }

</script>   
<?php include_once('../footer.php'); ?>