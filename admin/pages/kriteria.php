
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            List Kriteria 
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"> Home</a></li>
            <li class="active">List Kriteria </li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
    <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data List Kriteria </h3>  
                </div><!-- /.box-header -->
                <div class="box-body">
                <a  href="admin.php?p=tambah-kriteria" class="btn btn-primary">Tambah Kriteria </a>
                    <br>    
                    <br>
                  <div class="table-responsive">
                    
                  <table id="example1" class="table table-bordered table-striped">
                      
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Id Kriteria</th>
                        <th>Nama Kriteria</th>
                      <th>Aksi</th>
                      </tr>
                     
                    </thead>
                    <tbody>
                       <?php
                       include './../koneksi/koneksi.php'; 
                      $no=0;
                   
                    $sql=mysqli_query($conn,"SELECT * FROM kriteria ");
                      while($q=mysqli_fetch_array($sql)){
                        $no++;

                     ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                         <td><?php echo $q['id_kriteria']; ?></td>
                        <td><?php echo $q['nama_kriteria']; ?></td>
                       <td>
                          <a href="admin.php?p=edit-kriteria&id=<?php echo $q['id_kriteria']; ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                          <a href="pages/delet-kriteria.php?id=<?php echo $q['id_kriteria']; ?>" onclick="return confirm('Yakin Mau DIhapus?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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