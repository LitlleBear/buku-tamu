<?php  include "../core/koneksi.php";
date_default_timezone_set('Asia/Jakarta');
$tgl = new DateTime('now');

$nama 		= $_POST['nama'];
$nik 		= $_POST['nik'];
$kontak 	= $_POST['kontak'];
$instansi 	= $_POST['instansi'];
$tgl		= date("Y-m-d");
$jam		= date("H:i:s");
$pejabat		= $_POST['pejabat'];
$kepentingan 	= $_POST['kepentingan'];

mysqli_query($koneksi,"INSERT INTO tb_tamu VALUES(NULL,'$nama','$nik','$kontak','$instansi','$tgl','$jam','$pejabat','$kepentingan')");

echo "<script>alert('Data Berhasil Disimpan!');window.location='daftar_tamu.php'</script>";
?>