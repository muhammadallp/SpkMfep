

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          Penilaian 
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="home.php"> Home</a></li>
            <li class="active">Penilaian </li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
  <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Form Penilaian </h3>
                 
                </div><!-- /.box-header -->
                <div class="box-body">
                 <?php 
                            include "../koneksi/koneksi.php";
                            

                   
                            if(isset($_POST["simpan"])){
                              
                            if(empty($_POST['siswa']) or empty($_POST['kriteria']) or empty($_POST['nilai'])){

                            echo '<div class="alert alert-warning alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                  <strong>Error!</strong> Data tidak boleh ada yang kosong.
                                  </div>';

                            }
                            // $id_alternative = $_POST['siswa'];
                            // $id_criteria = $_POST['kriteria'];
                            // $value = $_POST['nilai'];
                                // $satuan=$_POST['satuan'];
                                // $lot=$_POST['lot'];
                                // $statusbrg=$_POST['statusbrg'];

                                // $cekstoksekarang=mysqli_query($koneksi,"SELECT * FROM barang WHERE id_barang='$id_barang'");
                                // $ambildatanya=mysqli_fetch_array($cekstoksekarang);
                                // $stoksekarang=$ambildatanya['stok'];
                                // $ambilstoksekarangdenganqty=$stoksekarang-$jumlah;

                                $id_alternative = $_POST['siswa'];
                                $id_criteria = $_POST['kriteria'];
                                $value = $_POST['nilai'];
                                
                                // $makanan = $_POST['makanan'];
                                $jumlah_dipilih = count($value);
                                $jumlah = count($id_criteria);
                                 
                                for($x=0;$x<$jumlah_dipilih;$x++){
                                    for($x=0;$x<$jumlah;$x++){
                                  // mysql_query("INSERT INTO makanan values('','$makanan[$x]')");
                                    $sql = "INSERT INTO nilai values ('','$id_alternative','$id_criteria[$x]','$value[$x]','0')";
                                    $result = $conn->query($sql);
                                }
                                }


                                // $sql=mysqli_query($conn,"INSERT INTO nilai (id_siswa,id_kriteria,nilai_rangking,nilai_vektor) VALUES ('$siswa','$kriteria','$nilai','0')");
                                // $udpatebarang=mysqli_query($koneksi, "UPDATE barang SET stok='$ambilstoksekarangdenganqty' WHERE id_barang ='$id_barang'");
                                

                                 echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                  <strong>Sukses!</strong> Data Berhasil disimpan.
                                  </div>';
                                  echo '<meta http-equiv="refresh" content="1;url=admin.php?p=hasil">';   
                            
                            }
                            ?>
              <div class="col-lg-12">

                     <form id="contactForm" action="" method="post" enctype="multipart/form-data">
                      
                     <div class="row">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-lg-12 ">
                                        <label>Nama Siswa</label>
                                         <select name="siswa" id="" class="form-control">
                                         <?php 
                                        
                                        $ambildata=mysqli_query($conn,"SELECT * FROM alternatif");
                                        while($fetcharray=mysqli_fetch_array($ambildata)){
                                            $namabarang=$fetcharray['nama'];
                                            $idbarang=$fetcharray['id_alternatif'];
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
                           
                            
                    <?php
                            $query="SELECT * FROM kriteria";
                            $execute=$conn->query($query);
                            if ($execute->num_rows > 0){
                                while($data=$execute->fetch_array(MYSQLI_ASSOC)){
                                    echo "<div class=\"modal-body\">";
                                    echo "<label for=\"nilai\">$data[nama_kriteria]</label>";
                                    
                                    echo "<input type='hidden' value=$data[id_kriteria] name='kriteria[]'>";
                                    echo "<div class=\"row\">";
                                    echo "<div class=\"form-group\">";
                                    echo "<div class=\"fcol-lg-12\">";
                                    echo "<select class=\"form-control form-select\" required name=\"nilai[]\" id=\"nilai\">";
                                    echo "<option disabled selected>-- Pilih $data[nama_kriteria] --</option>";
                                    $query2="SELECT * FROM nilai_kriteria WHERE id_kriteria='$data[id_kriteria]'";
                                    $execute2=$conn->query($query2);
                                        if ($execute2->num_rows > 0){
                                            while ($data2=$execute2->fetch_array(MYSQLI_ASSOC)){
                                                echo "<option value=\"$data2[nilai]\">$data2[keterangan]</option>";
                                            }
                                        }else{
                                            echo "<option disabled value=\"\">Belum ada Nilai Kriteria</option>";
                                        };
                                    echo "</select>";
                                    echo "</div></div>";
                                }
                            }
                            ?>
                            <!-- <br>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Nilai Bobot</label>
                                        <input type="text" name="nilai" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="" placeholder="Nilai Bobot">

                                    </div>
                                </div>
                            </div> -->
                            <br>
                           <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i>  Penilaian</button>
                                    <!-- <a href="admin.php?p=kategori" class="btn btn-info"><i class="fa fa-table"></i> List Penilaian</a> -->
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