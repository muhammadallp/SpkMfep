  <!-- DIbuat oleh Nopen rianto
Tanggal 08-02-2018 -->

    <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Laporan Stok Darah
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"> Home</a></li>
            <li class="active">List Pendonor</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
    <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Stok Darah</h3>  
                </div><!-- /.box-header -->
                    <div class="box-header">
                    <div class="row">
                      <div class="col-md-12">
                   <a href="./pages/cetak-perbulan.php" target="_blank" class="btn btn-warning"><i class="fa fa-print"></i> Cetak</a>
                          </div>
                         
                     
                      </div>
                    </div>
                 
                <div class="box-body">
                  <div class="table-responsive">     
                  <table class="table table-bordered table-striped">
                      
                    <thead>
                      <tr>
                     
                       <th>Bulan</th>
                       <th>A</th>
                       <th>B</th>
                       <th>AB</th>
                       <th>O</th>
                      </tr>
                     
                    </thead>
                    <tbody>
                       <?php
                       include './../koneksi/koneksi.php'; 
                 
                       
                           $a=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='A'"));
                            $b=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='B'"));
                             $ab=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='AB'"));
                              $o=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='O'"));
                     
                                 
                     ?>
                     <tr>
                        <td>Januari</td>
                        <td>
                          <?php
                           $a=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='A' and MONTH(tgl_transaksi)='1'"));
                         echo $a; ?>
                           
                         </td>
                        <td>
                          <?php
                           $b=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='B' and MONTH(tgl_transaksi)='1'"));
                         echo $b; ?>
                           
                         </td>
                       <td>
                          <?php
                           $ab=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='AB' and MONTH(tgl_transaksi)='1'"));
                         echo $ab; ?>
                           
                         </td>
                        <td>
                          <?php
                           $o=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='O' and MONTH(tgl_transaksi)='1'"));
                         echo $o; ?>
                           
                         </td>
                      </tr>
                      <tr>
                        <td>Februari</td>
                        <td>
                          <?php
                           $a=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='A' and MONTH(tgl_transaksi)='2'"));
                         echo $a; ?>
                           
                         </td>
                        <td>
                          <?php
                           $b=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='B' and MONTH(tgl_transaksi)='2'"));
                         echo $b; ?>
                           
                         </td>
                       <td>
                          <?php
                           $ab=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='AB' and MONTH(tgl_transaksi)='2'"));
                         echo $ab; ?>
                           
                         </td>
                        <td>
                          <?php
                           $o=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='O' and MONTH(tgl_transaksi)='2'"));
                         echo $o; ?>
                           
                         </td>
                      </tr>
                       <tr>
                        <td>Maret</td>
                        <td>
                          <?php
                           $a=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='A' and MONTH(tgl_transaksi)='3'"));
                         echo $a; ?>
                           
                         </td>
                        <td>
                          <?php
                           $b=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='B' and MONTH(tgl_transaksi)='3'"));
                         echo $b; ?>
                           
                         </td>
                       <td>
                          <?php
                           $ab=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='AB' and MONTH(tgl_transaksi)='3'"));
                         echo $ab; ?>
                           
                         </td>
                        <td>
                          <?php
                           $o=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='O' and MONTH(tgl_transaksi)='3'"));
                         echo $o; ?>
                           
                         </td>
                      </tr>
                       <tr>
                        <td>April</td>
                        <td>
                          <?php
                           $a=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='A' and MONTH(tgl_transaksi)='4'"));
                         echo $a; ?>
                           
                         </td>
                        <td>
                          <?php
                           $b=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='B' and MONTH(tgl_transaksi)='4'"));
                         echo $b; ?>
                           
                         </td>
                       <td>
                          <?php
                           $ab=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='AB' and MONTH(tgl_transaksi)='4'"));
                         echo $ab; ?>
                           
                         </td>
                        <td>
                          <?php
                           $o=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='O' and MONTH(tgl_transaksi)='4'"));
                         echo $o; ?>
                           
                         </td>
                      </tr>
                       <tr>
                        <td>Mei</td>
                        <td>
                          <?php
                           $a=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='A' and MONTH(tgl_transaksi)='5'"));
                         echo $a; ?>
                           
                         </td>
                        <td>
                          <?php
                           $b=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='B' and MONTH(tgl_transaksi)='5'"));
                         echo $b; ?>
                           
                         </td>
                       <td>
                          <?php
                           $ab=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='AB' and MONTH(tgl_transaksi)='5'"));
                         echo $ab; ?>
                           
                         </td>
                        <td>
                          <?php
                           $o=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='O' and MONTH(tgl_transaksi)='5'"));
                         echo $o; ?>
                           
                         </td>
                      </tr>
                       <tr>
                        <td>Juni</td>
                        <td>
                          <?php
                           $a=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='A' and MONTH(tgl_transaksi)='6'"));
                         echo $a; ?>
                           
                         </td>
                        <td>
                          <?php
                           $b=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='B' and MONTH(tgl_transaksi)='6'"));
                         echo $b; ?>
                           
                         </td>
                       <td>
                          <?php
                           $ab=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='AB' and MONTH(tgl_transaksi)='16'"));
                         echo $ab; ?>
                           
                         </td>
                        <td>
                          <?php
                           $o=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='O' and MONTH(tgl_transaksi)='6'"));
                         echo $o; ?>
                           
                         </td>
                      </tr>
                       <tr>
                        <td>Juli</td>
                        <td>
                          <?php
                           $a=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='A' and MONTH(tgl_transaksi)='7'"));
                         echo $a; ?>
                           
                         </td>
                        <td>
                          <?php
                           $b=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='B' and MONTH(tgl_transaksi)='7'"));
                         echo $b; ?>
                           
                         </td>
                       <td>
                          <?php
                           $ab=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='AB' and MONTH(tgl_transaksi)='7'"));
                         echo $ab; ?>
                           
                         </td>
                        <td>
                          <?php
                           $o=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='O' and MONTH(tgl_transaksi)='7'"));
                         echo $o; ?>
                           
                         </td>
                      </tr>
                       <tr>
                        <td>Agustus</td>
                        <td>
                          <?php
                           $a=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='A' and MONTH(tgl_transaksi)='8'"));
                         echo $a; ?>
                           
                         </td>
                        <td>
                          <?php
                           $b=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='B' and MONTH(tgl_transaksi)='8'"));
                         echo $b; ?>
                           
                         </td>
                       <td>
                          <?php
                           $ab=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='AB' and MONTH(tgl_transaksi)='8'"));
                         echo $ab; ?>
                           
                         </td>
                        <td>
                          <?php
                           $o=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='O' and MONTH(tgl_transaksi)='8'"));
                         echo $o; ?>
                           
                         </td>
                      </tr>
                       <tr>
                        <td>September</td>
                        <td>
                          <?php
                           $a=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='A' and MONTH(tgl_transaksi)='9'"));
                         echo $a; ?>
                           
                         </td>
                        <td>
                          <?php
                           $b=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='B' and MONTH(tgl_transaksi)='9'"));
                         echo $b; ?>
                           
                         </td>
                       <td>
                          <?php
                           $ab=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='AB' and MONTH(tgl_transaksi)='9'"));
                         echo $ab; ?>
                           
                         </td>
                        <td>
                          <?php
                           $o=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='O' and MONTH(tgl_transaksi)='9'"));
                         echo $o; ?>
                           
                         </td>
                      </tr>
                       <tr>
                        <td>Oktober</td>
                        <td>
                          <?php
                           $a=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='A' and MONTH(tgl_transaksi)='10'"));
                         echo $a; ?>
                           
                         </td>
                        <td>
                          <?php
                           $b=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='B' and MONTH(tgl_transaksi)='10'"));
                         echo $b; ?>
                           
                         </td>
                       <td>
                          <?php
                           $ab=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='AB' and MONTH(tgl_transaksi)='10'"));
                         echo $ab; ?>
                           
                         </td>
                        <td>
                          <?php
                           $o=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='O' and MONTH(tgl_transaksi)='10'"));
                         echo $o; ?>
                           
                         </td>
                      </tr>
                       <tr>
                        <td>November</td>
                        <td>
                          <?php
                           $a=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='A' and MONTH(tgl_transaksi)='11'"));
                         echo $a; ?>
                           
                         </td>
                        <td>
                          <?php
                           $b=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='B' and MONTH(tgl_transaksi)='11'"));
                         echo $b; ?>
                           
                         </td>
                       <td>
                          <?php
                           $ab=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='AB' and MONTH(tgl_transaksi)='11'"));
                         echo $ab; ?>
                           
                         </td>
                        <td>
                          <?php
                           $o=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='O' and MONTH(tgl_transaksi)='11'"));
                         echo $o; ?>
                           
                         </td>
                      </tr>
                       <tr>
                        <td>Desember</td>
                        <td>
                          <?php
                           $a=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='A' and MONTH(tgl_transaksi)='12'"));
                         echo $a; ?>
                           
                         </td>
                        <td>
                          <?php
                           $b=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='B' and MONTH(tgl_transaksi)='12'"));
                         echo $b; ?>
                           
                         </td>
                       <td>
                          <?php
                           $ab=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='AB' and MONTH(tgl_transaksi)='12'"));
                         echo $ab; ?>
                           
                         </td>
                        <td>
                          <?php
                           $o=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM pendonor where gol_darah='O' and MONTH(tgl_transaksi)='12'"));
                         echo $o; ?>
                           
                         </td>
                      </tr>
                
                    </tbody>
                  </table>
                </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

            </section><!-- /.content -->
      </div><!-- /.content-wrapper -->