
<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "spkmfep";
 
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if(mysqli_connect_errno()){
	echo"<script> alert('Koneksi database gagal.!!'); </script>";
}
?>
