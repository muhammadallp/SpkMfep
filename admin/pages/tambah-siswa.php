<!-- DIbuat oleh Nopen rianto
Tanggal 08-02-2018 -->

    <div class="content-wrapper">
  <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Tambah Alternatif
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="home.php"> Home</a></li>
            <li class="active">Alternatif</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
  <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Form Alternatif</h3>
                 
                </div><!-- /.box-header -->
                <div class="box-body">
                 <?php 
                            include "../koneksi/koneksi.php";
                            

                            $query = mysqli_query($conn,'SELECT MAX(id_alternatif) as kodex  FROM  alternatif'); // mengambil nilai kode_barang terbesar

                            $data = mysqli_fetch_array($query);

                            $kode = $data['kodex']; // kode_barang dengan angka terbesar

                            $nourut = substr($kode, 2, 2); // contoh TRP0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil

                            $nourut++;
                            if(empty($nourut)){
                                $_POST['id']="A1";
                            }else{
                                $_POST['id']="A".sprintf("%02s", $nourut);
                            } 

                            

                            

                            if(isset($_POST["simpan"])){
                              
                            if(empty($_POST['nis'])  or empty($_POST['nis'])){

                            echo '<div class="alert alert-warning alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                  <strong>Error!</strong> Data tidak boleh ada yang kosong.
                                  </div>';

                            }
                                
                                $sql=mysqli_query($conn,"INSERT INTO `alternatif`(`id_alternatif`, `nbp`, `nama`,`jurusan`,`preferensi`,`tanggal`) VALUES ('$_POST[id]','$_POST[nis]','$_POST[nama]','$_POST[jurusan]','0',NOW())");
                                // mysqli_query($koneksi)

                                 echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                  <strong>Sukses!</strong> Data Berhasil disimpan.
                                  </div>';
                                  echo '<meta http-equiv="refresh" content="1;url=admin.php?p=alternatif">';
                                
                                
                            
                            }
                            ?>
              <div class="col-lg-12">
                     <form id="contactForm" action="" method="post" enctype="multipart/form-data">
                      
                     <div class="row">
                                <div class="form-group">
                                    <div class="col-lg-6 ">
                                        <label>ID Alternatif</label>
                                        <input type="text" name="id" class="form-control" maxlength="100" data-msg-required="Please enter your name." placeholder="ID Transaksi" value="<?php echo $_POST['id']; ?>" readonly="">
                                    </div>
                                    
                                    <div class="col-lg-6 ">
                                        <label>Nomor BP</label>
                                        <input type="text" name="nis" class="form-control" maxlength="100" data-msg-required="Please enter your name." value="" placeholder="Nomor Induk Alternatif" >
                                    </div>
                                    <br>
                                    
                                    
                                </div>
                            </div>
                            <br>
                           <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Nama Alternatif</label>
                                        <input type="text" name="nama" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="" placeholder="Nama Siswa">
                                    </div>
                                </div>
                            </div>
                            <br>
                           <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Jurusan</label>
                                        <input type="text" name="jurusan" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="" placeholder="Jurusan">
                                    </div>
                                </div>
                            </div>
                            
                           <br>
                           <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> Tambah Siswa</button>
                                    <a href="admin.php?p=alternatif" class="btn btn-info"><i class="fa fa-table"></i> List Siswa</a>
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