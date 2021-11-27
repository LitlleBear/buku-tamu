<?php
include "../core/koneksi.php";
session_start();

$username = mysqli_real_escape_string($koneksi,$_POST['username']);
$password = mysqli_real_escape_string($koneksi,$_POST['password']);

$login = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' and password='$password' ");
$cek = mysqli_num_rows($login);


if ($cek > 0) {

		$_SESSION['username'] = $username;
		$_SESSION['level'] = "";
		header("location:index.php");
	
}else{
	echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!');window.location='login.php'</script>";
}
?>