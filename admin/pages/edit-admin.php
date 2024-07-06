<!-- DIbuat oleh Nopen rianto
Tanggal 08-02-2018 -->

    <div class="content-wrapper">
  <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Edit Admin
            
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

                            $id=$_GET['id'];

                            if(isset($_POST['b1'])){

                         

                           if(empty($_POST['id']) or empty($_POST['nm']) or empty($_POST['username']) or empty($_POST['password'])){

                            echo '<div class="alert alert-warning alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                  <strong>Error!</strong> Data tidak boleh ada yang kosong.
                                  </div>';

                            }else{

                                if($_POST['password_lama']==$_POST['password']){
                                  $pass=$_POST['password'];
                                }else{
                                  $pass=md5($_POST['password']);
                                }

                                $sql=mysqli_query($koneksi,"UPDATE admin SET nm_adm='$_POST[nm]',username='$_POST[username]',password='$pass' where id_adm='$id'");
                                

                                 echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                  <strong>Sukses!</strong> Data berhasil diedit.
                                  </div>';
                            }
                            }
                            ?>
                     <form id="contactForm" action="" method="post">
                      <?php 
                        
                        $q=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM admin WHERE id_adm='$id'"));
                      ?>
                      <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                     <label>ID Admin</label>
                                        <input type="text" name="id" class="form-control" maxlength="100" value="<?php echo $q['id_adm']; ?>" placeholder="ID Admin" readonly>
                                    </div>
                                      
                                </div>
                            </div>
                            <br>
                             <div class="row">
                                <div class="form-group">
                                <div class="col-lg-12 ">
                                <label>Nama lengkap</label>
                                   <input type="text" name="nm" class="form-control" maxlength="100" value="<?php echo $q['nm_adm']; ?>" placeholder="Nama lengkap">
                                      </div>
                                      
                                </div>
                            </div>
                            <br>

                               <div class="row">
                                <div class="form-group">
                                <div class="col-lg-6 ">
                                <label>Username</label>
                                   <input type="text" name="username" class="form-control" maxlength="100" value="<?php echo $q['username']; ?>" placeholder="Username">
                                      </div>
                                      <div class="col-lg-6 ">
                                        <label>Password</label>
                                        <input type="hidden" name="password_lama" class="form-control" maxlength="100" value="<?php echo $q['password']; ?>" placeholder="Password">

                                        <input type="password" name="password" class="form-control" maxlength="100" value="<?php echo $q['password']; ?>" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <br>
                              <br>
                           <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" name="b1" class="btn btn-success"><i class="fa fa-save"></i> Edit Admin</button>
                                    <a href="admin.php?p=list-admin" class="btn btn-info"><i class="fa fa-table"></i> List Admin</a>
                                    
                                </div>
                            </div>
                        </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

     </section><!-- /.content -->

   </div>