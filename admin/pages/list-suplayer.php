<!-- DIbuat oleh Nopen rianto
Tanggal 08-02-2018 -->

    <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            List Suplayer
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"> Home</a></li>
            <li class="active">List Suplayer</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
    <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Suplayer</h3>  
                </div><!-- /.box-header -->
                <div class="box-body">
                   <div class="table-responsive">    
                  <table id="example1" class="table table-bordered table-striped">
                      
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>ID Suplayer</th>
                        <th>Nama Suplayer</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php
                       include './../koneksi/koneksi.php'; 
                      $no=0;
                    $sql=mysqli_query($koneksi,"SELECT * FROM suplayer");
                      while($q=mysqli_fetch_array($sql)){
                        $no++;

                     ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $q['id_pp']; ?></td>
                        <td><?php echo $q['nm_pp']; ?></td>
                        <td><?php echo date('d F Y',strtotime($q['tgl_lahir'])); ?></td>
                        <td><?php echo $q['jekel']; ?></td>
                        <td><?php echo $q['alm']; ?></td>
                        <td><?php echo $q['telp']; ?></td>
                        <td>
                          <a href="admin.php?p=edit-suplayer&id=<?php echo $q['id_pp']; ?>" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                          <a href="pages/delete-pimpinan.php?id=<?php echo $q['id_pp']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                       
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