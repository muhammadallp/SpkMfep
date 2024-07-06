<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="shortcut icon" href="../../images/icn.png"/>
   <link rel="stylesheet" href="../../plugins/bootstrap/css/bootstrap.min.css">
   <script src="../../plugins/bootstrap/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="../../plugins/font awesome/font-awesome.min.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cetak Laporan</title>
</head>

<style type="text/css" media="print">

    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 5px;
    line-height: 0.9;

}
</style>
<style type="text/css" media="screen">
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 5px;
    line-height: 0.9;


}
</style>

<body onload="window.print();">
     <table>
        <tr>
          <td width="22%"><img src="../../images/logo.png" alt="" style="width:70px;height:70px;"></div></td>
          <td width="80%">
          
    <h4><b>LAPORAN PERBULAN</b></h4>
    <h5><b>UNIT TRANSFUSI DARAH</b></h5>

          </td>
        </tr>

    </table>

  <div style="width:100%;float: left;">
 <div style="border-bottom: 2px solid #555;padding:10px 0;margin-bottom: 20px;"></div>
 <center>Per Tanggal : <b><?php echo date('d F Y'); ?></center>
 <br>
  </div>

  <div style="width: 100%;float: left">
    
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
                       include '../../koneksi/koneksi.php'; 
                 
                       
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
         
<div class="ttd">
  Diketahui :
  <br>
  Pimpinan
  <br>
  <br>
  <br>
  (<?php
      $sql3=mysqli_query($koneksi,"SELECT * FROM pimpinan limit 1");
      $q3=mysqli_fetch_array($sql3);
      echo $q3['nm_pp'];
      ?>)
</div>
</body>
</html>
