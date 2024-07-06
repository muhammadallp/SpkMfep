

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Edit Kriteria 
            
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
                            include '../koneksi/koneksi.php';
                            
                            $id=$_GET['id'];
                          
                            

                            if(isset($_POST['simpan'])){
                              
                            if(empty($_POST['nama']) ){

                            echo '<div class="alert alert-warning alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                  <strong>Error!</strong> Data tidak boleh ada yang kosong.
                                  </div>';

                            }

                               $sql=mysqli_query($conn,"UPDATE kriteria SET nama_kriteria='$_POST[nama]' WHERE id_kriteria='$id'");
                                
                                
                                 echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                  <strong>Sukses!</strong> Data Berhasil di Edit.
                                  </div>';
                                  echo '<meta http-equiv="refresh" content="1;url=admin.php?p=kriteria">';
                            }
                        
                            ?>

                  <div class="col-lg-12">

            <form id="contactForm" action="" method="post" enctype="multipart/form-data">
            <?php 
            $q=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM kriteria WHERE id_kriteria='$id'  "));         
            ?>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>ID kriteria</label>
                                        <input type="text" name="id" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="<?= $q['id_kriteria']; ?>" readonly>
                                        
                                    </div>
                                </div>
                            </div>
                            <br>
                           <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Nama Kriteria</label>
                                        <input type="text" name="nama" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="<?= $q['nama_kriteria']; ?>" placeholder="nama">
                                    </div>
                                </div>
                            </div>
                            <br>
                          
                                        

            
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> Edit Kriteria </button>
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