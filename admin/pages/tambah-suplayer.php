<!-- DIbuat oleh Nopen rianto
Tanggal 08-02-2018 -->

    <div class="content-wrapper">
  <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Tambah Suplayer
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="home.php"> Home</a></li>
            <li class="active">Suplayer</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
  <!-- Main row -->
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Form Suplayer</h3>
                 
                </div><!-- /.box-header -->
                <div class="box-body">
                <?php 
                            include '../koneksi/koneksi.php';
                            $auto=rand(1111,9999);
                            $id="PP".$auto;

                            if(isset($_POST['b1'])){

                               $tgl=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];

                           if(empty($_POST['id']) or empty($_POST['nm']) or empty($_POST['hp']) or empty($_POST['jk']) or empty($_POST['alm']) or empty($_POST['username']) or empty($_POST['password'])){

                            echo '<div class="alert alert-warning alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                  <strong>Error!</strong> Data tidak boleh ada yang kosong.
                                  </div>';

                            }else{

                              
                                  $pass=md5($_POST['password']);
                             
                                $sql=mysqli_query($koneksi,"INSERT INTO `suplayer`(`id_pp`, `nm_pp`, `jekel`, `alm`, `telp`, `tgl_lahir`, `username`, `password`, `ft`) VALUES ('$id','$_POST[nm]','$_POST[jk]','$_POST[alm]','$_POST[hp]','tgl','$_POST[username]','$pass','user.png')");
                                

                                 echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span></button>
                                  <strong>Sukses!</strong> Data berhasil diedit.
                                  </div>';
                                  echo '<meta http-equiv="refresh" content="1;url=admin.php?p=list-suplayer">';
                            }
                            }
                            ?>
                     <form id="contactForm" action="" method="post">
                     
                      <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                     <label>ID Suplayer</label>
                                        <input type="text" name="id" class="form-control" maxlength="100" value="<?php echo $id; ?>" placeholder="ID Pimpinan" readonly>
                                    </div>
                                      
                                </div>
                            </div>
                            <br>
                             <div class="row">
                                <div class="form-group">
                                <div class="col-lg-6 ">
                                <label>Nama lengkap</label>
                                   <input type="text" name="nm" class="form-control" maxlength="100" value="" placeholder="Nama lengkap">
                                      </div>
                                      <div class="col-lg-6 ">
                                        <label>Nomor Telepon</label>
                                        <input type="text" name="hp" class="form-control" maxlength="100" value="" placeholder="Nomor Telepon">
                                    </div>
                                </div>
                            </div>
                            <br>
                           
                                      <div class="row">
                                <div class="form-group">
                                     <?php
                                      
echo "<div class='col-md-4'><label>Tanggal Lahir</label><select name=tanggal class='form-control'> 
<option value=''>-Pilih Tanggal-</option>";
for ($no=1;$no<=31;$no++)
{
?>
<option value="<?php echo $no; ?>"><?php echo $no; ?></option>

<?php } ?>
</select></div>

<?php
$nm_bulan = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember" );

echo "<div class='col-md-4'><label>Bulan Lahir</label><select name=bulan class='form-control'>
<option value=''>-Pilih Bulan-</option>";
for ($bln=1; $bln<=12; $bln++)
{
?>
<option value="<?php echo $bln; ?>"><?php echo $nm_bulan[$bln]; ?></option> ";
<?php } ?>
</select></div>

<?php
$thn_skrg=2005;
echo "<div class='col-md-4'><label>Tahun Lahir</label><select name=tahun class='form-control'>
<option value='' selected>-Pilih Tahun-</option>";
for ($thn=1950;$thn<=$thn_skrg;$thn++)
{
?>
<option value="<?php echo $thn; ?>"><?php echo $thn; ?></option>
<?php } ?>
</select></div>

                                  
                                </div>
                            </div>
                              <br>
                               <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                     <label>Jenis Kelamin</label>
                                         <br>
                                        <input type="radio" name="jk" id="radio" value="Laki-laki" /> Laki-Laki <input type="radio" name="jk" id="radio2" value="Perempuan"/> Perempuan
                                    </div>
                                      
                                </div>
                            </div>
                              <br>
                              <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                     <label>Alamat</label>
                                        <textarea id="Alamat" class="form-control" name="alm" rows="2" cols="10" data-msg-required="Please enter your Alamat." maxlength="5000" placeholder="Alamat"></textarea>    
                                    </div>
                                      
                                </div>
                            </div>
                              <br>
                               <div class="row">
                                <div class="form-group">
                                <div class="col-lg-6 ">
                                <label>Username</label>
                                   <input type="text" name="username" class="form-control" maxlength="100" value="" placeholder="Username">
                                      </div>
                                      <div class="col-lg-6 ">
                                        <label>Password</label>
                                  

                                        <input type="password" name="password" class="form-control" maxlength="100" value="" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <br>
                              <br>
                           <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" name="b1" class="btn btn-success"><i class="fa fa-save"></i> Tambah Suplayer</button>
                                    <a href="admin.php?p=list-suplayer" class="btn btn-info"><i class="fa fa-table"></i> List Suplayer</a>
                                    
                                </div>
                            </div>
                        </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

     </section><!-- /.content -->

   </div>