

<?php 

include '../../koneksi/koneksi.php';

$id=$_GET['id'];

 $sql1=mysqli_query($koneksi,"DELETE FROM kategori WHERE id='$id'");
	
	if($sql1){
 echo '<script> alert("Data berhasil dihapus."); javascript:history.back(); </script>';
	}else{
echo '<script> alert("Data Gagal dihapus."); javascript:history.back(); </script>';	
	}

  

?>