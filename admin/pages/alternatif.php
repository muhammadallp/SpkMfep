  <!-- DIbuat oleh Nopen rianto
Tanggal 08-02-2018 -->

    <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Alternatif
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"> Home</a></li>
            <li class="active">Data Alternatif</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
    <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Alternatif</h3>  
                </div><!-- /.box-header -->
                <div class="box-body">
                <a  href="admin.php?p=tambah-siswa" class="btn btn-primary">Tambah Alternatif</a>
                    <br>    
                    <br>
                  <div class="table-responsive">
                    
                  <table id="example1" class="table table-bordered table-striped">
                      
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kode Alternatif</th>
                        <th>Nomor BP</th>
                        <th>Nama </th>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                      </tr>
                     
                    </thead>
                    <tbody>
                       <?php
                       include './../koneksi/koneksi.php'; 
                      $no=0;
                    $sql=mysqli_query($conn,"SELECT * FROM alternatif ");
                    // $sql=mysqli_query($koneksi,"SELECT * FROM barang ORDER BY tanggal desc");
                      while($q=mysqli_fetch_array($sql)){
                        $no++;

                     ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                         <td><?php echo $q['id_alternatif']; ?></td>
                        <td><?php echo $q['nbp']; ?></td>
                        <td><?php echo $q['nama']; ?></td>
                          <td><?php echo $q['jurusan']; ?></td>

                         <td>
                         <a href="admin.php?p=edit-alternatif&id=<?php echo $q['id_alternatif']; ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                          <a href="pages/delete-alternatif.php?id=<?php echo $q['id_alternatif']; ?>" onclick="return confirm('Yakin Mau DIhapus?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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