<?php
include_once('../header.php');
?>

<div class="container">
        <div class="col-lg-6 card mb-5">
            <div class="card-body">
                <h3>Tambah Data Rekam Medis</h3>
                <p class="text-muted">Tambah Data Pegawai</p>
                <hr>
                <a href="data.php" class="btn btn-primary btn-sn mb-5">Kembali</a>
                <br>
                <br>
                <form action="proses.php" method="post">
                    <div class="form-group">
                        <label>No Rekam Medis</label>
                        <input type="text" name="no_rm" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nama Pasien</label>
                        <select name="pasien" id="pasien" class="form-control" required>
                            <option value="">--Pilih--</option>
                            <?php
                                $sql_pasien = mysqli_query($con,"SELECT * FROM tb_pasien") or die(mysqli_connect_error($con));
                                while($data_pasien = mysqli_fetch_array($sql_pasien)){
                                    echo '<option value="'.$data_pasien['id_pasien'].'">'.$data_pasien['nm_pasien'].'</option>';

                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                           <label for="">Umur</label>
                           <input type="number" name="umur" class="form-control" required>     
                    </div>
                    <div class="form-group">
                            <label for="">Jenis Kelamin</label> 
                            <label class="radio-inline"> <input type="radio"  id="jk" name="jk" value="Laki-Laki">Laki-laki</label> 
                            <label class="radio-inline"> <input type="radio"  id="jk" name="jk" value="Perempuan">Perempuan</label>  
                    </div>
                    <div class="form-group">
                           <label for="">Golongan Darah</label>
                           <select name="gol_darah" id="gol_darah" class="form-control">
                                <option value="">--Pilih--</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                           </select>     
                    </div>
                    <div class="form-group">
                            <label for="">Keluhan</label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control">

                            </textarea>
                    </div>
                    <div class="form-group">
                              <label for="">Diagnosa</label>
                              <textarea name="" id="" cols="30" rows="10" class="form-control">

                              </textarea>  
                    </div>
                     <div class="form-group">
                               <label for="">Resep</label>
                               <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea> 
                     </div>           
                      <div class="form-group">
                               <label for="">Nama Dokter</label>
                               <select name="dokter" id="dokter" class="form-control">
                                   <option value="">--Pilih--</option>
                                   <?php 
                                    $sql_dok = mysqli_query($con,"SELECT * FROM tb_dokter") or die(mysqli_connect_error($con));
                                    while($data_dok = mysqli_fetch_array($sql_dok)){
                                        echo '<option value="'.$data_dok['id_dokter'].'">'.$data_dok['nm_dokter'].'</option>';
                                    }
                                   ?>
                               </select> 
                      </div>
                      <div class="form-group">
                                  <label for="">Tanggal Periksa</label>
                                  <input type="date" name="tgl_periksa" class="form-control">  
                      </div>
                      <div class="form-group">
                             <button type="submit" name="tambah" value="tambah" class="btn btn-primary btn-sm">Tambah</button>       
                      </div>          
                </form>
            </div>
        </div>
    
</div>