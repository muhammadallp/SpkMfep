<?php 

session_start();
if(isset($_SESSION['nama'])){
	echo "<script>location.href='admin/admin.php'</script>";
}

?>


<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../images/logo-sma.png"/>
    <title>SPK | Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/font awesome/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="./plugins/datatables/datatables.min.css"/>

    <!-- Theme style -->
    <link rel="stylesheet" href="../plugins/admin style/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../plugins/admin style/css/skins/_all-skins.min.css">
   
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>PMI</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="login-proses.php" method="post">
          <!-- <div class="form-group has-feedback">
            <select name="level" class="form-control">
              <option value="">-Level-</option>
              <option value="admin">Admin</option>
              <option value="suplayer">Permintaan</option>
              
            </select>
           
          </div> -->
          <div class="form-group has-feedback">
            <input type="text" name="username" class="form-control" placeholder="Username">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
         
        </div><!-- /.social-auth-links -->


      </div><!-- /.login-box-body -->

      <center>
        <br>
      <a href="../"><b> Kembali Kehalaman utama</b></a>
      </center>

    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
     <!-- jQuery 2.1.4 -->
    <script src="../plugins/jquery/jquery-2.1.4.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- Bootstrap 3.3.5 -->
    <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
 
    <script type="text/javascript" src="../plugins/datatables/datatables.min.js"></script>

    <!-- AdminLTE App -->
    <script src="../plugins/admin style/js/app.min.js"></script>

  </body>
</html>
