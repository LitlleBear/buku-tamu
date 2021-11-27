<?php 
include "../core/koneksi.php";

$id 			= $_POST['id'];
$nama 			= $_POST['nama'];
$nik 			= $_POST['nik'];
$kontak 		= $_POST['kontak'];
$instansi 		= $_POST['instansi'];
$kepentingan 	= $_POST['kepentingan'];

mysqli_query($koneksi,"UPDATE tb_tamu SET nama='$nama',nik='$nik',kontak='$kontak', instansi='$instansi',kepentingan='$kepentingan' WHERE id='$id'");

echo "<script>alert('Data Tamu Berhasil Diperbaru!');window.location='daftar_tamu.php'</script>";


?>