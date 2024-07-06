

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Edit Bobot 
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="home.php"> Home</a></li>
            <li class="active">Bobot </li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
  <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Form Bobot </h3>
                 
                </div><!-- /.box-header -->
                <div class="box-body">
                 <?php 
                            include '../koneksi/koneksi.php';
                            
                            $id=$_GET['id'];
                          
                            

                            if(isset($_POST['simpan'])){
                              
                            if(empty($_POST['hasil']) ){

                            echo '<div class="alert alert-warning alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                  <strong>Error!</strong> Data tidak boleh ada yang kosong.
                                  </div>';

                            }
                            $sql=mysqli_query($conn,"UPDATE bobot_kriteria SET nilai_bobot='$_POST[hasil]' WHERE id_kriteria='$id'");
                                
                                
                                 echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                  <strong>Sukses!</strong> Data Berhasil di Edit.
                                  </div>';
                                  echo '<meta http-equiv="refresh" content="1;url=admin.php?p=bobot">';
                            }
                        
                            ?>

                  <div class="col-lg-12">

            <form id="contactForm" action="" method="post" enctype="multipart/form-data">
            <?php 
            $q=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM bobot_kriteria INNER JOIN kriteria ON bobot_kriteria.id_kriteria=kriteria.id_kriteria WHERE bobot_kriteria.id_kriteria='$id'"));         
            ?>

            
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-lg-12 ">
                                        <label>Nama Bobot</label>
                                         <select name="nama" id="" class="form-control" readonly="on">
                                         <option selected value="<?= $q["id_kriteria"]; ?>"><?= $q["nama_kriteria"]; ?></option>
                                         <?php 
                                        $ambildata=mysqli_query($conn,"SELECT * FROM bobot_kriteria INNER JOIN kriteria ON bobot_kriteria.id_kriteria=kriteria.id_kriteria"); 
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
                            
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Hasil</label>
                                        <input type="text" name="hasil" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="<?= $q['nilai_bobot']; ?>">
                                        
                                    </div>
                                </div>
                            </div>
                        
            
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> Edit Bobot </button>
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