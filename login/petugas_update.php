<?php 
include "../core/koneksi.php";

$id 			= $_POST['id'];
$nama 			= $_POST['nama'];
$password 		= $_POST['password'];
$penempatan 	= $_POST['penempatan'];

mysqli_query($koneksi,"UPDATE user SET nama='$nama',password='$password', penempatan='$penempatan' WHERE id='$id'");

echo "<script>alert('Data Petugas Berhasil Diperbaru!');window.location='daftar_petugas.php'</script>";


?>