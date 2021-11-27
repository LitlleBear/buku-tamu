<!-- TAMU PENERIMA LAYANAN -->
<?php 
include "../core/koneksi.php";

$id 			= $_POST['id'];
$nama 			= $_POST['nama'];
$nik 			= $_POST['nik'];
$kontak 		= $_POST['kontak'];
$email 			= $_POST['email'];
$instansi 		= $_POST['instansi'];
$meja 			= $_POST['meja'];
$keperluan 		= $_POST['keperluan'];

mysqli_query($koneksi,"UPDATE tb_tamu1 SET nama='$nama',nik='$nik',kontak='$kontak',email='$email',instansi='$instansi',meja='$meja',keperluan='$keperluan' WHERE id='$id'");

echo "<script>alert('Data Tamu Berhasil Diperbaru!');window.location='daftar_tamu1.php'</script>";


?>