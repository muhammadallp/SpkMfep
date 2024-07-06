  <!-- DIbuat oleh Nopen rianto
Tanggal 08-02-2018 -->

    <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Laporan Data Alternatif
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"> Home</a></li>
            <li class="active">List Alternatif</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
    <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data List Alternatif</h3>  
                </div><!-- /.box-header -->
                    <div class="box-header">
                    <div class="row">
                      <div class="col-md-12">
                      <form action="#" method="post">
                       
                        <div class="col-md-4">
                          <div class="input-group">

                            <input type="text" class="form-control" name="tanggal1" value="<?php if(empty($_POST['tanggal1'])){echo "";}else{echo $_POST['tanggal1'];} ?>" placeholder="Tanggal" id="datepicker4">
                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="text" class="form-control" name="tanggal2" value="<?php if(empty($_POST['tanggal2'])){echo "";}else{echo $_POST['tanggal2'];} ?>" placeholder="Tanggal" id="datepicker5">
                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                          </div>
                          </div>
                          <div class="col-md-1"><button type="submit" name="b1" class="btn btn-info"><i class="fa fa-search"></i> Cari</button>
                          </div>
                          <?php if(!empty($_POST['tanggal1']) and !empty($_POST['tanggal1'])) { ?>
                          <div class="col-md-1"><a href="./pages/cetak-barang.php?tgl1=<?php echo $_POST['tanggal1']; ?>&&tgl2=<?php echo $_POST['tanggal2']; ?>" target="_blank" class="btn btn-warning"><i class="fa fa-print"></i> Cetak</a>
                          </div>
                          <?php } ?>
                      </form>
                      </div>
                    </div>
                  </div>
                <div class="box-body">
                  <div class="table-responsive">     
                  <table id="example1" class="table table-bordered table-striped">
                      
                    <thead>
                      <tr>
                        
                        <th>No</th>
                        <th>Kode Alternatif</th>
                        <th>Nomor BP</th>
                        <th>Nama </th>
                        <th>Jurusan</th>
                        <!-- <th>Tanggal</th> -->
                      
                      </tr>
                     
                    </thead>
                    <tbody>
                       <?php
                       include './../koneksi/koneksi.php'; 
                      $no=0;
                        if(isset($_POST['b1'])){
                    $sql=mysqli_query($conn,"SELECT * FROM alternatif where date(tanggal) between '$_POST[tanggal1]' and '$_POST[tanggal2]' ORDER BY tanggal desc ");
                          //  $sql=mysqli_query($conn,"SELECT * FROM barang where date(tanggal) between '$_POST[tanggal1]' and '$_POST[tanggal2]' ORDER BY tanggal desc");
                        }else{
                            $sql=mysqli_query($conn,"SELECT * FROM alternatif  ORDER BY tanggal desc");
                                 
                        }
                    
                      while($q=mysqli_fetch_array($sql)){
                        $no++;

                     ?>
                      <tr>
                      <td><?php echo $no; ?></td>
                         <td><?php echo $q['id_alternatif']; ?></td>
                        <td><?php echo $q['nbp']; ?></td>
                        <td><?php echo $q['nama']; ?></td>
                          <td><?php echo $q['jurusan']; ?></td>
          
                      
                      </tr>

                  <?php } ?>
                    </tbody>
                  </table>
                </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

            </section><!-- /.content -->
      </div><!-- /.content-wrapper -->