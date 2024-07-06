<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['isLoggedIn']);
unset($_SESSION['nama']);
unset($_SESSION['foto']);
unset($_SESSION['level']);

echo "<script> location.replace('../') </script>";
?>