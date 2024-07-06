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
          
    <h4><b>LAPORAN DATA BARANG MASUK</b></h4>
    <h5><b>UNIT TRANSFUSI BARANG</b></h5>

          </td>
        </tr>

    </table>

  <div style="width:100%;float: left;">
 <div style="border-bottom: 2px solid #555;padding:10px 0;margin-bottom: 20px;"></div>
 <center>Per Tanggal : <b><?php echo date('d F Y',strtotime($_GET['tgl1'])); ?> - <?php echo date('d F Y',strtotime($_GET['tgl2'])); ?></b></center>
 <br>
  </div>

  <div style="width: 100%;float: left">
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
                       include '../../koneksi/koneksi.php'; 
                      $no=0;
                      if(isset($_POST['b1'])){
                        $sql=mysqli_query($koneksi,"SELECT * FROM barang_masuk INNER JOIN barang ON barang_masuk.id_barang=barang.id_barang INNER JOIN kategori ON barang_masuk.id_kategori=kategori.id WHERE date(tanggal) between '$_POST[tgl1]' and '$_POST[tgl2]' ORDER BY tanggal desc ");
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
  <div class="ttd" style="text-align:right;">

  Diketahui :
  <br>
  <!-- admin -->
  <br>
  <br>
  <br>
  (<?php
      $sql3=mysqli_query($koneksi,"SELECT * FROM suplayer limit 1");
      $q3=mysqli_fetch_array($sql3);
      echo $q3['nm_pp'];
      ?>)
</div>
</body>
</html>
