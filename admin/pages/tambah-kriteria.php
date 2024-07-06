<!-- DIbuat oleh Nopen rianto
Tanggal 08-02-2018 -->

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Tambah Kriteria 
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="home.php"> Home</a></li>
            <li class="active">Kriteria </li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
  <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Form Kriteria </h3>
                 
                </div><!-- /.box-header -->
                <div class="box-body">
                 <?php 
                            include "../koneksi/koneksi.php";

                            $query = mysqli_query($conn,'SELECT MAX(id_kriteria) as kodex  FROM  kriteria'); // mengambil nilai kode_barang terbesar

                            $data = mysqli_fetch_array($query);

                            $kode = $data['kodex']; // kode_barang dengan angka terbesar

                            $nourut = substr($kode, 1, 1); // contoh TRP0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil

                            $nourut++;
                            if(empty($nourut)){
                                $_POST['id']="C1";
                            }else{
                                $_POST['id']="C".sprintf("%01s", $nourut);
                            } 

                   
                            if(isset($_POST["simpan"])){
                              
                            if(empty($_POST['nama_kriteria']) ){

                            echo '<div class="alert alert-warning alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                  <strong>Error!</strong> Data tidak boleh ada yang kosong.
                                  </div>';

                            }
                                $id_Kriteria=$_POST['id'];
                                $nama_kriteria=$_POST['nama_kriteria'];
                             

                                // $cekstoksekarang=mysqli_query($koneksi,"SELECT * FROM Kriteria WHERE id_Kriteria='$id_Kriteria'");
                                // $ambildatanya=mysqli_fetch_array($cekstoksekarang);
                                // $stoksekarang=$ambildatanya['stok'];
                                // $ambilstoksekarangdenganqty=$stoksekarang+$jumlah;

                                // $sql=mysqli_query($koneksi,"INSERT INTO `Kriteria_masuk`(`id_Kriteria`, `jumlah`, `satuan`,`lot`, `tgl`) VALUES ('$_POST[id]','$_POST[nama_brg]','$_POST[deskripsi]','$_POST[stok]',NOW())");

                                $sql=mysqli_query($conn,"INSERT INTO Kriteria(id_Kriteria,nama_kriteria) VALUES ('$id_Kriteria','$nama_kriteria')");
                                // $udpateKriteria=mysqli_query($koneksi, "UPDATE Kriteria SET stok='$ambilstoksekarangdenganqty' WHERE id_Kriteria ='$id_Kriteria'");
                                

                                 echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                  <strong>Sukses!</strong> Data Berhasil disimpan.
                                  </div>';
                                  echo '<meta http-equiv="refresh" content="1;url=admin.php?p=kriteria">';
                                
                                    
                                
                            
                            }
                            ?>
              <div class="col-lg-12">

                     <form id="contactForm" action="" method="post" enctype="multipart/form-data">
                      
                     <div class="row">
                           
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Id Kriteria</label>
                                        <input type="text" name="id" class="form-control" maxlength="100" data-msg-required="Please enter the subject."placeholder="Penerima" value="<?php echo $_POST['id']; ?>" readonly="">
                                    </div>
                                </div>
                            </div>
                            <br>
                           <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Nama Kriteria</label>
                                        <input type="text" name="nama_kriteria" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="" placeholder="Nama Kriteria">
                                    </div>
                                </div>
                            </div>
                            <br>
                          
                           <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> Tambah Kriteria</button>
                                    <a href="admin.php?p=kriteria" class="btn btn-info"><i class="fa fa-table"></i> List Kriteria </a>
                                </div>
                            </div>
                        </form>
                  </div>

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

     </section><!-- /.content -->

   </div>