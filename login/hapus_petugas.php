<?php 
// koneksi database
include '../core/koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM user WHERE id='$id'");

header("Location:daftar_petugas.php");


?>