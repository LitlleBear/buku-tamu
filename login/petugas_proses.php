<?php  include "../core/koneksi.php";

$nama 		= $_POST['nama'];
$username 	= $_POST['username'];
$password	= $_POST['password'];
$penempatan	= $_POST['penempatan'];
$level	 	= $_POST['level'];

mysqli_query($koneksi,"INSERT INTO user VALUES(NULL,'$nama','$username','$password','$penempatan','$level')");

echo "<script>alert('Data Berhasil Disimpan!');window.location='daftar_petugas.php'</script>";
?>