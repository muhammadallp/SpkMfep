<!-- DIbuat oleh Nopen rianto
Tanggal 08-02-2018 -->

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Edit Kategori
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="home.php"> Home</a></li>
            <li class="active">Kategori</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
  <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Form Kategori</h3>
                 
                </div><!-- /.box-header -->
                <div class="box-body">
                 <?php 
                            include '../koneksi/koneksi.php';
                            
                            $id=$_GET['id'];
                          
                            

                            if(isset($_POST['submit'])){
                              
                            // if(empty($_POST['nama_brg']) or empty($_POST['deskripsi']) or empty($_POST['stok'])){

                            // echo '<div class="alert alert-warning alert-dismissible fade in" role="alert">
                            //       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            //       <span aria-hidden="true">×</span></button>
                            //       <strong>Error!</strong> Data tidak boleh ada yang kosong.
                            //       </div>';

                            // }

                               $sql=mysqli_query($koneksi,"UPDATE kategori SET nama_kategori='$_POST[nama_kategori]',data_created=NOw() WHERE id='$id'");
                                
                                

                                 echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                  <strong>Sukses!</strong> Data Berhasil di Edit.
                                  </div>';
                                  echo '<meta http-equiv="refresh" content="1;url=admin.php?p=kategori">';
                            }
                        
                            ?>
              <div class="col-lg-12">

                     <form id="contactForm" action="" method="post" enctype="multipart/form-data">
                       <?php 
                        
                        $q=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM kategori WHERE id='$id'"));
                      ?>
                     <div class="row">
                                
                                        <input type="hidden" name="id" class="form-control" maxlength="100" data-msg-required="Please enter your name." placeholder="ID Transaksi" value="<?php echo $q['id']; ?>" readonly="">
                                    </div>
                                    <div class="col-lg-6 ">
                                        <label>Nama Barang</label>
                                        <input type="text" name="nama_kategori" class="form-control" maxlength="100" data-msg-required="Please enter your name." value="<?php echo $q['nama_kategori']; ?>" placeholder="Nama barang" >
                                    </div>
                                    
                                </div>
                            </div>
                           
                           <br>
                           <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-save"></i> Edit Barang</button>
                                    <a href="admin.php?p=kategori" class="btn btn-info"><i class="fa fa-table"></i> List Barang</a>
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