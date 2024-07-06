  <!-- DIbuat oleh Nopen rianto
Tanggal 08-02-2018 -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Laporan Barang Masuk
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"> Home</a></li>
            <li class="active">Laporan Barang Masuk</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
    <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data List Barang Masuk</h3>  
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
                          <div class="col-md-1"><a href="./pages/cetak-barang-masuk.php?tgl1=<?php echo $_POST['tanggal1']; ?>&&tgl2=<?php echo $_POST['tanggal2']; ?>" target="_blank" class="btn btn-warning"><i class="fa fa-print"></i> Cetak</a>
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
                        <th>Nama Barang</th>
                        <th>Penerima</th>
                        <th>Jumlah</th>
                        <th>Satuan</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                        <th>Status</th>                      
                      </tr>
                     
                    </thead>
                    <tbody>
                       <?php
                       include './../koneksi/koneksi.php'; 
                      $no=0;
                        if(isset($_POST['b1'])){
                    $sql=mysqli_query($koneksi,"SELECT * FROM barang_masuk INNER JOIN barang ON barang_masuk.id_barang=barang.id_barang INNER JOIN kategori ON barang_masuk.id_kategori=kategori.id WHERE date(tanggal) between '$_POST[tanggal1]' and '$_POST[tanggal2]' ORDER BY tanggal desc ");
                          //  $sql=mysqli_query($koneksi,"SELECT * FROM barang_masuk m, barang b where  b.id_barang = m.id_barang ORDER BY tgl desc");
                        }else{
                            $sql=mysqli_query($koneksi,"SELECT * FROM barang_masuk INNER JOIN barang ON barang_masuk.id_barang=barang.id_barang INNER JOIN kategori ON barang_masuk.id_kategori=kategori.id ORDER BY tgl desc");        
                        }
                
                      while($q=mysqli_fetch_array($sql)){
                        $no++;

                     ?>
                    
                      <tr>
                      <td><?php echo $no; ?></td>
                         <td><?php echo $q['nama_brg']; ?></td>
                        <td><?php echo $q['penerima']; ?></td>
                        <td><?php echo $q['jumlah']; ?></td>
                          <td><?php echo $q['satuan']; ?></td>
                          <td><?php echo $q['nama_kategori']; ?></td>
                          <td><?php echo $q['tgl']; ?></td>
                          <td><?php if ($q['statusbrg']=='0') {?>
                            <span style="color:blue;">pending</span>
                          <?php }else if($q['statusbrg']=='1'){  ?>
                            <span style="color:green;">finising</span>
                            <?php }else{ ?>
                            <span style="color:red;">Kosong</span>
                            <?php } ?>
                          </td>
                      
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