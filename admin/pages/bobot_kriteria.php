
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <form action="" mothod="POST">
        <section class="content-header">
          <h1>
            List Bobot Kriteria 
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"> Home</a></li>
            <li class="active">List Bobot Kriteria </li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
    <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data List Bobot Kriteria</h3>  
                </div><!-- /.box-header -->
                <div class="box-body">
                <a  href="admin.php?p=tambah-bobot-kriteria" class="btn btn-primary">Tambah Bobot Kriteria </a>
                  <br>
                  <br>  
                  <div class="table-responsive">
                    
                  <table id="example1" class="table table-bordered table-striped">
                      
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Kriteria</th>
                        <th>Nilai Bobot</th>
                        <th>Keterangan</th>
                        <th>aksi</th>
                      </tr>
                     
                    </thead>
                    <tbody>
                       <?php
                       include './../koneksi/koneksi.php'; 
                      $no=0;
                    //   $cekbobot=mysqli_query($conn,"SELECT sum(nilai_bobot) as hasilbb FROM bobot_kriteria LIMIT 0,1");
                    //   $databobot=mysqli_fetch_array($cekbobot);
                    //   $totalbobot=$databobot['hasilbb'];
                      // echo $totalbobot;
                      // var_dump($totalbobot);
                    // $sql=mysqli_query($koneksi,"SELECT * FROM barang_keluar k, barang b WHERE b.id_barang = k.id_barang");
                    $sql=mysqli_query($conn,"SELECT * FROM nilai_kriteria INNER JOIN kriteria ON nilai_kriteria.id_kriteria=kriteria.id_kriteria"); 
                    while($q=mysqli_fetch_array($sql)){
                        $no++;

                     ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                         <td><?php echo $q['nama_kriteria']; ?></td>
                        <td><?php echo $q['nilai']; ?></td>
                        <td><?php echo $q['keterangan']; ?></td>
                  
                          <td>
                         <a href="admin.php?p=edit-bobot&id=<?php echo $q['id_nilaikriteria']; ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                          <a href="pages/delet-bobot.php?id=<?php echo $q['id_nilaikriteria']; ?>" onclick="return confirm('Yakin Mau DIhapus?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                         </tr>
                  <?php } ?>
                    </tbody>
                  </table>
                  </form>
                </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

            </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

