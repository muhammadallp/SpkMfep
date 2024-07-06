<!-- DIbuat oleh Nopen rianto
Tanggal 08-02-2018 -->

    <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            List Admin
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"> Home</a></li>
            <li class="active">List Admin</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
    <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Admin</h3>  
                </div><!-- /.box-header -->
                <div class="box-body">
                   <div class="table-responsive">    
                  <table id="example1" class="table table-bordered table-striped">
                      
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>ID Admin</th>
                        <th>Nama Admin</th>
                        <th>Username</th>
                        <th>Password</th>
                       
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php
                       include './../koneksi/koneksi.php'; 
                      $no=0;
                    $sql=mysqli_query($koneksi,"SELECT * FROM Admin");
                      while($q=mysqli_fetch_array($sql)){
                        $no++;

                     ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                         <td><img src="./../images/<?php echo $q['ft']; ?>" style="width: 100px;"></td>
                        <td><?php echo $q['id_adm']; ?></td>
                        <td><?php echo $q['nm_adm']; ?></td>
                     
                        <td><?php echo $q['username']; ?></td>
                        <td><?php echo $q['password']; ?></td>
                   
                        <td>
                          <a href="admin.php?p=edit-admin&id=<?php echo $q['id_adm']; ?>" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                          <a href="pages/delete-admin.php?id=<?php echo $q['id_adm']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                       
                        </td>
                      </tr>

                  <?php } ?>
                    </tbody>
                  </table>
                </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

            </section><!-- /.content -->
      </div><!-- /.content-wrapper -->