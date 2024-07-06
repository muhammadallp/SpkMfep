<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="shortcut icon" href="../../images/logo-sma.png"/>
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
          <td width="15%"><img src="../../images/logo-sma.png" alt="" style="width:70px;height:70px;"></div></td>
          <td width="80%">
    <h4>SMK Teknologi Lengayang, Kecamatan Kambang, Peisisir Selata</h4>
    <h5><b>SMK Teknologi Lengayang</b></h5>

          </td>
        </tr>

    </table>

  <div style="width:100%;float: left;">
 <div style="border-bottom: 2px solid #555;padding:10px 0;margin-bottom: 20px;"></div>

 <center>Laporan Data Siswa</center>
 <center>Per Tanggal : <b><?php echo date('d F Y',strtotime($_GET['tgl1'])); ?> - <?php echo date('d F Y',strtotime($_GET['tgl2'])); ?></b></center>
 <br>
  </div>

  <div style="width: 100%;float: left">
  <table id="example1" class="table table-bordered table-striped">
                      
                    <thead>
                      <tr>
                      <th>No</th>
                        <th>Kode Siswa</th>
                        <th>Nomor Induk Siswa</th>
                        <th>Nama Siswa</th>
                        <th>Jurusan</th>
                      
                      </tr>
                     
                    </thead>
                    <tbody>
                       <?php
                       include '../../koneksi/koneksi.php'; 
                      $no=0;
                        if(isset($_GET['tgl1'])){
                           $sql=mysqli_query($conn,"SELECT * FROM siswa  where date(tanggal) between '$_GET[tgl1]' and '$_GET[tgl2]' ORDER BY tanggal desc");
                        }else{
                            $sql=mysqli_query($conn,"SELECT * FROM siswa  ORDER BY tanggal desc");
                                 
                        }
                    
                      while($q=mysqli_fetch_array($sql)){
                        $no++;

                     ?>
                      <tr>
                      <td><?php echo $no; ?></td>
                         <td><?php echo $q['id_siswa']; ?></td>
                        <td><?php echo $q['nis']; ?></td>
                        <td><?php echo $q['nama_siswa']; ?></td>
                          <td><?php echo $q['jurusan']; ?></td>
                      
                      </tr>

                  <?php } ?>
                    </tbody>
                  </table>
  </div>
<div class="ttd" style="text-align:right;">
  Diketahui :
  <br>
  <!-- admin -->
  <br>
  <br>
  <br>
  (<?php
      $sql3=mysqli_query($conn,"SELECT * FROM user limit 1");
      $q3=mysqli_fetch_array($sql3);
      echo $q3['nama'];
      ?>)
</div>
</body>
</html>
