 <?php
session_start();
$nama = $_SESSION['nama'];
$level = $_SESSION['level'];
$foto = $_SESSION['foto'];
// $isLoggedIn = $_SESSION['isLoggedIn'];
$id=$_SESSION['id'];
 
// if (isset($_SESSION['nama'])) {
//   header("location:admin.php");
// }
// cek apakah yang mengakses halaman ini sudah login
  if ($_SESSION['level']!="admin")
  {
      header("location:../siswa/index.php");
  }
  if ($_SESSION['level']!="admin")
  {
      header("location:../pegawai/index.php");
  }
?>
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../images/logo-sma.png"/>
      <title>SPK | Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/font awesome/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../plugins/datatables/datatables.min.css"/>
  <link rel="stylesheet" href="../plugins/datepicker/css/bootstrap-datetimepicker.min.css"/>
    <!-- Theme style -->
    <link rel="stylesheet" href="../plugins/admin style/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../plugins/admin style/css/skins/_all-skins.min.css">

      <!-- jQuery 2.1.4 -->
    <script src="../plugins/jquery/jquery-2.1.4.min.js"></script>
   
  </head>
  
  <body class="hold-transition skin-blue sidebar-mini">
    
    <!-- <div class="wrapper">
          <div class="logo">
            <img src="../images/logo.png" alt="" style="width: 90px;height: 50px;padding: 2px 0px 1px 40px;">
            <span class="jd-logo">Sistem Infomasi Manajemen Logistik UTD Kota Padang</span>
            <span class="bukit-t"></span>
        </div> -->
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SPK</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SPK Beasiswa</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
        

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../images/<?php echo $foto; ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $nama; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../images/<?php echo $foto; ?>" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $nama; ?>
                      <small><?php echo $level; ?></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                 
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                        <a href="admin.php?p=profil-admin" class="btn btn-default btn-flat"><i class="fa fa-user"> Profil</i></a>
                    </div>
                    <div class="pull-right">
                        <a href="../logout/logout.php" class="btn btn-default btn-flat"><i class="fa fa-sign-out"> Keluar</i></a>
                    </div>
                  </li>
                </ul>
              </li>
           
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar" style="margin-top: 30px;">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" style="">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../images/<?php echo $foto; ?>" class="img-rounded" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $nama; ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="header">Menu</li>
             <li class="treeview">
              <a href="admin.php">
                <i class="fa fa-home"></i> <span>Home</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
             
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Sub Data</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="admin.php?p=alternatif"><i class="fa fa-circle-o"></i> ALternatif</a></li>
                <li><a href="admin.php?p=kriteria"><i class="fa fa-circle-o"></i>Kriteria</a></li>
                <li><a href="admin.php?p=bobot"><i class="fa fa-circle-o"></i>Bobot</a></li>
                <li><a href="admin.php?p=bobot_kriteria"><i class="fa fa-circle-o"></i>Nilai Kriteria</a></li>
                <li><a href="admin.php?p=penilaian"><i class="fa fa-circle-o"></i>Penilaian</a></li>
                <li><a href="admin.php?p=hasil"><i class="fa fa-circle-o"></i>Hasil</a></li>
              </ul>
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-file-o"></i>
                <span>Laporan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
            
                 <li><a href="admin.php?p=laporan-siswa"><i class="fa fa-circle-o"></i> Lap. Data Siswa</a></li>
                  <li><a href="admin.php?p=laporan-barang-masuk"><i class="fa fa-circle-o"></i> Lap. Hasil Perhitungan</a></li>
                  <li><a href="admin.php?p=laporan-barang-keluar"><i class="fa fa-circle-o"></i> Lap. Penerima Beasiswa</a></li>
                  <!-- <li><a href="admin.php?p=laporan-perbulan"><i class="fa fa-circle-o"></i> Lap. Per Bulan</a></li> -->
                
              </ul>
            </li>
              <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>Bagian Permintaan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               <li><a href="admin.php?p=tambah-suplayer"><i class="fa fa-circle-o"></i> Tambah Suplayer</a></li>
                <li><a href="admin.php?p=list-suplayer"><i class="fa fa-circle-o"></i> List Suplayer</a></li>
              </ul>
            </li> -->
             <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>Admin</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="admin.php?p=tambah-admin"><i class="fa fa-circle-o"></i> Tambah Admin</a></li>
                <li><a href="admin.php?p=list-admin"><i class="fa fa-circle-o"></i> List Admin</a></li>
              </ul>
            </li> -->

         
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
         <?php
     $page_dir='pages';
    if(!empty($_GET['p'])){
        $page=scandir($page_dir,0);
        unset($page[0],$page[1]);
        $p=$_GET['p'];
        if(in_array($p.'.php',$page)){
         include($page_dir.'/'.$p.'.php');
        }
        else{
        include ($page_dir.'/404-page.php');
        }
    }
    else{
        include ($page_dir.'/homeAdmin.php');
    }
    ?>



      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark" style="top:50px;">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
         
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
          </div>
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
  
    </div><!-- ./wrapper -->

 <script src="../plugins/datepicker/js/jQuery.js"></script>
            <script src="../plugins/datepicker/js/moment.js"></script>

     <script src="../plugins/datepicker/js/bootstrap-datetimepicker.min.js"></script>
     <script type="text/javascript">
      $(function () {
        
        $('#datepicker').datetimepicker({
                                  
          format: 'DD-MM-YYYY',
           sideBySide: true,
          widgetPositioning: {
              horizontal: 'right',
              vertical: 'bottom'
          }
          
        });


        $('#datepicker1').datetimepicker({

        format: 'YYYY',
        defaultDate: "",
        });
        
        $('#datepicker2').datetimepicker({

        format:'YYYY',
        defaultDate: "",


        });

         $('#datepicker3').datetimepicker({

        format: 'YYYY-DD-MM',
        defaultDate: "",
        });
        
        $('#datepicker4').datetimepicker({

        format:'YYYY-MM-DD',
        defaultDate: "",


        });
          $('#datepicker5').datetimepicker({
                                  
          format: 'YYYY-MM-DD',
           sideBySide: true,
          widgetPositioning: {
              horizontal: 'right',
              vertical: 'bottom'
          }
          
        });



            
        
      
      });
      </script>
    <!-- Bootstrap 3.3.5 -->
    <!-- Bootstrap 3.3.5 -->
    <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
 
    <script type="text/javascript" src="../plugins/datatables/datatables.min.js"></script>

    <!-- AdminLTE App -->
    <script src="../plugins/admin style/js/app.min.js"></script>
 <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>