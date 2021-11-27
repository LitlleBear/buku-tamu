<?php  include "../core/koneksi.php";
date_default_timezone_set('Asia/Jakarta');
$tanggal = new DateTime('now');

$tanggal		= date("Y-m-d");
$jam			= date("H:i:s");
$nama 			= $_POST['nama'];
$nik 			= $_POST['nik'];
$kontak 		= $_POST['kontak'];
$email 			= $_POST['email'];
$instansi 		= $_POST['instansi'];
$meja			= $_POST['meja'];
$keperluan 		= $_POST['keperluan'];

mysqli_query($koneksi,"INSERT INTO tb_tamu1 VALUES(NULL,'$tanggal','$jam','$nama','$nik','$kontak','$email','$instansi','$meja','$keperluan')");

echo "<script>alert('Data Berhasil Disimpan!');window.location='daftar_tamu1.php'</script>";
?>