<?php 
include './../koneksi/koneksi.php'; 
?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
             Penilaian  
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"> Home</a></li>
            <li class="active"> Penilaian  </li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
    <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data  Penilaian  </h3>  
                </div><!-- /.box-header -->
                <div class="box-body">
                
              <!-- tabpanel -->
              <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Penilaian</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Hasil</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Rangking</button>
              </li>
            </ul>

            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade " id="home" role="tabpanel" aria-labelledby="home-tab">
                <form action="" method="POST">
                  <h3 class="box-title">Data  Penilaian  </h3>  
                  <table  class="table table-bordered table-striped ">

                    <thead>
                      <tr>
                      <th rowspan="2" style="vertical-align: middle" class="text-center">No</th>
		                <th rowspan="2" style="vertical-align: middle" class="text-center">Alternatif</th>
                    <?php 
                      $sql=mysqli_query($conn,"SELECT COUNT(id_kriteria) AS kk FROM bobot_kriteria");
                      while($q=mysqli_fetch_array($sql)){ 
                      ?>
                        <th colspan="<?= $q['kk']; ?>"style="vertical-align: middle" class="text-center">Kriteria</th>
                        <?php } ?>
                      </tr>
                     <tr>
                      <?php 
                      $sql=mysqli_query($conn,"SELECT * FROM bobot_kriteria INNER JOIN kriteria ON bobot_kriteria.id_kriteria=kriteria.id_kriteria");
                      while($q=mysqli_fetch_array($sql)){ ?>
                       <th>(<?= $q['id_kriteria'] ?>)&nbsp;<?= $q['nama_kriteria'] ?></th>
                       
                     <?php
                      // $nilaibobot=$q['hasil_bobot'];
                      // var_dump($nilaibobot);
                    } ?>
                      
                     </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no=0;
                      $nilai=mysqli_query($conn,"SELECT * FROM nilai INNER JOIN alternatif ON nilai.id_alternatif=alternatif.id_alternatif INNER JOIN kriteria ON nilai.id_kriteria=kriteria.id_kriteria  GROUP BY nilai.id_alternatif ASC ");
                      while($n=mysqli_fetch_array($nilai)){ 
                        $no++;
                        ?>
                     
                      <tr>
                        <td><?= $no; ?></td>
                        <td>(<?= $n['id_alternatif']; ?>)&nbsp;<?= $n['nama']; ?></td>
                        <?php 
                        
                        $ids=$n['id_alternatif'];

                        $hasil=mysqli_query($conn,"SELECT * FROM nilai INNER JOIN alternatif ON nilai.id_alternatif=alternatif.id_alternatif INNER JOIN kriteria ON nilai.id_kriteria=kriteria.id_kriteria INNER JOIN bobot_kriteria ON kriteria.id_kriteria=bobot_kriteria.id_kriteria WHERE nilai.id_alternatif ='$ids'");
                        while($nd=mysqli_fetch_array($hasil)){ 
                        $idk=$nd['id_kriteria'];
                        $nilaivektor = $nd['hasil_bobot']*$nd['nilai_rangking'];
                        $upvektor=mysqli_query($conn,"UPDATE nilai SET nilai_vektor='$nilaivektor' WHERE id_kriteria='$idk' AND id_alternatif ='$ids'");
                       
                        ?>
                        <td>
                          <?= $nd['nilai_rangking']; ?>
                        </td>
                        <?php  } ?>
                      </tr>
                      <?php  } ?>
                    </tbody>
                  </table>
                  </form>
                </div>
              
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <h3 class="box-title">Evolution vector week  </h3>  
                  <div class="table-responsive">
                  
                  <form action="" Method="POST">
                  <table  class="table table-bordered table-striped mt-0">
                    <thead>
                      <tr>
                      <th rowspan="2" style="vertical-align: middle" class="text-center">No</th>
		                <th rowspan="2" style="vertical-align: middle" class="text-center">Alternatif</th>
                     <?php 
                      $sql=mysqli_query($conn,"SELECT COUNT(id_kriteria) AS kk FROM bobot_kriteria");
                      while($q=mysqli_fetch_array($sql)){ 
                      ?>
                        <th colspan="<?= $q['kk']; ?>"style="vertical-align: middle" class="text-center">Kriteria</th>
                        <?php } ?>
                      
                      </tr>
                     <tr>
                      <?php 
                      $sql=mysqli_query($conn,"SELECT * FROM kriteria");
                      while($q=mysqli_fetch_array($sql)){ ?>
                       <th>(<?= $q['id_kriteria'] ?>)&nbsp;<?= $q['nama_kriteria'] ?></th>
                     <?php  } ?>
                      
                     </tr>
                    </thead>
                    <tbody>

                    <?php 
                    $no=0;
                      $nilai=mysqli_query($conn,"SELECT * FROM nilai INNER JOIN alternatif ON nilai.id_alternatif=alternatif.id_alternatif INNER JOIN kriteria ON nilai.id_kriteria=kriteria.id_kriteria  GROUP BY nilai.id_alternatif ASC ");
                      while($n=mysqli_fetch_array($nilai)){ 
                        $no++;
                        ?>
                     
                      <tr>
                        <td><?= $no; ?></td>
                        <td><?= $n['id_alternatif']; ?>&nbsp;<?= $n['nama']; ?></td>
                        <?php 
                        
                        $ids=$n['id_alternatif'];

                        $sql=mysqli_query($conn,"SELECT COUNT(id_kriteria) AS kk FROM kriteria");
                        while($q=mysqli_fetch_array($sql)){ 
                          $ck=$q['kk'];
                        $cekbobot=mysqli_query($conn,"SELECT sum(nilai_vektor) as hasilv FROM nilai WHERE id_alternatif='$ids'");
                        while($nd=mysqli_fetch_array($cekbobot)){ 
                          $totalbobot=$nd['hasilv'];
                          
                            $preferensi=$totalbobot/$ck;
                          $upvektor=mysqli_query($conn,"UPDATE alternatif SET preferensi='$preferensi' WHERE id_alternatif ='$ids' ");
    
                          
                          }
    
                            }
                        $hasil=mysqli_query($conn,"SELECT * FROM nilai INNER JOIN alternatif ON nilai.id_alternatif=alternatif.id_alternatif INNER JOIN kriteria ON nilai.id_kriteria=kriteria.id_kriteria WHERE nilai.id_alternatif ='$ids'  ");
                        while($nd=mysqli_fetch_array($hasil)){ 

                        ?>
                        <td>
                          <?= $nd['nilai_vektor']; ?>
                        </td>
                      
                        <?php  } ?>
                      </tr>
                      <?php  } ?>
                    </tbody>

                    <?php 
                    
                //     $nilai=mysqli_query($conn,"SELECT * FROM alternatif");
                // while($n=mysqli_fetch_array($nilai)){
                //   $ids=$n['id_siswa'];
                   
                      // }
                    
                    ?>
                  </table>
                  </form>
                  </div>
              </div>
              

              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

              <h3 class="box-title">Preferensi </h3>  
                  <div class="table-responsive">
                  
                  
                  <table  class="table table-bordered table-striped mt-0">
                    <thead>
                      <tr>
                      <th rowspan="2" style="vertical-align: middle" class="text-center">No</th>
		                <th rowspan="2" style="vertical-align: middle" class="text-center">Nomor Induk Siswa</th>
		                <th rowspan="2" style="vertical-align: middle" class="text-center">Nama Siswa</th>
		                <th rowspan="2" style="vertical-align: middle" class="text-center">Preferensi</th>
                      
                      </tr>
                    </thead>
                    <tbody>

                    <?php 
                    $no=0;
                      $nilai=mysqli_query($conn,"SELECT * FROM  alternatif ORDER BY preferensi DESC ");
                      while($n=mysqli_fetch_array($nilai)){ 
                        $no++;
                        ?>
                     
                      <tr>
                        <td><?= $no; ?></td>
                        <td><?= $n['nbp']; ?></td>
                        <td><?= $n['nama']; ?></td>
                        <td>
                          <?= $n['preferensi']; ?>
                        </td>
                        <td>
                       
                        </td>
                        <?php  } ?>
                      </tr>
                      
                    </tbody>

                    <?php 
                    
                //     $nilai=mysqli_query($conn,"SELECT * FROM siswa");
                // while($n=mysqli_fetch_array($nilai)){
                //   $ids=$n['id_siswa'];
                   
                      // }
                    
                    ?>
                  </table>
                  
              </div>

            </div>
              <!-- akir -->





                
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

            </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

