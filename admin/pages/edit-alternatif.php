

    <div class="content-wrapper">
  <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Edit Siswa
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="home.php"> Home</a></li>
            <li class="active">Siswa</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
  <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Form Siswa</h3>
                 
                </div><!-- /.box-header -->
                <div class="box-body">
                 <?php 
                            include '../koneksi/koneksi.php';
                            
                            $id=$_GET['id'];
                          
                            

                            if(isset($_POST['simpan'])){
                              
                              if(empty($_POST['nis'])  or empty($_POST['nis'])){

                            echo '<div class="alert alert-warning alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                  <strong>Error!</strong> Data tidak boleh ada yang kosong.
                                  </div>';

                            }

                               $sql=mysqli_query($conn,"UPDATE siswa SET nis='$_POST[nis]', nama_siswa='$_POST[nama]',jurusan='$_POST[jurusan]' WHERE id_siswa='$id'");
                                
                                

                                 echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                  <strong>Sukses!</strong> Data Berhasil di Edit.
                                  </div>';
                                  echo '<meta http-equiv="refresh" content="1;url=admin.php?p=alternatif">';
                            }
                        
                            ?>

                  <div class="col-lg-12">

            <form id="contactForm" action="" method="post" enctype="multipart/form-data">
            <?php 
            $q=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM siswa WHERE id_siswa='$id' "));         
            ?>
            <div class="row">
           <div class="form-group">
               <div class="col-lg-6 ">
                   <label>ID Siswa</label>
                   <input type="text" name="id" class="form-control"  maxlength="100" data-msg-required="Please enter your name." placeholder="ID Transaksi" value="<?= $q["id_siswa"]; ?>" readonly="">
               </div>
               
               <div class="col-lg-6 ">
                   <label>Nomor Induk SIswa</label>
                   <input type="text" name="nis" class="form-control" maxlength="100" data-msg-required="Please enter your name." value="<?= $q["nis"]; ?>" placeholder="Nomor Siswa" >
               </div>
               <br>
               </div>
                            </div>
                            <br>
                  <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Nama Siswa</label>
                                        <input type="text" name="nama" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="<?= $q["nama_siswa"]; ?>" placeholder="Nama Siswa">
                                    </div>
                                </div>
                            </div>
                            <br>
                           <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Jurusan</label>
                                        <input type="text" name="jurusan" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="<?= $q["jurusan"]; ?>" placeholder="Jurusan">
                                    </div>
                                </div>
                            </div>
                            
                           <br>
       
      <br>
      <div class="row">
           <div class="col-md-12">
               <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> Edit Siswa</button>
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