

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Tambah  Bobot 
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="home.php"> Home</a></li>
            <li class="active"> Bobot </li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
  <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Form  Bobot </h3>
                 
                </div><!-- /.box-header -->
                <div class="box-body">
                 <?php 
                            include "../koneksi/koneksi.php";
                            

                   
                            if(isset($_POST["simpan"])){
                              
                            if(empty($_POST['nilai'])){

                            echo '<div class="alert alert-warning alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                  <strong>Error!</strong> Data tidak boleh ada yang kosong.
                                  </div>';

                            }
                                $id_Kriteria=$_POST['nama_kriteria'];
                                // $penerima=$_POST['penerima'];
                                $nilai=$_POST['nilai'];
                                // $satuan=$_POST['satuan'];
                                // $idkategori=$_POST['idkategori'];
                                
                                // $cekstoksekarang=mysqli_query($conn,"SELECT * FROM bobot_kriteria ORDER BY id_kriteria");
                                // $ambildatanya=mysqli_fetch_array($cekstoksekarang);
                                // $stoksekarang[]=$ambildatanya['nilai_bobot'];
                                // $total=array_sum($stoksekarang);
                                
                                // $ambilstoksekarangdenganqty=$nilai/$total;
                                
                                $sql=mysqli_query($conn,"INSERT INTO bobot_kriteria(id_kriteria,nilai_bobot) VALUES ('$id_Kriteria','$nilai')");
                                // $udpatebarang=mysqli_query($conn, "UPDATE kriteria SET hasil_bobot='$ambilstoksekarangdenganqty' WHERE id_kriteria ='$id_Kriteria'");
                                

                                 echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                  <strong>Sukses!</strong> Data Berhasil disimpan.
                                  </div>';
                                  echo '<meta http-equiv="refresh" content="1;url=admin.php?p=bobot">';   
                            
                            }
                            ?>
              <div class="col-lg-12">

                     <form id="contactForm" action="" method="post" enctype="multipart/form-data">
                      
                     <div class="row">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-lg-12 ">
                                        <label>Nama Bobot</label>
                                         <select name="nama_kriteria" id="" class="form-control">
                                         <?php 
                                        
                                        $ambildata=mysqli_query($conn,"SELECT * FROM kriteria");
                                        while($fetcharray=mysqli_fetch_array($ambildata)){
                                            $namabarang=$fetcharray['nama_kriteria'];
                                            $idbarang=$fetcharray['id_kriteria'];
                                        ?>
                                        <option value="<?= $idbarang; ?>"><?= $namabarang; ?></option>
                                        <?php 
                                        }
                                        ?>
                                         </select> 
                                    </div>
                                  
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Nilai Bobot</label>
                                        <input type="text" name="nilai" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="" placeholder="Nilai Bobot">

                                    </div>
                                </div>
                            </div>
                            <br>
                           <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> Tambah Bobot </button>
                                    <a href="admin.php?p=bobot" class="btn btn-info"><i class="fa fa-table"></i> List Bobot </a>
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