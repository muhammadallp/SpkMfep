<?php 

session_start();
if(isset($_SESSION['nama'])){
	echo "<script>location.href='admin/admin.php'</script>";
}

?>


<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="./images/logo-sma.png"/>
    <title>SPK | Sekolah</title>
    <meta name="description" content="">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="./plugins/bootstrap/css/bootstrap.min.css"/>
     <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/font awesome/font-awesome.min.css">
    <link rel="stylesheet" href="./plugins/user style/css/style.css">
    <link rel="stylesheet" href="./plugins/user style/css/fractionslider.css"/>
    <link rel="stylesheet" href="./plugins/user style/css/style-fraction.css"/>
     <link rel="stylesheet" href="./plugins/datepicker/css/bootstrap-datetimepicker.min.css"/>
</head>
<body>
<!--Start Header-->


    <!-- Navigation
================================================== -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <!-- <div class="row"> -->
            <span class="nav-caption"></span>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse"> 
                    <div class="container top-info">
                     <?php  if(empty($_SESSION['nama'])){ ?>
                    <ul>
                        <li><a href="login/login.php" class="my-tweet"><i class="fa fa-user"></i></a></li>
                        
                    </ul>
                    <?php } ?>
                   
                </div>

            </div>
    </div><!--/.container -->
</header>
<!--End Header-->
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
        include ($page_dir.'/welcome.php');
    }


 ?>


<!--start footer-->
<footer class="footer">
    <div class="container">
        <div class="row">
                <div class="widget_title">
                    <h4><span>Kontak</span></h4>
                </div>
                <div class="widget_content">
                    <p>Anda Dapat menghubungi atau mengunjungi kami melalui kontak dibawah ini .</p>
                    <ul class="contact-details-alt">
                        <li><i class="fa fa-map-marker"></i> <p><strong>Alamat</strong>: ALamat lengkap </p></li>
                        <li><i class="fa fa-user"></i> <p><strong>Phone</strong>: 08xxxxxxxx</p></li>
                        <li><i class="fa fa-envelope"></i> <p><strong>Email</strong>: <a href="#">mail@gmail.com</a></p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--end footer-->

<section class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 ">
                <p class="copyright">&copy; Copyright 2020</p>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="./plugins/jquery/jQuery-2.1.4.min.js"></script>
<script src="./plugins/datepicker/js/jQuery.js"></script>
            <script src="./plugins/datepicker/js/moment.js"></script>

     <script src="./plugins/datepicker/js/bootstrap-datetimepicker.min.js"></script>
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

        format:'YYYY-DD-MM',
        defaultDate: "",


        });



            
        
      
      });
      </script>
<script src="./plugins/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
        $(document).ready(function(){
            var combo_nagari = $("#combo_nagari");
            
            temp = combo_nagari.children(".dt").clone();
             $("#combo_kecamatan").change(function(){
                var value = $(this).val();              
                combo_nagari.children(".dt").remove();
                if(value!==''){
                    temp.clone().filter("."+value).appendTo(combo_nagari);
                } else {
                    temp.clone().appendTo(combo_nagari);
                }
             });
        });
    </script>

<script src="./plugins/user style/js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="./plugins/user style/js/jquery.smartmenus.min.js"></script>
<script type="text/javascript" src="./plugins/user style/js/jquery.smartmenus.bootstrap.min.js"></script>
    <script type="text/javascript" src="./plugins/user style/js/jquery.magnific-popup.min.js"></script>

<script src="./plugins/user style/js/main.js"></script>

</body>
</html>