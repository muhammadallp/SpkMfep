<!-- DIbuat oleh Nopen rianto
Tanggal 08-02-2018 -->

    <div class="content-wrapper">
  <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Tambah Admin
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="home.php"> Home</a></li>
            <li class="active">Admin</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
  <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Form Admin</h3>
                 
                </div><!-- /.box-header -->
                <div class="box-body">
                 <?php 
                            include '../koneksi/koneksi.php';

                            $auto=rand(11111,99999);
                            $_POST['id']="AD".$auto;

                            

                            if(isset($_POST['b1'])){
                              
                            if(empty($_POST['id']) or empty($_POST['nm'])){

                            echo '<div class="alert alert-warning alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                  <strong>Error!</strong> Data tidak boleh ada yang kosong.
                                  </div>';

                            }else{
                              $pass=md5($_POST['pas']);

                                $sql=mysqli_query($koneksi,"INSERT INTO admin values ('$_POST[id]','$_POST[nm]','$_POST[user]','$pass','user.png')");
                                

                                 echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                  <strong>Sukses!</strong> Data berhasil ditambah.
                                  </div>';
                            }
                            }
                            ?>
              <div class="col-lg-6">

                     <form id="contactForm" action="" method="post" enctype="multipart/form-data">
                     <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                     <label>ID Admin</label>
                                        <input type="text" name="id" class="form-control" maxlength="100" value="<?php echo $_POST['id']; ?>" placeholder="ID Lokasi" readonly>
                                    </div>
                                      
                                </div>
                            </div>
                            <br>
                             <div class="row">
                                <div class="form-group">
                                <div class="col-lg-12 ">
                                <label>Nama Admin </label>
                                   <input type="text" name="nm" class="form-control" maxlength="100" value="" placeholder="Nama Admin">
                                      </div>
                                     
                                </div>
                            </div>
                            <br>
                             <div class="row">
                                <div class="form-group">
                                <div class="col-lg-12 ">
                                <label>Username </label>
                                   <input type="text" name="user" class="form-control" maxlength="100" value="" placeholder="Username">
                                      </div>
                                     
                                </div>
                            </div>
                            <br>
                             <div class="row">
                                <div class="form-group">
                                <div class="col-lg-12 ">
                                <label>Password </label>
                                   <input type="text" name="pas" class="form-control" maxlength="100" value="" placeholder="Password">
                                      </div>
                                     
                                </div>
                            </div>
                            <br>
                           
                           <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" name="b1" class="btn btn-primary"><i class="fa fa-save"></i> Tambah Admin</button>
                                    <a href="admin.php?p=list-admin" class="btn btn-info"><i class="fa fa-table"></i> List Admin</a>
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