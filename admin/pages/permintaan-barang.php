
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            List Barang Permintaan
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"> Home</a></li>
            <li class="active">List Barang Permintaan</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
    <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data List Barang Permintaan</h3>  
                </div><!-- /.box-header -->

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
                        <th>Aksi</th>
                      </tr>
                     
                    </thead>
                    <tbody>
                       <?php
                       include './../koneksi/koneksi.php'; 
                      $no=0;
                    // $sql=mysqli_query($koneksi,"SELECT * FROM barang_keluar m, barang b where b.id_barang = m.id_barang");
                    $sql=mysqli_query($koneksi,"SELECT * FROM barang_masuk INNER JOIN barang ON barang_masuk.id_barang=barang.id_barang INNER JOIN kategori ON barang_masuk.id_kategori=kategori.id");
                      
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
                         <td>
                         <?php if ($q['statusbrg']=='0') {?>
                         <form id="form1" name="form1" method="post" enctype="multipart/form-data" >
                          <input type="hidden" name="id" value="<?= $q["id_masuk"]; ?>" />
                          <input type="hidden" name="jumlah" value="<?= $q["jumlah"]; ?>" />
                          <input type="hidden" name="id_barang" value="<?= $q["id_barang"]; ?>">
                          <label>               
                          <input type="hidden"  name="statusbrg" value="1" />
                          <button type="submit" class="btn btn-success" name="button">ada</button>
                             
                          <!-- <button type="submit" name="button">kosong</button> -->
                          </label>
                          </form>
                          <!-- </td> -->
                         <form id="form"  method="post" enctype="multipart/form-data" >
                          <input type="hidden" name="id2" value="<?= $q["id_masuk"]; ?>" />
                          <td><label>
                          <input type="hidden"  name="statusbrg2" value="2" />
                          <button type="submit" class="btn btn-danger" name="button2">Kosong</button>
                            </form>
                            <?php }else{ ?>
                            <?php } ?>
                        </td>
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

      <?php
include "../koneksi/koneksi.php";
if (isset($_POST["button"])) {
$id_barang=$_POST["id_barang"];
$id=$_POST["id"];
$jumlah=$_POST["jumlah"];
$status=$_POST["statusbrg"];
// $status= isset($_POST["button"]) ? 1 : 0;

$cekstoksekarang=mysqli_query($koneksi,"SELECT * FROM barang WHERE id_barang='$id_barang'");
$ambildatanya=mysqli_fetch_array($cekstoksekarang);
$stoksekarang=$ambildatanya['stok'];
$ambilstoksekarangdenganqty=$stoksekarang+$jumlah; 
$udpatebarang=mysqli_query($koneksi, "UPDATE barang SET stok='$ambilstoksekarangdenganqty' WHERE id_barang ='$id_barang'");

mysqli_query($koneksi,"UPDATE barang_masuk SET statusbrg='$status' WHERE id_masuk='$id'");
echo '<meta http-equiv="refresh" content="1;url=suplayer.php?p=permintaan-barang">';
}

?>
<?php
include "../koneksi/koneksi.php";

// $status= isset($_POST["button"]) ? 1 : 0;
if (isset($_POST["button2"])) {
  $id=$_POST["id2"];
$status=$_POST["statusbrg2"];
mysqli_query($koneksi,"UPDATE barang_masuk SET statusbrg='$status' WHERE id_masuk='$id'");
echo '<meta http-equiv="refresh" content="1;url=suplayer.php?p=permintaan-barang">';
}
